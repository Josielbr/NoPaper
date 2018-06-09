 <template>
    <div v-bind:class="defineCor">
        <div class="panel-heading">{{titulo}}</div>

        <div class="panel-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props:['titulo','cor'],
        computed:{
            defineCor:function(){
                return "panel "+ (this.cor || "panel-default");
            }
        }
    }
</script>

<style type="text/css">
    .blue {
    border-color: #072aa8; 
}

.blue > .panel-heading {
    color: #ffffff;
    background-color: #072aa8;
    border-color: #072aa8;
}
 .orange {
    border-color: #32b308;
}

.orange > .panel-heading {
    color: #ffffff;
    background-color: #32b308;
    border-color: #32b308;
}
.red {
    border-color: #b30818;
}

.red> .panel-heading {
    color: #ffffff;
    background-color: #b30818;
    border-color: #b30818;
}


</style>