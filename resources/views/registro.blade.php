<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Checkout example for Bootstrap</title>

    <link href="form-validation.css" rel="stylesheet">

    <style>
    
        footer {
        background-color: #f2f2f2;
        padding: 25px;
        }

    </style>

  </head>

  <body >

        @include('template.header')

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="{!! asset('img/oie_transparent.png') !!}" style="width:150px;">
        <h2>Crie a sua conta</h2>
        <p class="lead"></p>
      </div>

     
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Dados Pessoais</h4>
          <form action="/index" method="POST" class="needs-validation" novalidate="" >
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nome</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  O nome e obrigatorio!
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Apelido</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  O apelido e obrigatorio!
                </div>
              </div>
            </div>

            <div class="mb-3">
                <label for="email">Email<span class="text-muted"></span></label>
                <input type="email" class="form-control" id="email" name="email">
                <div class="invalid-feedback">
                  Entre um email valido
                </div>
              </div>

            <div class="mb-3">
              <label for="password">Senha<span class="text-muted"></span></label>
              <input type="password" class="form-control" id="pass" placeholder="******" name="pass">
              <div class="invalid-feedback">
                Entre um senha valido
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Confirmar senha</label>
              <input type="password" class="form-control" id="address" placeholder="******" required="" name="conf-senha">
              <div class="invalid-feedback">
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Confirmar o cadastro</button>
          </form>
        </div>
      </div>
    </div>

    @include('template.footer')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
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
</body

></html>