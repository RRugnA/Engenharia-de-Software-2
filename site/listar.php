<!DOCTYPE html>
<html lang="pt-br">

    <?php include('templates/header.php'); ?>
    
        <div class="container pt-3">
            <h2>Exibindo resultados:</h2>
            <span id="conteudo"></span>
        </div>

        <?php 
            $result = $_POST['pesquisa'];
            $area = $_POST['pagina'];
        ?>

        <script>
            var qnt_result_pg = 20; //qtdad de registros por página
            var pagina = 1; //pagina inicial
            var ordem = "<?php echo $result; ?>";
            var area = "<?php echo $area; ?>";

            $(document).ready(function(){
                listar_usuario(pagina, qnt_result_pg, ordem);
            });

            function listar_usuario(pagina, qnt_resut_pg, ordem){
                var dados = {
                    pagina: pagina,
                    qnt_result_pg: qnt_result_pg,
                    ordem: ordem
                }
                if(area == 0){
                    $.post('listar_camara.php', dados, function(retorna){
                        $("#conteudo").html(retorna);
                    });
                }else if(area == 1){
                    $.post('listar_servidores.php', dados, function(retorna){
                        $("#conteudo").html(retorna);
                    });
                }else if(area == 2){
                    $.post('listar_obras.php', dados, function(retorna){
                        $("#conteudo").html(retorna);
                    });
                }
                
            }
        </script>

    <?php include('templates/footer.php'); ?>

</html>