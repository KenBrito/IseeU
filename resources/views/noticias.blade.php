
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    </style>
</head>
<body>
    @include('template.header')

    <div class="jumbotron">
            <h1 class="display-4">HOUSING THE NATION: How the government will build one million new houses</h1>
            <p class="lead">The Government is set to launch construction of 30,000 low cost houses in Nairobi's Eastlands area, as the ‘Big Four’ agenda 
                takes shape. The low cost project targets to putting up 5,000 houses in Shauri Moyo, 20,000 houses in Makongeni, 3,000 houses in Starehe 
                and 2,000 units in Park Road estates.</p>
            
            <a class="btn btn-primary btn-lg" href="https://www.standardmedia.co.ke/ktnnews/video/2000156930/-housing-the-nation-how-the-government-will-build-one-million-new-houses" target="_blanck" role="button">See More</a>
          </div>
        <iframe width="691" height="388" src="https://www.youtube.com/embed/uGTQiAWin40" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

        @include('template.footer')
</body>
</html>