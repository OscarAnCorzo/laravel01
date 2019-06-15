<template>
<div id="contenedor-nl-1" class="ventana-modal " style="display:none;" @click="quitar()">
                <div id="contenedor-nl-2">
                    <div class="box-part" id="bp-left">
                        <div class="partition" id="partition-register">
                            <div class="partition-title">
                              CREA TU CUENTA
                            </div>
                            <div class="partition-form">
                            <form autocomplete="false" method="POST" action="/">

                               
                                <input type="hidden" name="_token" :value="csrf">
                                <input id="n-email" type="text" name="email" placeholder="Correo Electronico">
                                <input id="n-username" type="text" name="nombre_usuario" placeholder="Nombre Ususario">
                                <input id="n-password2" type="password" name="password" placeholder="Contraseña">
                            

                            <div style="margin-top: 35px">
                            </div>

                            <div class="button-set">
                                <input type="submit" id="register-btn" class="btn btn-warning enlaton2 bot centrar" value="Registrar"/>
                            </div></form>
                            <button class="large-btn gmail-btn">Conectar con <span>GMAIL</span></button>
                            <button class="large-btn facebook-btn">Conectar con <span>facebook</span></button>
                            
                            </div>
                        </div>
                        </div>
                        <div class="box-part" id="bp-right">
                        <div class="box-messages">
                        </div>
                    </div>
                    
                </div>
            </div>
</template>

<script>
export default {
  data: () => ({
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          }),
  methods:{
      quitar(){
          $('#app').click(function(e){
            if(e.target.id == 'contenedor-nl-1'){
              $('.ventana-modal').hide();
            }
          });
          
      }
  }
}
</script>