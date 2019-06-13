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

        <title>Inicio</title>
    </head>
    <body>

        <!-- 
            La etiqueta header contiene todo el encabezado
        -->
        <header>
            <div id="imagen">
                <img src="/images/logo.png" width="100%" height="auto">
            </div>
            <nav id="barra">
                <ul class="nav justify-content-end">
                    <form class="form-inline my-2 my-lg-0 col-md-6" style="diplay:inline-block;">
                        <input class="form-control  col-md-12 mr-sm-8 " type="search" placeholder="Busqueda Rapida" aria-label="Search">
                    </form>
                    <li class="nav-item">
                      <a class="nav-link active co" href='" . route(inicio) . "'>##</a>
                    </li>
                    
                    <li class="nav-item">
                      <span class="co-linea"> | </span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link co" href="#">Registrate</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link co" href="#">Ingresar</a>
                      </li>
                  </ul>
        </header>

        <section id="barra_lateral" >
            <nav id="nav-lateral">
                <ul>
                    <li>
                        <a class="nav-link active co" href='" . route(inicio) . "'>Inicio</a>
                    </li>
                    <li>
                        <a class="nav-link active co" href='" . route(inicio) . "'>Ofertas</a>
                    </li>
                    <li>
                        <a class="nav-link active co" href='" . route(inicio) . "'>Modelos</a>
                    </li>
                    <li>
                        <a class="nav-link active co" href='" . route(inicio) . "'>Catalogos</a>
                    </li>
                    
                </ul>
            </nav>
            <!--<div id="app">
                <componente></componente>
            </div>-->
            <br><br><br><br><br><br><br><br>
        </section>

        <section id="seccion" >
            <div id="uno">
                <div id="contenido">
                    <p id="letra">
                        <span style="font-size: 50px;"><b>Ohlala Shoes</b></span>
                        <br>
                        <span style="font-size: 35px;font-family: Arial, Helvetica, sans-serif;">
                            <b>Bienvenidos a Nuestra Tienda Online,<br>
                            Haz parte de nuestro amplio grupo de clientes y <br>
                            tendras la mejor experiencia de compra. <br>
                            </b>
                        </span>
                    </p>
                    <br>
                    <a class="btn btn-success enlaton2 btn-lg bot" href="registro.php">Registrate Aqui</a>
                </div>
            </div>
            <!---------------------------------------------------------------------->
            <hr>
            <!---------------------------------------------------------------------->
            
            <div id="bloques">
                <div class="bloque">
                    <div class="titulo">
                        
                        <p class="texto-titulo"> MODELOS </p>
                        
                    </div>
                    <div class="producto">
                        <div class="x">
                            <div id="hombre" class="x1"></div>
                            <div class="x2">
                                <br>
                                <p class="subtitulo"> Hombre </p>
                                <p class="cont">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a class="btn btn-primary enlaton btn-lg">Ver Detalles &nbsp > </a>
                            </div>
                        </div>
                    </div>
                    <div class="producto">
                        <div class="x">
                            <div id="hombre" class="x1"></div>
                            <div class="x2">
                                <br>
                                <p class="subtitulo"> Hombre </p>
                                <p class="cont">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a class="btn btn-primary enlaton btn-lg">Ver Detalles &nbsp > </a>
                            </div>
                        </div>
                    </div>
                    <div class="producto">
                        <div class="x">
                            <div id="hombre" class="x1"></div>
                            <div class="x2">
                                <br>
                                <p class="subtitulo"> Hombre </p>
                                <p class="cont">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a class="btn btn-primary enlaton btn-lg">Ver Detalles &nbsp > </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bloque">
                    <div class="titulo">
                        <p class="texto-titulo"> MODELOS </p>
                    </div>
                    <div class="producto">
                        <div class="x">
                            <div id="hombre" class="x1"></div>
                            <div class="x2">
                                <br>
                                <p class="subtitulo"> Hombre </p>
                                <p class="cont">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a class="btn btn-primary enlaton btn-lg">Ver Detalles &nbsp > </a>
                            </div>
                        </div>
                    </div>
                    <div class="producto">
                        <div class="x">
                            <div id="hombre" class="x1"></div>
                            <div class="x2">
                                <br>
                                <p class="subtitulo"> Hombre </p>
                                <p class="cont">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a class="btn btn-primary enlaton btn-lg">Ver Detalles &nbsp > </a>
                            </div>
                        </div>
                    </div>
                    <div class="producto">
                        <div class="x">
                            <div id="hombre" class="x1"></div>
                            <div class="x2">
                                <br>
                                <p class="subtitulo"> Hombre </p>
                                <p class="cont">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a class="btn btn-primary enlaton btn-lg">Ver Detalles &nbsp > </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
<!--
            <div id="dos">
                <div class="titulo">
                    <p class="texto-titulo"> MODELOS </p>
                </div>
                <div class="producto">
                    <div class="x">
                        <div id="hombre" class="x1"></div>
                        <div class="x2">
                            <br>
                            <p class="subtitulo"> Hombre </p>
                            <p class="cont">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a class="btn btn-primary enlaton btn-lg">Ver Detalles &nbsp > </a>
                        </div>
                    </div>
                </div>
                <div class="producto">
                    <div class="x">
                        <div id="hombre" class="x1"></div>
                        <div class="x2">
                            <br>
                            <p class="subtitulo"> Hombre </p>
                            <p class="cont">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a class="btn btn-primary enlaton btn-lg">Ver Detalles &nbsp > </a>
                        </div>
                    </div>
                </div>
                <div class="producto">
                    <div class="x">
                        <div id="hombre" class="x1"></div>
                        <div class="x2">
                            <br>
                            <p class="subtitulo"> Hombre </p>
                            <p class="cont">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a class="btn btn-primary enlaton btn-lg">Ver Detalles &nbsp > </a>
                        </div>
                    </div>
                </div>
            </div>-->
            <footer class="footer mt-auto py-3">
                <div class="container">
                    <span class="text-muted">Place sticky footer content here.</span>
                </div>
            </footer>

            <br><br><br>
            
        </section>

        <script src="/js/app.js"></script>
    </body>
</html>


