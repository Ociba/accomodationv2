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
                            <a href="/dashboard">
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
                        @if(in_array('Can view notifications', auth()->user()->Permisions()))
                        <div class="cactus-submit-video">
                            <!--<style>
                                .cactus-submit-video a {background-color:##D9251D !important; color:##FFFFFF !important;}
                                .cactus-submit-video a:hover{background-color:##999999 !important; color:##FFFFFF !important;}
                                </style>-->
                            <a href="#" data-toggle="modal" data-target="#videopro_submit_for" class="btn btn-user-submit btn-default bt-style-3  padding-small" style="background-color:blue;" title="supermarket & Produce orders">        	
                            <span>{{auth()->user()->countAllOrders()}}</span>       
                            </a>
                            <a href="#" data-toggle="modal" data-target="#videopro_submit_for" class="btn btn-user-submit btn-default bt-style-2 padding-small " title="Accomodation & Property Subscribers">        	
                            <span>{{auth()->user()->getTodayRegisteredUsers()}}</span>       
                            </a>
                            <a href="#" data-toggle="modal" data-target="#videopro_submit_for" class="btn btn-user-submit btn-default bt-style-3 padding-small " title="Produce Subscribers">        	
                            <span>{{ auth()->user()->getTodayRegisteredProduceUsers()}}</span>       
                            </a>
                        </div>
                        @endif
                        <div class="cactus-main-menu cactus-user-login navigation-font">
                            <ul>
                                <li>
                                <a href="/dashboard">{{auth()->user()->name}}</a>
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
    <div class="cactus-nav-control  cactus-nav-style-3">
        <!--add Class: cactus-nav-style-3-->
        <div class="cactus-nav-main dark-div dark-bg-color-1">
            <div class="cactus-container padding-30px ">
                <!--Menu Down-->
                <div class="cactus-row magin-30px">
                    <!--nav left-->
                    <div class="cactus-nav-left cactus-only-main-menu">
                        <!--main menu / megamenu / Basic dropdown-->                                  
                        <div class="cactus-main-menu navigation-font">
                            <ul class="nav navbar-nav">
                                @if(in_array('Can view dashboard', auth()->user()->Permisions()))
                                <li id="mega-menu-item-1589" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                    <a href="/dashboard"><i class="fa fa-home"></i> Dashboard</a>
                                </li>
                                @endif
                                @if(in_array('Can View categories', auth()->user()->Permisions()))
                                <li id="mega-menu-item-1589" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                    <a href="/category/"><i class="fa fa-list"></i> Category</a>
                                </li>
                                @endif
                                @if(in_array('Can view Users', auth()->user()->Permisions()))
                                <li id="mega-menu-item-1446" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                    <a href="#"><i class="fa fa-users"></i> Users</a>
                                    <ul class="sub-menu dropdown-menu sub-menu-list level0">
                                         @if(in_array('Can view Registered Users', auth()->user()->Permisions()))
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/users/">Registered Users</a></li>
                                         @endif
                                         @if(in_array('Can view Subscribers', auth()->user()->Permisions()))
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/subscribers/">Subscribers</a></li> 
                                         @endif
                                         @if(in_array('Can view Brokers', auth()->user()->Permisions()))
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/brokers/">Brokers</a></li>
                                         @endif
                                         @if(in_array('Can view Post', auth()->user()->Permisions()))
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/post">Post</a></li>
                                         @endif
                                         @if(in_array('Can view Account Settings', auth()->user()->Permisions()))
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/users-types">Account Settings</a></li>
                                        @endif
                                    </ul>
                                </li>
                                @endif
                                @if(in_array('Can view Property', auth()->user()->Permisions()))
                                <li id="mega-menu-item-773" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                    <a href="#"><i class="fa fa-bars"></i> Property</a>
                                    <ul class="sub-menu dropdown-menu sub-menu-list level0">
                                    {{--<li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="../spooly-worlds-first-magnetic-charging-cables/index.html">Received Requests</a></li>--}}
                                    
                                        @if(in_array('Can view my Property', auth()->user()->Permisions()))
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/property/my-property">My Property</a></li>
                                        @endif
                                         @if(in_array('Can view property Available', auth()->user()->Permisions()))
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/property/">Property Available</a></li>
                                        @endif
                                        @if(in_array('Can view  property taken', auth()->user()->Permisions()))
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-page level1"><a href="/property/property-taken">Property Taken</a></li>
                                        @endif
                                    </ul>
                                </li>
                                @endif
                                @if(in_array('Can view Shop', auth()->user()->Permisions()))
                                <li id="mega-menu-item-2476" class=" menu-item menu-item-type-custom menu-item-object-custom current-menu-ancesto menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                    <a href="#"><i class="fa fa-shopping-cart"></i> Shop</a>
                                    <ul class="sub-menu dropdown-menu sub-menu-list level0">
                                        <li class="menu-item level2 parent menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children parent level1 dropdown-submenu">
                                        
                                        @if(in_array('Can view Item Category', auth()->user()->Permisions()))
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-page level1"><a href="/supermarketitemcategory/">Items Category</a></li>
                                        @endif
                                        @if(in_array('Can view Supermarket', auth()->user()->Permisions()))
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-page level1"><a href="/supermarket/supermaket-items">Supermarket Items</a></li>
                                        @endif
                                        @if(in_array('Can view Customer Orders', auth()->user()->Permisions()))
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-page level1"><a href="/supermarket/supermarkets-orders">Customer Order</a></li>
                                        @endif
                                    </li>
                                    </ul>
                                </li>
                                @endif
                                @if(in_array('Can view Equipment', auth()->user()->Permisions()))
                                <li id="mega-menu-item-773" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                    <a href="#"><i class="fa fa-database"></i> Equipment</a>
                                    <ul class="sub-menu dropdown-menu sub-menu-list level0">
                                    @if(in_array('Can view received Requests', auth()->user()->Permisions()))
                                    <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/agricultureequipments/equipment-requests-recieved">Received Requests</a></li>
                                    @endif
                                    @if(in_array('Can view Available Equipment', auth()->user()->Permisions()))
                                    <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/agricultureequipments/equipments-available">Equipment Available</a></li>
                                    @endif
                                    @if(in_array('Can view taken Equipment', auth()->user()->Permisions()))
                                    <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-page level1"><a href="/agricultureequipments/equipments-taken">Equipment Taken</a></li>
                                    @endif
                                    </ul>
                                </li>
                                @endif
                                @if(in_array('Can view produce', auth()->user()->Permisions()))
                                <li id="mega-menu-item-773" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                    <a href="#"><i class="fa fa-database"></i> Produce</a>
                                    <ul class="sub-menu dropdown-menu sub-menu-list level0">
                                         @if(in_array('Can view my Produce', auth()->user()->Permisions()))
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/produce/my-produce">My Produce</a></li>
                                        @endif
                                        @if(in_array('Can view Available Produce', auth()->user()->Permisions()))
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/produce/produce-available">Produce Available</a></li>
                                        @endif
                                        @if(in_array('Can view Produce Taken', auth()->user()->Permisions()))
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-page level1"><a href="/produce/produce-taken">Produce Taken</a></li>
                                        @endif
                                    </ul>
                                </li>
                                @endif
                                @if(in_array('Can view Pay', auth()->user()->Permisions()))
                                <li id="mega-menu-item-1589" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                    <a href="/income/"><i class="fa fa-dollar-sign"></i> Pay</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                        <!--main menu-->
                    </div>
                    <!--nav left-->  
                </div>
                <!--Menu Down-->
            </div>
        </div>
    </div>
    <!--Navigation style-->
</header>