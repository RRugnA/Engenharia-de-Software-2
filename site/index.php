<!DOCTYPE html>
<html>

    <?php include('templates/header.php'); ?>

    <div id="fundo-mogi" class= "img-mogi img-fluid background-branco">
        <div class="container justify-content-center align-items-center text-center">
            <div class="row ">
                <div class="col-12 py-5 text-center">
                    <p class="titulo-mogi">De Olho Mogi das Cruzes</p>
                </div>
                <div class="col-12 py-5">
                    <form action="pesquisar.php" method="POST" class="fc my-2 my-lg-0"> 
                        <p class="pesquisa">Pesquisa rápida:</p>
                        <input size="75%" type="text" autocomplete="on" name="pesquisar" placeholder="Digite o nome do servidor">
                        <input type="submit" value="Pesquisar" class="btn btn-outline-success">
                    </form>             
                </div>
            </div>
        </div>
    </div>

    <div class="menu-body py-5 background-branco">
        <div class="container">
            <div class="row text-center">

                <div class="col-12 col-sm-6 col-md-6 col-lg-3 pt-3">
                    <div class="content">
                        <a href="#">
                            <i class="fa fa-line-chart fa-5x py-3" aria-hidden="true"></i>
                            <h2 class="pb-3">Receitas e Despesas</h2>
                            <p>Saiba como estão sendo gastos os Recursos Públicos pela Prefeitura</p>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-3 pt-3">
                    <div class="content">
                        <a href="pesquisa_servidores.php">
                            <i class="fa fa-users fa-5x py-3" aria-hidden="true"></i>
                            <h2 class="pb-3">Servidores Públicos</h2>
                            <p>Folha de Pagamento e Gastos com servidores públicos</p>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-3 pt-3">
                    <div class="content">
                        <a href="pesquisa_camara.php">
                            <i class="fa fa-university fa-5x py-3" aria-hidden="true"></i>
                            <h2 class="pb-3">De Olho na Câmara</h2>
                            <p>Acompanhe os projetos apresentados pelos vereadores e seus votos nas sessões da Câmara</p>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-3 pt-3">
                    <div class="content">
                        <a href="pesquisa_obras.php">
                            <i class="fa fa-building fa-5x py-3" aria-hidden="true"></i>
                            <h2 class="pb-3">Obras <br> Públicas</h2>
                            <p>Informações sobre Obras Públicas, custos e origem de recursos</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <?php include('templates/footer.php'); ?>

</html>