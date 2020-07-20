<!DOCTYPE html>
<html lang="pt-br">

    <?php include('templates/header.php'); ?>
    

    <div class="background-branco">
        <div class="container pt-4">
        <?php
        require_once "Funcionario.php";
        require_once "Servidor.php";
        
        $pesquisar = $_POST['pesquisar'];
        $servidor = new Servidor();
        $servidor->pesquisarServidor($pesquisar);
        ?>
        </div>
    </div>

    <?php include('templates/footer.php'); ?>

</html>