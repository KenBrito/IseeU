<html lang="en"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <title>Doacao</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Custom styles for this template -->
        <link href="form-validation.css" rel="stylesheet">

        <style>
          
          /* Add a gray background color and some padding to the footer */
          footer {
              background-color: #f2f2f2;
              padding: 25px;
                
              }

          .projectos-img{

            width: 300px;
            height: 200px;
            }

        </style>

      </head>
    
      <body class="bg-light">

        @include('template.header')
    
        <div class="container">
          <div class="py-5 text-center">
              <img class="d-block mx-auto mb-4" src="{!! asset('img/oie_transparent.png') !!}" style="width:150px;">
            <h2>Preencha os campos para sua doacao</h2>
            <p class="lead"></p>
          </div>
    
          <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                  <img src="{!! asset('img/Zilani1.jpg') !!}" class="projectos-img">
                <span class="text-muted">Descricao do projecto</span>
              </h4>
              <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0"><strong>Projecto um lar</strong></h6>
                  </div>
                </li>
              </ul>
              <form class="card p-2">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Promo code">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">Redeem</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-8 order-md-1">
              <h4 class="mb-3"></h4>
              <form class="needs-validation" novalidate="">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="firstName">Nome no cartao</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="lastName">Numero de cartao</label>
                    <input type="number" class="form-control" id="lastName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                      Valid last name is required.
                    </div>
                  </div>
                </div>
    
                <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="firstName">Data de expiracao</label>
                      <input type="date" class="form-control" id="firstName" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="lastName">CVV</label>
                      <input type="number" class="form-control" id="lastName" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>
                  </div>
      
                <h4 class="mb-3">Payment</h4>
    
                <div class="d-block my-3">
                  <div class="custom-control custom-radio">
                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                    <label class="custom-control-label" for="credit">Waves</label>
                  </div>
                  <input type="number" class="form-control" id="firstName" placeholder="1.000.000.000" value="" required="">
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Confirmar doacao</button>
              </form>
            </div>
          </div>
    
        
        </div>

        @include('template.footer')




    <script src="waves-api.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
        WavesAPI.TESTNET_CONFIG.nodeAddress = 'http://127.0.0.1:6861';
        WavesAPI.TESTNET_CONFIG.matcherAddress = 'http://127.0.0.1:6862/matcher';
        WavesAPI.TESTNET_CONFIG.networkByte = 85;
        const Waves = WavesAPI.create(WavesAPI.TESTNET_CONFIG);

        $(document).ready(function () {
            var wallet;
            if (localStorage.getItem('carteira')) {
                var d=localStorage.getItem('carteira');
                wallet=JSON.parse(d);
            } else {
                wallet=Waves.Seed.create();
                localStorage.setItem('carteira', JSON.stringify(wallet));
            }

            $("#accountNumber").text(wallet.address);
            Waves.API.Node.v1.addresses.balance(wallet.address)
            .then((data) => {
                console.log("BALANCO: ", data.balance);
                Waves.Asset.get('WAVES')
                .then(function (Asset){                
                    var b = new Waves.Money(data.balance, Asset);
                    console.info(b);
                    $("#balance").text(b.toFormat() + " WAVES");
                });
            });
        });
    </script>


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
      
    </body>
    
</html>