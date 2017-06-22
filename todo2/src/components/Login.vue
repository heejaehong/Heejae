<template>
    <div class="container">
        <app-login></app-login>
    </div>
</template>
<script>

import appLogin from './login/loginComponent.vue'

    export default{
        data(){
            return{

            }
        },
        components:{
            appLogin
        },

        methods:{

        }
    }

</script>
<style>
    .container{
        margin-top:50px;

    }

</style>