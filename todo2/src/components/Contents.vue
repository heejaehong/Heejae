<template>
    <div class="content col-sm-9 col-md-8 col-lg-8">
        <router-view></router-view>
        <!--<component :is="selectedComponent"></component>-->
    </div>
</template>
<script>
import Inbox from './contents/Inbox.vue';
//import {eventBus} from '../main'

 export default{
    data(){
        return{
//            selectedComponent:'appInbox'
        }
    },
     components:{
        appInbox:Inbox
     }
//     created(){
//         eventBus.$on('setScreen', (appScreen) =>{
//             this.selectedComponent =  appScreen;
//             console.log(appScreen);
//         });
//     }


 }
</script>
<style>
</style>

