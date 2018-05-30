<template>
        <div class="box" v-bind:style="defineCor">
        <div class="inner">
            <a v-bind:href="url">
            <div class="icon">
                    <i v-bind:class="icone"></i>
             </div>
            <h3>{{titulo}}</h3>
            </a>
        </div>
       
    <!-- <a v-bind:href="url" class="box-footer">Ver mais<i class="fa fa-arrow-circle-right"></i></a>-->
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

.box {
    border-radius: 2px;
    position: relative;
    display: block;
    margin-bottom: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    
}
.box:hover {
    text-decoration: none;
}
.box>.inner {
    color: #fff;
    text-align: center;
    padding-top: 45px;
    padding-bottom: 45px;
    margin-bottom: 30px;
    -webkit-transition: all .3s;
    transition: all .3s;
    border: 5px solid transparent;
}
.box h3 {
    z-index: 5;
}
.box h3 {
    font-size: 38px;
    font-weight: bold;
    /*margin: 0 0 0 0px;*/
    white-space: nowrap;
    padding: 0;
}
.box .icon {
    -webkit-transition: all .3s linear;
    -o-transition: all .3s linear;
    transition: all .3s linear;
    position: absolute;
    top: -10px;
    right: 10px;
    z-index: 0;
    font-size: 60px;
    color: rgba(0,0,0,0.15);
}
.box:hover .icon {
    font-size: 70px;
}
a {
    color: #fff;
    text-decoration: none;
}
a:hover, a:focus {
    color: #fff;
    text-decoration: none;
}
.icon:hover i{
    color:  #fff;

}
.row {
    margin-top: 20px;
}


</style>
