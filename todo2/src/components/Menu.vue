<template>
    <div class="menu col-sm-3 col-md-4 col-lg-4">
        <div class="top-menu">
            <ul class="list-group">
                <app-menu-item
                        v-for="menu in menus"
                        :item="menu">
                </app-menu-item>
            </ul>
        </div>
        <div class="tab-menu">
            <app-menu-tab></app-menu-tab>
        </div>
    </div>
</template>
<script>
 import MenuItem from './menu/MenuItem.vue';
 import MenuTab from './menu/MenuTab.vue';

 import Inbox from './contents/Inbox.vue';
 import NextWeek from './contents/NextWeek.vue';
 import Today from './contents/Today.vue';

 var dataMenu = [
     {id:1, title:"inbox", path:"Inbox"},
     {id:2, title:"Today", path:"Today"},
     {id:3, title:"Next Week", path:"NextWeek"},
 ];

 export default{
    data: function(){
        return{
            menus:[],
       }
    },
     components:{
        appMenuItem:MenuItem,
         appMenuTab:MenuTab
     },
     methods:{

     },
     created(){
        this.menus = dataMenu;
     }
 }
</script>
<style>
    .top-menu li:hover {
        background-color: lightblue;
        cursor:pointer;

    }
</style>