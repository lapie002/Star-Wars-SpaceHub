<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FlightHub Test</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="row nav">
        <div class="col-md-3 links">
            <a href="">Star Wars &nbsp;&nbsp; SWAPI</a>
        </div>
        <div class="col-md-9 text-right links">
            <a href="#">Characters</a>
            <a href="#">Planets</a>
            <a href="#">Starships</a>
            <a href="#">Search</a>
        </div>
    </div>

    <div class=" contentA ">
        <div class="title ">
            Directory Services
        </div>
        <div class="bottom-center links">

            @yield('contenu')

        </div>
    </div>
</div>
<div class="container">
    <div class="linksPl"></div>
</div>
<footer class="rowF">
    <div class="">Copyright The Walt Disney Company - 2019</div>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
