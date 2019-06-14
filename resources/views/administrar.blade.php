@extends('principal')

@section('titulo')
    <title>Inicio</title>
@endsection

@section('cuerpo')
    <!------------ La etiqueta header contiene todo el encabezado --------------> 
    <section id="seccion" >    
            <div id="uno-cuenta" class="contenedor">
                    <div id="contenido">
                        <p id="letra">
                            <span style="font-size: 50px;"><b>¡Hola !</b></span>
                            <br>
                            <span style="font-size: 35px;font-family: Arial, Helvetica, sans-serif;">
                                <b>Aqui encontraras los datos de tu cuenta<br>
                                donde podras actualzarlos. Y realizar consultas y nuevos registros.<br>
                                 <br>
                                </b>
                            </span>
                        </p>
                        <br>
                        <a class="btn btn-success enlaton2 btn-lg bot" style="    background-color: #1fc8db;
            background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
            color: white;
            opacity: 0.95;" href="index.php">Ir a la Tienda</a> &nbsp &nbsp &nbsp &nbsp
                        <a class="btn btn-success enlaton2 btn-lg bot" style="    background-color: #1fc8db;
            background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
            color: white;
            opacity: 0.95;" href="consultar.php">Consultar</a> &nbsp &nbsp &nbsp &nbsp
                        <a class="btn btn-success enlaton2 btn-lg bot" style="    background-color: #1fc8db;
            background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
            color: white;
            opacity: 0.95;" href="registro.php">Nuevos Registros</a>
                    </div>
                </div>
                <div id="dos-cuenta">
                    <div id="a-datos">
                        <p class="texto-titulo text-center" style="margin-top:40%;font-size: 50px;"> Tus Datos: </p>
                    </div>
                    <div id="habilitado">
                        <div id="b1">
                            <div class="row">
                                <div class="col-lg-12 tamaño">
                                        <b>Nombre de Usuario:</b> <input class="form-control cajas" type="text" id="nombre" name="nombre" value="" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 tamaño">
                                    <b>Fecha de Nacimiento:</b> <br>
                                                <input class="form-control fecha2" type="number" id="dia" name="dia" value="'.$_SESSION['dia'].'" disabled>
                                                <input class="form-control fecha2" type="number" id="mes" name="mes" value="'.$_SESSION['mes'].'" disabled>
                                                <input class="form-control fecha2" type="number" id="año" name="año" value="'.$_SESSION['año'].'" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 tamaño">
                                        <b>Correo de Usuario:</b> <input class="form-control cajas" type="text" id="correo" name="correo" value="'.$_SESSION['correo'].'" disabled>
                
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 tamaño">

                                        <b>Contraseña:</b> <input class="form-control cajas" type="password" id="contraseña" name="contraseña" value="'.$_SESSION['contraseña'].'" disabled>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div id="b2">
                            <div class="row">
                                <div class="col-lg-12 tamaño">
          
                                        <b>Genero:</b> <input class="form-control cajas" type="text" id="genero" name="genero" value="'.$_SESSION['genero'].'" disabled>
                                     
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-lg-12 tamaño">
                                        
                                            <b>Ciudad:</b> <input class="form-control cajas" type="text" id="ciudad" name="ciudad" value="'.$_SESSION['ciudad'].'" disabled>
                                           
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 tamaño">
                                        
                                            <b>Telefono:</b> <input class="form-control cajas" type="number" id="telefono" name="telefono" value="'.$_SESSION['telefono'].'" disabled>
                                          
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-lg-12 tamaño">
                                    <input class="btn btn-warning enlaton2 bot centrar" type="button" value="Actualizar Datos" onclick='document.getElementById("habilitado").style.display = "none"; document.getElementById("deshabilitado").style.display = "block";'>
                                </div>
                            </div>
                        </div>
                    </div>
        <!-- Aqui esta el div con los campos habilitados para editarlos  -->
                    <div id="deshabilitado">
                        <div id="b1">
                            <form method="post" action="cuenta-admin.php">
                            <div class="row">
                                <div class="col-lg-12 tamaño">
                                    
                                        <b>Nombre de Usuario:</b> <input style="display:none" class="form-control cajas" type="text" id="nombre" name="nombre" value="'.$_SESSION['nombre'].'" > <input class="form-control cajas" type="text" id="nombre" name="nombre" value="'.$_SESSION['nombre'].'" disabled>'
                                     
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 tamaño">
                                    
                                        <b>Fecha de Nacimiento:</b> <br>
                                                <input class="form-control fecha2" type="number" id="dia" name="dia" value="'.$_SESSION['dia'].'" >
                                                <select class="form-control fecha" id="mes" name="mes">
                                                    <option value=0></option>
                                                    <option value=1>ENERO</option>
                                                    <option value=2>FEBRERO</option>
                                                    <option value=3>MARZO</option>
                                                    <option value=4>ABRIL</option>
                                                    <option value=5>MAYO</option>
                                                    <option value=6>JUNIO</option>
                                                    <option value=7>JULIO</option>
                                                    <option value=8>AGOSTO</option>
                                                    <option value=9>SEPTIEMBRE</option>
                                                    <option value=10>OCTUBRE</option>
                                                    <option value=11>NOVIEMBRE</option>
                                                    <option value=12>DICIEMBRE</option>
                                                </select>
                                                <input class="form-control fecha2" type="number" id="año" name="año" value="'.$_SESSION['año'].'" >
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 tamaño">
                                     <b>Correo de Usuario:</b> <input style="display:none" class="form-control cajas" type="text" id="correo" name="correo" value="'.$_SESSION['correo'].'" disabled> <input class="form-control cajas" type="text" id="correo" name="correo" value="'.$_SESSION['correo'].'" disabled>
                                
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 tamaño">
                                    
                                        <b>Contraseña:</b> <input class="form-control cajas" type="password" id="contraseña" name="contraseña" value="'.$_SESSION['contraseña'].'" >
                                
                                </div>
                                
                            </div>
                        </div>
                        <div id="b2" >
                            <div class="row">
                                <div class="col-lg-12 tamaño">
                             
                                        <b>Genero:</b> <br><input type="radio" id="genero" name="genero" value="masculino"/> <label>Masculino</label>
                                                                <input type="radio" id="genero" name="genero" value="femenino"/> <label>Femenino</label><br>
                                                                <input type="radio" id="genero" name="genero" value="no-binario"/> <label>No binario</label>
                                    
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-lg-12 tamaño">
                                        
                                            <b>Ciudad:</b> <input class="form-control cajas" type="text" id="ciudad" name="ciudad" value="'.$_SESSION['ciudad'].'" >
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 tamaño">
                                        
                                            <b>Telefono:</b> <input class="form-control cajas" type="number" id="telefono" name="telefono" value="'.$_SESSION['telefono'].'">
                                        
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-lg-12 tamaño">
                                    <input class="btn btn-success enlaton2 bot centrar" type="submit" name="cambio" value="Guardar" onclick='document.getElementById("habilitado").style.display = "block"; document.getElementById("deshabilitado").style.display = "none";'>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
        
        
        
                </div>       
        <footer class="footer mt-auto py-3">
            <div class="container">
                <span class="text-muted">Aqui termina la vista de inicio</span>
            </div>
        </footer>
            <br><br><br>          
    </section>
            
@endsection