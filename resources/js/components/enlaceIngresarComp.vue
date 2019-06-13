<template>
    <div class="co" @click="poner()">
        Ingresar
    </div>
</template>
<script>
    export default {
        data () {
            return {
            modalWidth: MODAL_WIDTH
            }
        },
        methods:{
            poner(){
                $('#contenedor-nl-1-ing').show();
            }
        }
    }
</script>