<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{config('app.name','ICU-Plataform')}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  .projectos-img{

    width: 300px;
    height: 200px;
  }

  .descricao p{

    font-size: 20px;
    text-align: justify;
    

  }

  a{
    cursor: pointer;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>
    
    @include('template.header')

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>
        
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="d-block mx-auto mb-4" src="{!! asset('img/investidor-anjo.jpg') !!}" style="height:810px;">
                    <div class="carousel-caption">
                    <h3></h3>
                    </div>      
                </div>
                
                <div class="item">
                    <img class="d-block mx-auto mb-4" src="{!! asset('img/blockchain.png') !!}" style="height:810px;">
                    <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                    </div>      
                </div>
                </div>
        
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Proximo</span>
                </a>
            </div>
            
    <div class="container">
        @yield('conteudo')
    </div>
    
    @include('template.footer')
</body>
</html>
