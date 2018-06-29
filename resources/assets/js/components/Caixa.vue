<template>
        <div class="col-md-4" v-bind:style="defineCor" v-bind:href="url">
           
        <div class="inner">
             <h3>{{titulo}}</h3>
            <a v-bind:href="url" class="box-footer">Abrir<i class="fa fa-arrow-circle-right"></i></a>
    </div>
        </div>  
   
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
.bg-aqua{
    background-color: #00c0ef !important;
}
.col-md-4 {
    border-radius: 2px;
    position: relative;
    display: block;
    margin-bottom: 10px;
    margin-right: 10px;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
 
}
.col-md-4:hover {
    text-decoration: none;
}
.col-md-4>.inner {
    color: #fff;
    text-align: center;
    padding-top: 45px;
    margin-bottom: 30px;
}
.col-md-4 h3 {
    z-index: 5;
}
.col-md-4 h3 {
    font-size: 38px;
    font-weight: bold;
    margin: 0 0 0 0px;
    white-space: nowrap;
    padding: 0;
}
a {
    color: #fff;
    text-decoration: none;
}

.row {
    margin-top: 20px;
}
a.box-footer {
    position: relative;
    text-align: center;
    padding: 10px 0;
    color: #fff;
    display: block;
    z-index: 10;
    font-size: 25px;
    top:10px;
}
a:hover, a:active, a:focus {
    outline: none;
    text-decoration: none;
    
}
a.box-footer:hover {
    -webkit-transition: all .2s linear;
    -o-transition: all .1s linear;
    transition: all .1s linear;
    color:#F15A24;
}
.fa{

    margin-left: 5px;
}
@media (min-width: 992px) {
    .col-md-4 {
        width: 32.456%;
      
    }
}


</style>
