<template>
    <div class="co" >
        {{variable}}
    </div>
</template>
<script>
$(document).ready(function(){
  $('.ventana-modal').hide();
});

export default {
    props: ['variable']
}
</script>