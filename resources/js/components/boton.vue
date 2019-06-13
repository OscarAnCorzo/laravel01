<template>
    <div @click="poner()">
        jkhkjhkjhkhk
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
                $('.ventana-modal').show();
            }
        }
    }
</script>