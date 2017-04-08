/**
 * Created by heejaehong on 2017. 4. 2..
 */

class Error {

    constructor() {
        this.errors = {}; //Object 생성자
    }

    has(field) { //parameter 값이 field
        return this.errors.hasOwnProperty(field); //Object 중에 key 값을 가지고 있는지 확인 (v-if)
    }

    get(field) {
        if(this.errors[field]){
            return this.errors[field][0]; // v-text key 값을 가져와서 value값을 화면에 보여줌(Error msg)
        }
    }

    any(){
        return Object.keys(this.errors).length > 0; //key의 개수(length)가 1개라도 있으면 disabled = true
    }

    recode(errors){
        this.errors = errors;   //Object 통째로 기록
    }

    clear(field){
        delete this.errors[field]; //Object의 key를 날림
    }

}


new Vue({
    el:'#login_container',
    data:{
        email:'',
        password:'',
        errors: new Error() //error object를 생성
    },

    methods:{
        login(){
            axios.post('/login', this.$data) //axios = $.post
                .then(this.onSuccess) //성공할 경우
                .catch(error => this.errors.recode(error.response.data)); //에러가 있으면 recode 기록
        },

        onSuccess(response){
            if (response.data.code == 1){ //code 가 1일 경우(=성공)
                window.location.href = '/home'; //home으로 redirect
            } else { // 1이 아닐 경우(=실패)
                alert(response.data.message); //Controller의 message 띄움
            }
        }

    }

});