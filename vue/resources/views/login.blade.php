<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.0/axios.min.js"></script>
    <link rel="stylesheet" href="css/login.css">

    <!--Token -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

    </script>

</head>
<body>


<div class="container" id="login_container">
    <div class="row">
        <div class="col-xs-offset-3 col-xs-6 login_box_rap">
            <div class="row">
                <div class="col-xs-12 login_header">
                    <div class="row login_header_box">
                        <div class="col-xs-9">
                            <h3>Member Login</h3>
                            <p>발급 받은 아이디와 패스워드를 입력해주세요</p>
                        </div>
                        <div class="col-xs-3 user_icon">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row login_input_top_wrap">
                <div class="col-xs-12 login_inputbox_wrap">
                    <form class="form-horizontal" @submit.prevent="login" @keydown="errors.clear($event.target.name)">
                    <div class="form-group email_form">
                        <div class="col-xs-12">
                            <input v-model="email" type="email" class="form-control" id="exampleInputEmail1"
                                   placeholder="Email" name="email">
                        </div>
                        <p class="col-xs-12 text-danger" v-if="errors.has('email')" v-text="errors.get('email')"></p>
                    </div>
                    <div class="form-group password_form">
                        <div class="col-xs-12 password_input">
                            <input v-model="password" type="password" class="form-control" id="exampleInputPassword1"
                                   placeholder="Password" name="password">
                        </div>

                        <p class="col-xs-12 text-danger" v-if="errors.has('password')"
                           v-text="errors.get('password')"></p>


                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary" :disabled="errors.any()">로그인 하기</button>
                        </div>

                        <div class="login_checkbox">
                            <label>
                                <input type="checkbox"> 내 아이디 기억하기
                            </label>
                        </div>

                    </div>
                    </form>
                </div>
            </div>

            <div class="row login_bottom_wrap">
                <div class="login_bottom_container">
                    <div class="col-xs-offset-1 col-xs-1">
                        <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-6">
                        <p>비밀번호를 잊으셨습니까?</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

</body>
<script src="https://vuejs.org/js/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.0/axios.js"
        integrity="sha256-T+17oIAlzSvCwsm50V4ByFrFWtmGIlE3rJdob1AbARs=" crossorigin="anonymous"></script>
<script src="{{url('js/login.js')}}"></script>

</html>


