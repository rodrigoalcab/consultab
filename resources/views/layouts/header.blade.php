<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Gerenciador de Posts</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
       
        <style>
            .msg {
                background-color: #D4EDDA;
                color: #155724;
                border: 1px solid #C3E6CB;
                width: 100%;
                margin-bottom: 0;
                text-align: center;
                padding: 10px;
            }
        
        </style>
    </head>
 <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Consulta B</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('fichas.index') }}">Início</a>
                </li>
            </ul>
        </div>
    </nav>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block text-center">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if ($message = Session::get('danger'))
        <div class="alert alert-danger alert-block text-center">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="container">
        @yield('content')
    </div>
    </body>
</html>
