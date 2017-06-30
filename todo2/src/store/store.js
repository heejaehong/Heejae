/**
 * Created by heejaehong on 2017. 6. 25..
 */

import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        todoList: [],
        editTodo: {},
        editState: false
    },

    getters: {
        getTodoList(state){
            return state.todoList
        },

        addTodoList(state, data){
            return state.todoList.data
        },

        readTodoList(state, data){
            return state.editTodo
        }


    },

    mutations:{
        FETCH_TODOLIST: (state, data) => {
            state.todoList = data;
        },

        ADD_TODOLIST : (state, response) => {
            state.editTodo = {};
            if(response.body.success){
                state.todoList.push(response.body.data);
            }
        },

        SHOW_TODOLIST : (state, data) => {
            state.editState = true;
            state.editTodo = data;
        },

        UPDATE_TODOLIST : (state, data) => {
            state.editState = false;
            state.editTodo = {};
            state.todoList.forEach((item, index) => {
                if (item.id === data.id) {
                    state.todoList[index] = data
                }
            });
        },

        DELETE_TODOLIST : (state, id) => {
            state.todoList.forEach((item, index) => {
                if (item.id === id) {
                    state.todoList.splice(index, 1);
                }
            })
        }

    },

    actions:{

        //todo list view
        fetchTodolist({ commit })  {
            Vue.http.get("http://localhost:8001/api/todo")
                .then((response) => {
                    commit("FETCH_TODOLIST", response.body.data);

                })
                .catch((error => {
                    console.log(error.statusText)
                }))
        },

        //create todo list
        addTodolist({commit}, data) {
            Vue.http.post("http://localhost:8001/api/createTodo", data)
                .then((response) => {
                    commit("ADD_TODOLIST", response);
                })
                .catch((error => {
                    console.log(error.statusText)
                }))
        },

        //read todo list
        showTodolist({commit}, id) {
            Vue.http.get("http://localhost:8001/api/showTodo/"+id)
                .then((response) => {

                     commit("SHOW_TODOLIST", response.body.data);
                })
                .catch((error => {
                    console.log(error.statusText)
                }))
        },

        //update todo list
        updateTodolist({commit}, data){
            Vue.http.post("http://localhost:8001/api/updateTodo/" + data.id, data)
                .then((response) => {
                    if(response.body.success){
                        commit("UPDATE_TODOLIST", response.body.data);
                    }

                })
                .catch((error => {
                    console.log(error.statusText)
                }))
        },

        //delete todo list
        deleteTodolist({commit}, id){
            Vue.http.get("http://localhost:8001/api/deleteTodo/" + id)
                .then((response) => {
                if(response.body.success){
                    commit("DELETE_TODOLIST", id);
                    }
                })
        }

    }

});