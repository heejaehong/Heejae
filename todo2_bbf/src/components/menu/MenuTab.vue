<template>
    <div class="tab">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active" @click="clickedTab('project')"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">PROJECT</a></li>
            <li role="presentation"  @click="clickedTab('last')"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">LAST PLAN</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <ul>
                    <app-menu-tab-page v-for="item in list" :item="item"></app-menu-tab-page>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <ul>
                    <app-menu-tab-page v-for="item in lastPlan" :item="item"></app-menu-tab-page>
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
    import MenuTabPage from './MenuTabPage.vue';
//임시 데이터  서버 데이터로 변경예정
//===========================================
var tabData1 = [
    {id:1, title:"project 1"},
    {id:1, title:"project 2"},
    {id:1, title:"project 3"},
];

var tabData2 = [
    {id:1, title:"last plan 1"},
    {id:1, title:"last plan 2"},
    {id:1, title:"last plan 3"},
];
//===========================================
 export default{
    data: function(){
        return{
            list:[],
            lastPlan:[]
        }
    },
     components:{
         appMenuTabPage:MenuTabPage
     },
     methods:{
       clickedTab(title){
           title == "project" ?
               this.list = tabData1 : this.lastPlan = tabData2;
       }
     },
     created(){
        this.list = tabData1;
     }
 }
</script>
<style scoped>
    ul{ list-style: none;padding:0 10px;}
</style>