<!DOCTYPE html>
<html lang="es">
    <head>

        <!-- Etiquetas meta basicas -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="/css/app.css">
        <!--<link rel="stylesheet" href="css/fonts/style.css">-->

        <style>
            /* estilos para los botones de Registate Aqui y Ver Detalles */
            .btn.btn-primary.enlaton {
                color: #ffffff;
                background-color: #6d3483;
                background-image: linear-gradient(to bottom, #7742c7, #802da1);
                border-color: #712b99 #712b99 #712b99;
                font-size: 15px;
                font-weight: bold;
                padding-left: 3%;
                padding-right: 3%;
            }
            .btn.btn-primary.enlaton:hover {
                color: #ffffff;
                background-color: #802da1;
                background-image: linear-gradient(to bottom, #802da1, #802da1);
                border-color: #712b99 #712b99 #712b99;
            }    
        </style>

        @yield('titulo')
        
    </head>
    <body>
        <div id="app">
            <header>
            <div id="imagen">
                <img src="/images/logo.png" width="100%" height="auto" max-height="81px">
            </div>
            <nav id="barra">
                <ul class="nav justify-content-end">
                    <form class="form-inline my-2 my-lg-0 col-md-8" style="diplay:inline-block;right:5%">
                        <input class="form-control  col-md-12 mr-sm-2 " type="search" placeholder="Busqueda Rapida" aria-label="Search">
                    </form>
                    <li class="nav-item">
                    <a class="nav-link active co" href='" . route(inicio) . "'>##</a>
                    </li>
                    
                    <li class="nav-item">
                    <span class="co-linea"> | </span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link co" ><enlace-registrar-comp></enlace-registrar-comp></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link co"><enlace-ingresar-comp></enlace-ingresar-comp></a>
                    </li>
                </ul>
        </header>
        @yield('cuerpo')
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>