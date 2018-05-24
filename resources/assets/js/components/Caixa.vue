<template>
    
</template>

<script>
    export default {
      props:['titulo','url','cor','icone'],
      computed:{
        defineCor: function(){
          return "background-color:"+this.cor+"!important";
        }
      }
    }
</script>

<style type="text/css">


</style>