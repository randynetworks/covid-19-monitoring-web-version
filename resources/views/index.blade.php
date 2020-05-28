<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>HMISI COVID-19 Monitoring</title>
  </head>

  <style>
      body{
          background: #29b6f6;
      }

      @media only screen and (min-width: 600px){
        .logo {
            height:300px;
            width:300px;
        }
        h1{
            color: aliceblue;
            font-size: 50px;
        }

        h4{
            color: aliceblue;
            font-size: 25px;

        }

        h5{
            color: rgb(81, 81, 255);
        }
      }

      @media only screen and (max-width: 400px){
        .logo {
            height:150px;
            width:150px;
        }
        h1{
            color: aliceblue;
            font-size: 30px;
        }

        h4{
            color: aliceblue;
            font-size: 15px;

        }

        h5{
            color: rgb(81, 81, 255);
        }
      }

  </style>
  <body class="text-center">
    <img class="pt-3" src="{!! asset('img/hmisi.png') !!}" alt="" height="300px" width="300px">
      <h1 class="pt-5">Monitor COVID-19 <br> di Indonesia</h1>
        <br>
        @foreach ($data as $dataCOVID)
        <div>
            <img class="logo" src="{!! asset('img/sakit.png') !!}" alt="">
            <br>
            <h4 class="pt-3">Positif<br>{{ $dataCOVID['positif'] }} Orang.</h4>
        </div>
        <br>
        <div>
            <img src="{!! asset('img/sembuh.png') !!}" alt="" height="170px" width="170px">
            <br>
            <h4 class="pt-3">Sembuh<br>{{ $dataCOVID['sembuh'] }} Orang.</h4>
        </div>
        <br>
        <div>
            <img src="{!! asset('img/die.png') !!}" alt="" height="170px" width="200px">
            <br>
            <h4 class="pt-3">Meninggal<br>{{ $dataCOVID['meninggal'] }} Orang.</h4>
        </div>

        @endforeach
        <br><br>
        <h5>#staysafe  #keepCalmAndCoding</h5>
        <br><br>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
