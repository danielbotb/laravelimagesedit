<!DOCTYPE html>
<html>
    <head>
        <title>EDUCANDO - @yield('titulo')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>

            body {
                background-color: #f8f9fa;
                color: #343a40;
            }
            .navbar {
                background-color: #e3f2fd;
            }
            .navbar-brand img {
                height: 100px;
            }
            .nav-link {
                color: #495057;
            }
            .nav-link:hover {
                color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="EDUCANDO Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cursos.index') }}">Cursos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('docentes.index') }}">Docentes</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button type="button" class="btn btn-success">Buscar</button>
                        </form>
                    </div>
                </div>
            </nav>

            @yield('contenido')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+IjCz4lfEkHsZKUrZB7oy/56iQgMp" crossorigin="anonymous"></script>
    </body>
</html>
