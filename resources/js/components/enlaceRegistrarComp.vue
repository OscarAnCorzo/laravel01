<template>
    <div @click="poner()">
        Registrarme
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
                $('#contenedor-nl-1').show();
            }
        }
    }
</script>