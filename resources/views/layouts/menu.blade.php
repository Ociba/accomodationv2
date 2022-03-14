<header id="header-navigation">
    <!--Navigation style-->
    <div class="cactus-nav-control ">
        <div class="cactus-nav-main dark-div  dark-bg-color-1" >
            <div class="cactus-container padding-30px ">
                <div class="cactus-row magin-30px">
                    <!--nav left-->
                    <div class="cactus-nav-left">
                        <!--logo-->
                        <div class="cactus-logo navigation-font">
                            <a href="/">
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
                        <!--header search-->
                        <!--header search-->
                        <div class="cactus-submit-video">
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
                        {{--<div class="cactus-submit-video">
                        <a href=""><i class="fas fa-shopping-cart" style="color:#ff8000;"></i>&nbsp;<span  style="background-color:whit;text-decoration: none;">Cart</span></a>
                            <a href="#" data-toggle="modal" data-target="#videopro_submit_form" class="btn btn-user-submit btn-default bt-style-1 padding-small " data-type="">        	
                            <span>Submit Video</span>        </a>
                        </div>--}}
                        <div class="cactus-main-menu cactus-user-login navigation-font">
                            <ul>
                                <li>
                                <a href="/cart">Cart &nbsp; <i class="fas fa-shopping-cart"></i><span style="background-color:orange; border-radius: 10px; padding:3px;">1</span></a>
                                </li>
                                <li>
                                    <a href="/login-now"><i class="fas fa-user"></i>&nbsp;Login</a>
                                    {{--<ul>
                                        <li><a href="/register-now">Register</a></li>
                                    </ul>--}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--nav right-->
                    <!--nav left-->
                    <div class="cactus-nav-left cactus-only-main-menu">
                        <!--main menu / megamenu / Basic dropdown-->                                  
                        <div class="cactus-main-menu navigation-font">
                            <ul class="nav navbar-nav">
                                <li id="mega-menu-item-1589" class=" menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                    <a href="/"><i class="fa fa-home"></i> Home</a>
                                </li>
                                <li id="mega-menu-item-1446" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                    <a href="#"><i class="fa fa-play-circle-o"></i> Accomodation</a>
                                    <ul class="sub-menu dropdown-menu sub-menu-list level0">
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/rooms/">Rooms</a></li>
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/hostels/">Hostels</a></li>
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/houses/">Houses</a></li>
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/apartment/">Apartments</a></li>
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/plotsandland/">Plots & Land</a></li>
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/shops/">Shop</a></li>
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/office/">Office</a></li>
                                    </ul>
                                </li>
                                <li id="mega-menu-item-773" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                    <a href="#"><i class="fa fa-bars"></i> Supermarkert</a>
                                    <ul class="sub-menu dropdown-menu sub-menu-list level0">
                                        
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/supermarket/">All Supermarket Items</a></li>
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/clothes/">Clothes</a></li>
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-page level1"><a href="/shoe/">Shoe</a></li>
                                        <li class="menu-item level2  menu-item menu-item-type-custom menu-item-object-custom level1"><a href="/phones/">Phones</a></li>
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/saloon/">Saloon</a></li>
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-page level1"><a href="/electronics/">Electronics</a></li>
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-page level1"><a href="/computers/">Computers</a></li>
                                        <li class="menu-item level2  menu-item menu-item-type-custom menu-item-object-custom level1"><a href="/drinks/">Drinks</a></li>
                                        <li class="menu-item level2  menu-item menu-item-type-custom menu-item-object-custom level1"><a href="/utensils/">Utensils</a></li>
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-page level1"><a href="/beddings/">Beddings</a></li>
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-page level1"><a href="/scholastic/">Scholastic Materials</a></li>
                                    </ul>
                                </li>
                                <li id="mega-menu-item-2476" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                    <a href="#"><i class="fa fa-database"></i>Produce</a>
                                    <ul class="sub-menu dropdown-menu sub-menu-list level0">
                                        <li class="menu-item level2 parent menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level1 dropdown-submenu">
                                            <a href="#">Poultry</a>
                                            <ul class="sub-menu dropdown-menu level1">
                                                <li id="mega-menu-item-2505" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/poultry/">Chicken</a></li>
                                                <li id="mega-menu-item-2506" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/poultry/">Turkeys</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/poultry/">Ducks</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/poultry/">Pigeons</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/poultry/">Eggs</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/poultry/">Guinea Fowls</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item level2 parent menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level1 dropdown-submenu">
                                            <a href="#">Animals</a>
                                            <ul class="sub-menu dropdown-menu level1">
                                                <li id="mega-menu-item-2505" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/animals/">Cattle</a></li>
                                                <li id="mega-menu-item-2506" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/animals/">Goats</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/animals/">Pigs</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/animals/">Sheep</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/animals/">Rabbits</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item level2 parent menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level1 dropdown-submenu">
                                            <a href="#">Cereals</a>
                                            <ul class="sub-menu dropdown-menu level1">
                                                <li id="mega-menu-item-2505" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/cereals/">Sorghum</a></li>
                                                <li id="mega-menu-item-2506" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/cereals/">Millet</a></li>
                                                <li id="mega-menu-item-2506" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/cereals/">Simsim</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/cereals/">Barley</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item level2 parent menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level1 dropdown-submenu">
                                            <a href="#">Root Tubers</a>
                                            <ul class="sub-menu dropdown-menu level1">
                                                <li id="mega-menu-item-2505" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/roottubers/">Cassava</a></li>
                                                <li id="mega-menu-item-2506" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/roottubers/">Sweet Potatoes</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/roottubers/">Ginger</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/roottubers/">Ebisali</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item level2 parent menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level1 dropdown-submenu">
                                            <a href="#">Legumes Crops</a>
                                            <ul class="sub-menu dropdown-menu level1">
                                                <li id="mega-menu-item-2505" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/legumes/">G/Nuts</a></li>
                                                <li id="mega-menu-item-2506" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/legumes/">Green Peas</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/legumes/">White Peas</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/legumes/">Esuk</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item level2 parent menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level1 dropdown-submenu">
                                            <a href="#">Vegetables</a>
                                            <ul class="sub-menu dropdown-menu level1">
                                                <li id="mega-menu-item-2505" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/vegetables/">Tomatoes</a></li>
                                                <li id="mega-menu-item-2506" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/vegetables/">Onions</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/vegetables/">Egg Plant</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/vegetables/">Cabbage</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/vegetables/">Dodo</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item level2 parent menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level1 dropdown-submenu">
                                            <a href="#">Fruits</a>
                                            <ul class="sub-menu dropdown-menu level1">
                                                <li id="mega-menu-item-2505" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/fruits/">Oranges</a></li>
                                                <li id="mega-menu-item-2506" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/fruits/">Mangoes</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/fruits/">Ovacado</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/fruits/">Paw Paws</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/fruits/">Water Melon</a></li>
                                                <li id="mega-menu-item-2507" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/fruits/">Jack Fruit</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item level2 parent menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level1 dropdown-submenu">
                                            <a href="#">Stem Tubers</a>
                                            <ul class="sub-menu dropdown-menu level1">
                                                <li id="mega-menu-item-2505" class=" menu-item menu-item-type-post_type menu-item-object-page level2"><a href="/stemtubers/">Sugar Cane</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li id="mega-menu-item-1446" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                    <a href="/agricultureequipments/"><i class="fa fa-play-circle-o"></i>Equipments</a>
                                </li>
                                <li id="mega-menu-item-1446" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent level0 has-sub dropdown main-menu-item list-style">
                                    <a href="#"><i class="fa fa-play-circle-o"></i> Register</a>
                                    <ul class="sub-menu dropdown-menu sub-menu-list level0">
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/register-now">Accomodation | Property</a></li>
                                        <li class="menu-item level2  menu-item menu-item-type-post_type menu-item-object-post level1"><a href="/produce-registration/">Produce</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--main menu-->
                    </div>
                    <!--nav left-->                                
                </div>
            </div>
        </div>
    </div>
    <!--Navigation style-->
</header>