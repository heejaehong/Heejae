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

 var dataMenu = [];

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
        getList(){

            this.$http.get('http://localhost:8001/api/getProjectList')
                .then(response => {
                    console.log(response);
                    //console.log(this.dataMenu)
                    this.menus = response.body.data.projects;
                })
                .catch(error => {
                    console.log(error);
                });
        }
     },
     created(){
        //this.menus = dataMenu;
        this.getList();
     },


 }
</script>
<style>
    .top-menu li:hover {
        background-color: lightblue;
        cursor:pointer;

    }
</style>