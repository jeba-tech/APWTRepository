<html>
    <head>
        <title>Product App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    </head>
    <body class="bg-success text-dark bg-opacity-25 m-5">
          @include('inc.topnav')
        <div class="m-5 container bg-success p-5 rounded text-dark bg-opacity-25">
           
            <div class="ms-5 p-3">
                @yield('content')
            </div>
        </div>
        
    </body>
</html>