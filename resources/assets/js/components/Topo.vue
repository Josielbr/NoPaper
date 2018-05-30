<template>
    <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Logo -->
                    <a class="navbar-brand" v-bind:href="url">
                       
                        <img src="..\..\..\..\public\logo.png" alt="Logotipo" > 
        
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- lado esquerdo da navbar-->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Lado direito da navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Autenticação do Usuário -->
                       <slot> </slot>  
                    </ul>
                </div>
            </div>
        </nav>
</template>

<script>
    export default {
        props:['logo','url'],
    }
</script>
<style type="text/css">
.navbar-brand > img {
    height: auto;
    width: 100px;
    margin-top: -2px;
}
.navbar-default {
    background-color: #fff;
    border-color: #999;
}
</style>