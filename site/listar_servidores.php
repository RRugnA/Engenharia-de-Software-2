<?php
include('conexao.php');
require_once 'Funcionario.php';
require_once 'Servidor.php';

$pagina = filter_input(INPUT_POST, 'pagina', FILTER_SANITIZE_NUMBER_INT);
$qnt_result_pg = filter_input(INPUT_POST, 'qnt_result_pg', FILTER_SANITIZE_NUMBER_INT);
$ordem = filter_input(INPUT_POST, 'ordem', FILTER_SANITIZE_NUMBER_INT);

//calcular o início da visualização
$inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;

//consultar no BD

if($ordem == 0){
    $result_usuario = "SELECT * FROM servidores ORDER BY nome ASC LIMIT $inicio, $qnt_result_pg";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
}elseif($ordem == 1){
    $result_usuario = "SELECT * FROM servidores ORDER BY cargo ASC LIMIT $inicio, $qnt_result_pg";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
}elseif($ordem == 2){
    $result_usuario = "SELECT * FROM servidores ORDER BY salarioJun2020 ASC LIMIT $inicio, $qnt_result_pg";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
}

//Verificar se encontrou resultado na tabela
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
    ?>
    <table class="table table-striped table-bordered table-hover ">
        <thead>
            <tr>   
                <th>RGF</th>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Salario</th>
            </tr>
        </thead>
        <tbody>
    <?php
        while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){

            $servidor = new Servidor();
            $servidor->setRgf($row_usuario['RGF']);
            $servidor->setNome($row_usuario['Nome']);
            $servidor->setCargo($row_usuario['Cargo']);
            $servidor->setSalario(number_format($row_usuario['SalarioJun2020'], 2, ",", "."));

            echo "<tr>";
                echo "<th>" . $servidor->getRgf() . "</th>";
                echo "<th>" . $servidor->getNome() . "</th>";
                echo "<th>" . $servidor->getCargo() . "</th>";
                echo "<th>" . $servidor->getSalario() . "</th>";
            echo "</tr>";        
        }
    ?>
        </tbody>
    </table>
<?php
//paginação - somar a quantidade de usuários
$result_pg = "SELECT COUNT(id) AS num_result FROM servidores";
$resultado_pg = mysqli_query($conn, $result_pg);
$row_pg = mysqli_fetch_assoc($resultado_pg);

//Quantidade de páginas
$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg); //ceil = arredonda valores

//limitar os links antes/depois
$max_links = 5;

echo '<nav aria-label="...">';
echo '<ul class="pagination">';
echo '<li class="page-item">';
echo "<span class='page-link'><a href='#' onclick='listar_usuario(1, $qnt_result_pg, $ordem)'> Primeira </a></span>";
echo '</li>';

for($pag_ant = $pagina -$max_links; $pag_ant <= $pagina -1; $pag_ant++){
    if($pag_ant >= 1){
        echo "<li class='page-item'><a class='page-link' href='#' onclick='listar_usuario($pag_ant, $qnt_result_pg, $ordem)'> $pag_ant </a></li>";
    }    
}

echo '<li class="page-item active" aria-current="page">';
echo '<span class="page-link">';
echo " $pagina ";
echo '</span>';
echo '</li>';

for($pag_dep = $pagina +1; $pag_dep <= $pagina +$max_links; $pag_dep++){
    if($pag_dep <= $quantidade_pg){
        echo "<li class='page-item'><a class='page-link' href='#' onclick='listar_usuario($pag_dep, $qnt_result_pg, $ordem)'> $pag_dep </a></li>";
    }    
}

echo '<li class="page-item">';
echo "<span class='page-link'><a href='#' onclick='listar_usuario($quantidade_pg, $qnt_result_pg, $ordem)'> Ultima </a></span>";
echo '</li>';
echo '</ul>';
echo '</nav>';

}else{
    echo "<div class='alert alert-danger' role='alert'> Nenhum usuário encontrado </div>";
}   
?>
   <input class="btn btn-outline-succes mb-3" type="button" onclick="location.href='pesquisa_servidores.php';" value="Voltar" />
