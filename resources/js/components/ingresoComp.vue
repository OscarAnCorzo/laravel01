<template>
<div id="contenedor-nl-1-ing" class="ventana-modal " style="display:none;" @click="quitar()">
                <div id="contenedor-nl-2-ing">
                    <div class="box-part" id="bp-left-ing">
                        <div class="partition" id="partition-register-ing">
                            <div class="partition-title">INGRESA A TU CUENTA</div>
                            <div class="partition-form">
                            <form autocomplete="false">

                                <div class="autocomplete-fix">
                                <input type="password">
                                </div>
                                <input id="n-username-ing" type="text" placeholder="Nombre Ususario">
                                <input id="n-password2-ing" type="password" placeholder="Contraseña">
                                <input id="mantener" type="checkbox" style="margin-top: 12px"><label style="font-size:12px;"> Mantener Sesión Abierta </label>
                            </form>

                            <div style="margin-top: 35px">
                            </div>

                            <div class="button-set">
                                <button id="register-btn-ing" class="btn btn-success">Ingresar</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div  id="bp-right-ing" class="box-part" >
                        <div class="box-messages">
                        </div>
                    </div>
                    
                </div>
            </div>
</template>
<script>
$(document).ready(function(){
  $('.ventana-modal').hide();
});

export default {
  methods:{
      quitar(){
          $('#app').click(function(e){
            if(e.target.id == 'contenedor-nl-1-ing'){
              $('.ventana-modal').hide();
            }
          });
          
      }
  }
}
</script>