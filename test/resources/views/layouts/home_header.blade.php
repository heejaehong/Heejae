        <header>
            <div class="container nopadding header_container">
                <div class="container top_head_box">
                    <div class="header_top_list fixed_width align_center">
                        <div class="header_social pull-left top_head">
                            <ul class="home_social">
                                <li>
                                    <a href="#" class="instagram">
                                        <img src="img/instagram_gray.png" alt="instagram">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin">
                                        <img src="img/linkedin_gray.png" alt="linkedin">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="facebook">
                                        <img src="img/facebook_gray.png" alt="facebook">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="googleplus">
                                        <img src="img/googleplus_gray.png" alt="googleplus">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest">
                                        <img src="img/pinterest_gray.png" alt="pinterest">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="header_add pull-left top_head">
                            <p>Add your text or menu here.</p>
                        </div>
                        <div class="header_tollfree pull-right top_head">
                            <p>Toll Free 1.800.123.4567</p>
                        </div>
                        <div class="header_email pull-right top_head">
                            <p>Email Us info@business.com</p>
                        </div>
                    </div>
                </div>
                <div class="header_rap">
                    <!-- navi start -->
                    <div class="navi">
                        <div class="navbar navbar-static-top">
                            <div class="container">
                                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="header_rap">
                                    <!-- logo start -->
                                    <div class="home_logo">
                                        <a href="#home">
                                            <img src="img/Logo.png" />
                                        </a>
                                    </div>
                                    <!-- logo end -->
                                    <hr>
                                    <div class="collapse navbar-collapse navHeaderCollapse home_nav_parent">
                                        <ul class="nav navbar-nav home_nav">

                                            @foreach($menus as $menu)
                                                <li><a href="/{{$menu->href}}">{{$menu->navi}}</a></li>
                                            @endforeach
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- navi end -->
                </div>
            </div>
        </header>