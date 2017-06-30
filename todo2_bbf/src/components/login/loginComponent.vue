<template>
    <div class="container">
        <div id="form_login" class="panel panel-default">
            <div class="panel-body">
                <div id="login_input_form">
                    <!-- email -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="email" v-model="email">
                    </div>
                    <!-- email end -->

                    <!-- password -->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" v-model="password">
                    </div>
                    <!-- password end -->

                    <div class="checkbox">
                        <!-- checkbox -->
                        <label>
                            <input type="checkbox"> Remember
                        </label>
                        <!-- checkbox end-->

                        <!-- signup -->
                        <div class="link pull-right">
                            <a href="signup">Signup</a>
                        </div>
                        <!-- signup end -->
                        <div class="clearfix"></div>
                    </div>
                    <!-- login button -->
                    <button id="doLogin" class="btn btn-primary btn-block" @click="doLogin">Login</button>
                    <!-- login button end -->

                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        data(){
            return {
                email : '',
                password : ''
            }
        },
        methods:{
            doLogin(){

                let param = {
                    email:this.email, password:this.password
                }

                this.$http.post('http://localhost:8001/api/login', param)
                    .then(response => {
                        this.$auth.setToken(response.data.token);
                        location.href = '/';
                    })

                    .catch(error => {
                        if(error.status == 401){
                            alert('Please check your email and password.');
                        }else{
                            alert('server error');
                        }
                    });
            }
        }
    }

</script>
<style>
</style>