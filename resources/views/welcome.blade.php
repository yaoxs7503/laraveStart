<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
                 <meta name="viewport" content="width=device-width, initial-scale=1">
                 <meta name="csrf-token" content="{{ csrf_token()}}">
                 <script>window.Laravel={csrfToken:'{{csrf_token() }}'}</script>
                 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css'/>
        <title>Larticle</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>
        <div id="app">
            <navbar></navbar>
        <div class="container">
            <articles></articles>
        </div>
        </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/esm/popper.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>

</html>
