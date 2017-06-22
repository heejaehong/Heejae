<template>
        <router-link
                v-bind:to="{path:'/todo/'+ item.path}"
                tag="li"
                class="list-group-item" >
            {{item.title}}
            <span class="badge">1</span>

        </router-link>
        <!--<router-link to="/{item.id}">-->


        <!--</router-link>-->
</template>
<script>

    import Inbox from '../contents/Inbox.vue';
    import NextWeek from '../contents/NextWeek.vue';
    import Today from '../contents/Today.vue';

    import { eventBus } from '../../main';

    var srcInbox = Inbox;
    var srcNextWeek = NextWeek;
    var srcToday = Today;

    export default{
     props:['item'],

    data: function(){
        return{
        // data model
        }
    },

     methods:{
//         getMenu(id){
//             var screen = null;
//
//             switch(id){
//                 case 1:
//                     screen = srcInbox;
//                     break;
//                 case 2:
//                     screen = srcNextWeek;
//                     break;
//                 case 3:
//                     screen = srcToday;
//                     break;
//             }
//            eventBus.$emit('setScreen', screen);
//
//         }
     }
 }
</script>
<style>
</style>