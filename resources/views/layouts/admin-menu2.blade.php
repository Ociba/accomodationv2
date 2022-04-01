<header id="header-navigation">
    <!--Navigation style-->
    <div class="cactus-nav-control  cactus-nav-style-3">
        <div class="cactus-nav-main dark-div  dark-bg-color-1" >
            <div class="cactus-container padding-30px ">
                <div class="cactus-row magin-30px">
                    <!--nav left-->
                    <div class="cactus-nav-left">
                        <!--logo-->
                        <div class="cactus-logo navigation-font">
                            <a href="#">
                            <img src="{{ asset('wp-content/uploads/house.png')}}" alt="VideoPro" title="VideoPro" class="cactus-img-logo">
                            <img src="{{ asset('wp-content/uploads/house.png')}}" alt="VideoPro" title="VideoPro" class="cactus-img-logo cactus-img-sticky">
                            </a>
                        </div>
                        <!--logo-->
                        <div class="cactus-main-menu cactus-open-left-sidebar right-logo navigation-font">
                            <ul>
                                <li><a href="javascript:;"><span></span><span></span><span></span></a></li>
                            </ul>
                        </div>
                        <div class="cactus-submit-video">
                            <!--<style>
                                .cactus-submit-video a {background-color:##D9251D !important; color:##FFFFFF !important;}
                                .cactus-submit-video a:hover{background-color:##999999 !important; color:##FFFFFF !important;}
                                </style>-->
                            <a href="#" data-toggle="modal" data-target="#videopro_submit_form" class="btn btn-user-submit btn-default bt-style-1 padding-small " data-type="">        	
                            <i class="fas fa-upload"></i>        </a>
                        </div>
                    </div>
                    <!--nav left-->
                    <!--nav right-->
                    <div class="cactus-nav-right">
                        <div class="cactus-main-menu cactus-open-menu-mobile navigation-font">
                            <ul>
                                <li><a href="javascript:;"><i class="fas fa-bars"></i>MENU</a></li>
                            </ul>
                        </div>
                        <div class="cactus-submit-video">
                        </div>
                        <div class="cactus-main-menu cactus-user-login navigation-font">
                            <ul>
                                <li>
                                <a href="#">{{auth()->user()->name}}</a>
                                </li>
                                <li>
                                    <a href="/logout"><i class="fas fa-user"></i>&nbsp;Logout</a>
                                    {{--
                                    <ul>
                                        <li><a href="../register/index.html">Register</a></li>
                                    </ul>
                                    --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--nav right-->
                </div>
            </div>
        </div>
    </div>
    <!--Navigation style-->
</header>