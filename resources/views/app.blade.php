<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"></link>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"></link>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        //<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"></link>
        <!-- Styles -->
      
    </head>
    
    <body>
      
        
      <div class="container">
       
     

        @include('navbar')
        hayder
        @yield('content');
    </div>

    </body>
</html>
