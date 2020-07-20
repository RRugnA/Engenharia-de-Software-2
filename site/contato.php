<!DOCTYPE html>
<html lang="pt-br">

    <?php include('templates/header.php'); ?>

    <div class="container">
      <div class="py-5 text-center">
        <h2>Nos mande um feedback!</h2>
        <p class="lead">Esta seção do site é destinada a uma maior interação com nossos visitantes. Sinta-se a vontade para nos mandar uma avaliação do site e do conteúdo em geral! Sua ajuda nos permitirá aprimorar ainda mais nossos serviços.</p>
      </div>
	  
		<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					echo "</br>";
		?>
		
      <div class="row">
        
        <div class="col-md-8 order-md-1 pb-5">
          <h4 class="mb-3">Formulário</h4>
			
          <form class="needs-validation" novalidate="" method="get" action="01valor.php">
		  
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="primeiroNome">Nome</label>
                <input type="text" class="form-control" id="primeiroNome" placeholder="Nome completo" value="" required="" name="nome">
                <div class="invalid-feedback">
                  É obrigatório inserir um nome válido.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">E-mail <span class="text-muted">(Opcional)</span></label>
              <input type="text" class="form-control" id="email" placeholder="exemplo@email.com" name="e-mail">
              <div class="invalid-feedback">
                Por favor, insira um endereço de e-mail válido.
              </div>
            </div>
			
			 <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiracao">Ano de nascimento</label>
                <input type="number" class="form-control" id="cc-expiracao" placeholder="" required="" name="nascimento" min="1940" max="2020" value="2020">
                <div class="invalid-feedback">
                  Ano de nascimento é obrigatória.
                </div>
              </div>
            </div>

            <h4 class="mb-3">Avaliação</h4>
            <div class="d-block my-3">
			
              <div class="custom-control custom-radio">
                <input id="otimo" name="aval" type="radio" class="custom-control-input" checked="" required="" value="1">
                <label class="custom-control-label" for="otimo">Ótimo</label>
              </div>
			  
              <div class="custom-control custom-radio">
                <input id="bom" name="aval" type="radio" class="custom-control-input" required="" value="2">
                <label class="custom-control-label" for="bom">Bom</label>
              </div>
			  
              <div class="custom-control custom-radio">
                <input id="mediano" name="aval" type="radio" class="custom-control-input" required="" value="3">
                <label class="custom-control-label" for="mediano">Mediano</label>
              </div>
			  
			  <div class="custom-control custom-radio">
                <input id="ruim" name="aval" type="radio" class="custom-control-input" required="" value="4">
                <label class="custom-control-label" for="ruim">Ruim</label>
              </div>
			  
			  <div class="custom-control custom-radio">
                <input id="pessimo" name="aval" type="radio" class="custom-control-input" required="" value="5">
                <label class="custom-control-label" for="pessimo">Péssimo</label>
              </div>
			  
            </div>

			<!-- <center> -->
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
			<!-- </center> -->
			
          </form>
        </div>
      </div>

    </div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
          var forms = document.getElementsByClassName('needs-validation');

          // Faz um loop neles e previne envio
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>

    <?php include('templates/footer.php'); ?>

</html>