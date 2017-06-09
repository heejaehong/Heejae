<template>
    <div class="container">
        <div id="form_login" class="panel panel-default">
            <div class="panel-body">
                <div id="login_input_form">
                    <!-- email -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="email">
                    </div>
                    <!-- email end -->

                    <!-- password -->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                    <button id="doLogin" class="btn btn-primary btn-block">Login</button>
                    <!-- login button end -->

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