<template>
    <div class="container">
        <router-view name="Header"></router-view>
        <router-view name="Menu"></router-view>
        <router-view></router-view>
    </div>
</template>
<script>
    import Header from './components/Header.vue'
    import Menu from './components/Menu.vue'
    import Contents from './components/Contents.vue'

    export default{
        data: function(){
            return{
            // data model
            }
        },
        components:{
            appHeader:Header,
            appMenu:Menu,
            appContent:Contents
        }
    }
</script>
<style>
    *{
        font-family: 'Roboto', sans-serif;
        font-size:12px;
    }
</style>