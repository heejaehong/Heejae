<template>
    <div class="inbox">
        <div class="sub-title">Today Todo List</div>
        <hr>
        <div id="inbox-form">
            <div class="form-group col-sm-3 col-md-3 col-lg-3">
                <input type="text" class="form-control input-sm" placeholder="일정 입력" v-model="todo.title">
            </div>

            <div class="form-group col-sm-3 col-md-3 col-lg-3">
                <input type="date" class="form-control input-sm" v-model="todo.date">
            </div>

            <div class="form-group col-sm-3 col-md-3 col-lg-3">
                <input type="text" class="form-control input-sm" placeholder="타입" v-model="todo.type">
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3" v-if="!dataEdit">
                <button class="btn btn-info btn-sm" @click="addTodo">일정추가</button>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3" v-if="dataEdit">
                <button class="btn btn-info btn-sm" @click="EditTodo">일정수정</button>
            </div>

        </div>
        <div id="inbox-table">
            <table class="table table-striped">
                <caption>일정</caption>
                <tbody>
                <tr v-for="data in todoList">
                    <td><input type="checkbox" class="input-sm"></td>
                    <td>{{data.title}}</td>
                    <td>{{data.date}}</td>
                    <td>{{data.type}}</td>
                    <td>
                        <button class="btn btn-primary btn-sm" @click="readed(data.id)">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </button>
                        <button class="btn btn-danger btn-sm" @click="removed(data.id)">
                            <i class="glyphicon glyphicon-remove"></i>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
 var tempTodo = [
//     {id:'1', title:'테스트 일정 1', date:'2017-04-01', type:'inbox'},
//     {id:'2', title:'테스트 일정 2', date:'2017-04-01', type:'inbox'},
//     {id:'3', title:'테스트 일정 3', date:'2017-04-01', type:'inbox'},
//     {id:'4', title:'테스트 일정 4', date:'2017-04-01', type:'inbox'},
 ]

 import api from '../../api'


 export default{
    data: function(){
        return{
            todo:{
                id:'',
                title:'',
                date:'',
                type:''
            },
            dataEdit:false,
            todoList:[]
        }
    },
     methods:{
         addTodo(){
             api.createTodo(this.todo).then( response => {
                 if(response.body.success){
                     this.todoList.push(response.body.data);
                 }

             });

         },

         removed(id){
            var accepted = confirm('Do you want to remove this list?');

            if(accepted){
                api.deleteTodo(id).then(response => {
                    for(var i = 0; i < this.todoList.length; i++) {
                        if(this.todoList[i].id === id){
                            this.todoList.splice(i, 1);
                        }
                    }
                })

            }

         },

         readed(id){
            this.dataEdit = true;

            api.showTodo(id).then(response => {
                for(var i = 0; i < this.todoList.length; i++) {
                    if(this.todoList[i].id === id){
                        this.todo = this.todoList[i]

                    }
                }
            })

         },

         EditTodo(){
             this.dataEdit = false;

             api.updateTodo(this.todo, this.todo.id).then(response => {
                 for(var i = 0; i < this.todoList.length; i++){
                     if(this.todoList[i].id === response.body.data.id){
                         this.todoList[i] = response.body.data
                             this.todo = {
                                 title:'',
                                 date:'',
                                 type:''
                             }
                     }

                 }

             })

         }


     },

     created(){
//         this.todoList = tempTodo;
         api.getTodo().then( response => {
             if(response.body.success){
                 this.todoList = response.body.data;
             }

         });
     }

 }
</script>
<style>

</style>