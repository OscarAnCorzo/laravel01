@extends('principal')

@section('titulo')
    <title>Inicio</title>
@endsection

@section('cuerpo')
    <!------------ La etiqueta header contiene todo el encabezado --------------> 
        <section id="barra_lateral" >
            <nav id="nav-lateral">
                <ul class="nav flex-column">
                    <li>
                        <a class="nav-link active letra-lateral" href='" . route(inicio) . "'>Inicio</a>
                    </li>
                    <hr>
                    <li>
                        <a class="nav-link active letra-lateral" href='#'>Ofertas</a>
                    </li>
                    <hr>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle letra-lateral" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Modelos          </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item letra-lateral" href="#">Femenino</a>
                              <a class="dropdown-item letra-lateral" href="#">Masculino</a>
                              <a class="dropdown-item letra-lateral" href="#">Infantil</a>
                              <a class="dropdown-item letra-lateral" href="#">Deportivo</a>
                              <a class="dropdown-item letra-lateral" href="#">Industrial</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item letra-lateral" href="#">Mas...</a>
                            </div>
                          </li>
                          <hr>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle letra-lateral" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Catalogos          </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item letra-lateral" href="#">Catalogo ##</a>
                              <a class="dropdown-item letra-lateral" href="#">Catalogo ##</a>
                              <a class="dropdown-item letra-lateral" href="#">Catalogo ##</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item letra-lateral" href="#">Mas...</a>
                            </div>
                    </li>
                    <hr>
                    <li>
                        <a class="nav-link active letra-lateral" href='#'>Filtrar</a>
                        <ul class="nav flex-column">
                            <li>
                                <span class="nav-link active letra-lateral sub-item">Talla</span>
                            </li>
                            <li>
                                <span class="checkbox-filtro"><input  type="checkbox">30</span>
                                
                            </li>
                            <li>
                                    <span class="checkbox-filtro"><input  type="checkbox">32</span>
                                    
                                </li>
                                <li>
                                        <span class="checkbox-filtro"><input  type="checkbox">35</span>
                                
                            </li>
                            <li>
                                <span class="checkbox-filtro"><input  type="checkbox">39</span>
                                
                            </li>
                            <hr style="width: 82%;margin-left:10%">
                            <li>
                                <span class="nav-link active letra-lateral sub-item">Color</span>
                            </li>
                            <li>
                                <span class="checkbox-filtro"><input  type="checkbox">Rojo</span>
                                
                            </li>
                            <li>
                                    <span class="checkbox-filtro"><input  type="checkbox">Blanco</span>
                                    
                                </li>
                                <li>
                                        <span class="checkbox-filtro"><input  type="checkbox">Negro</span>
                                
                            </li>
                            <li>
                                <span class="checkbox-filtro"><input  type="checkbox">Azul</span>
                                
                            </li>
                        </ul>
                    </li>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <hr>
                    <li>
                        <a class="nav-link active letra-lateral" href='#'>Nosotros</a>
                    </li>
                    <hr>
                    <li>
                            <a class="nav-link active letra-lateral" href='#'>Contactanos</a>
                    </li>
                    <hr>
                </ul>
            </nav>

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
                    <a class="btn btn-success enlaton2 btn-lg bot so"><enlace-registrar-comp></enlace-registrar-comp></a>
                </div>
            </div>
            <!---------------------------------------------------------------------->
            <hr>
            <!---------------------------------------------------------------------->
            
            <div id="bloques">

                    <bloque-comp :lista_productos="{{json_encode($lista_productos_mas)}}" ></bloque-comp>
                    
                    <bloque-comp :lista_productos="{{json_encode($lista_productos_fem)}}"></bloque-comp>

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
                    <span class="text-muted">Aqui termina la vista de inicio</span>
                </div>
            </footer>

            <br><br><br>
            
        </section>
        <registro-comp></registro-comp>
        <ingreso-comp></ingreso-comp>
@endsection