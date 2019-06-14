<template>

<div class="bloque">
                    <div class="titulo">
                        
                        <p class="texto-titulo"> {{ lista_productos[0].tipo }} </p>
                        
                    </div>
                    <div class="producto" v-for="producto in lista_productos" :key="producto.id">
                        <div class="x">
                            <div id="hombre" class="x1"></div>
                            <div class="x2">
                                <br>
                                <p class="subtitulo"> {{ producto.nombre }} </p>
                                <p class="cont">Descripción muy breve.</p>
                                <p class="cont"><s>precio anterior </s><b> $ {{ producto.precio }}</b></p>
                                <a class="btn btn-primary enlaton btn-lg">Ver Detalles > </a>
                            </div>
                        </div>
                    </div>   
                    <hr style="width:100%">  
                </div>
</template>
<script>

export default {
    props: ['lista_productos']
}
</script>