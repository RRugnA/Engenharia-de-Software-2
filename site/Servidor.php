<?php

class Servidor extends Funcionario{

    private $rgf;

    public function cadastrarServidor(){
        include('conexao.php');

        $query = "INSERT INTO servidores (RGF, Nome, Cargo, Salario) VALUES(". $this->getRgf() . ", '" . $this->getNome() . "', '" . $this->getCargo() . "', " . $this->getSalario() . ")";

        if (mysqli_query($conn, $query)) {
            echo "Cadastrado com sucesso";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

    public function pesquisarServidor($nome){
        include('conexao.php');

        $query = "SELECT * FROM servidores WHERE Nome LIKE '%$nome%' LIMIT 11";
        $resultado_pesquisa = mysqli_query($conn, $query);

        $contador = 0;

        echo "<h2> Resultado da Pesquisa para '" . $nome . "':</h2>";
        
        echo "<table class='table table-striped table-bordered table-hover '>";
                echo "<thead>";
                    echo "<tr>";   
                        echo "<th>RGF</th>";
                        echo "<th>Nome</th>";
                        echo "<th>Cargo</th>";
                        echo "<th>Salario</th>";
                    echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
        // if(mysqli_fetch_assoc($resultado_pesquisa) != NULL){ --> Não está puxando algumas consultas
            while($rows_pesquisa = mysqli_fetch_assoc($resultado_pesquisa)){            
                $this->setRgf($rows_pesquisa['RGF']);
                $this->setNome($rows_pesquisa['Nome']);  
                $this->setCargo($rows_pesquisa['Cargo']); 
                $this->setSalario(number_format($rows_pesquisa['SalarioJun2020'], 2, ",", "."));    
                    echo "<tr>";
                        echo "<th>" . $this->getRgf() . "</th>";
                        echo "<th>" . $this->getNome() . "</th>";
                        echo "<th>" . $this->getCargo() . "</th>";
                        echo "<th>" . $this->getSalario() . "</th>";
                    echo "</tr>";   
                $contador += 1;                
            }
            if($contador >= 10){
                echo "<p>Muitos resultados encontrados. Por favor, refine sua busca.</p>";
                echo "Mostrando os dez primeiros resultados.";                    
            }
        // }else{
        //     echo "<p>Nenhum resultado encontrado.</p>";
        // } 
            echo "</tbody>";
        echo "</table>";
        
    }
 
    public function getRgf()
    {
        return $this->rgf;
    }

    public function setRgf($rgf)
    {
        $this->rgf = $rgf;

        return $this;
    }

}
