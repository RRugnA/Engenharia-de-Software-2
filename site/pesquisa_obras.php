<!DOCTYPE html>
<html lang="pt-br">

    <?php include('templates/header.php'); ?>
    

    <div class="background-branco">
        <div class="container pt-4">
            <div>
                <h1>Obras Públicas</h1>
                <p>Consulte o andamento das obras:</p>
            </div>

            <form method="post" action="listar.php" id="myForm">
                <p>Pesquisar por:</p>
                <div class="form-check ml-5">
                    <input class="form-check-input" type="radio" name="pesquisa" id="ascendente" value="0" checked>
                    <label class="form-check-label" for="pesquisaServidor1">
                        Destinação da Obra (A-Z)
                    </label>
                </div>
                <div class="form-check ml-5">
                    <input class="form-check-input" type="radio" name="pesquisa" id="descendente" value="1">
                    <label class="form-check-label" for="pesquisaServidor2">
                        Data de Início da Obra (Mais Antigo)
                    </label>
                </div>
                <div class="form-check ml-5">
                    <input class="form-check-input" type="radio" name="pesquisa" id="descendente" value="2">
                    <label class="form-check-label" for="pesquisaServidor2">
                        Data de Conclusão da Obra (Mais Recente)
                    </label>
                </div>
                <div class="form-check ml-5">
                    <input class="form-check-input" type="radio" name="pesquisa" id="descendente" value="3">
                    <label class="form-check-label" for="pesquisaServidor2">
                        Situação da Obra (Concluído / Em Andamento)
                    </label>
                </div>
                <br>

                <input type="hidden" name="pagina" value="2">

                <div class="form-group row">
                    <div class="col-sm-10 my-4">
                        <input type="submit" class="btn btn-outline-succes ml-5" value="Pesquisar">
                    </div>
                </div>
            </form>    
        </div>
    </div>

    <?php include('templates/footer.php'); ?>

</html>