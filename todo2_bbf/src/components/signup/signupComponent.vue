<template>
    <div class="container">
        <div id="form_signup" class="panel panel-default">

            <div class="panel-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>

                <button id="doSignup" class="btn btn-success btn-block">Signup</button>
                <div>
                    <a href="login">Signin</a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        data(){
            return {}
        }
    }

</script>
<style>
</style>