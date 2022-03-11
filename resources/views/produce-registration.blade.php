<!DOCTYPE html>
<html lang="en-US">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.css')
    </head>
    <body class="page-template page-template-page-templates page-template-front-page page-template-page-templatesfront-page-php page page-id-1508 group-blog enable-sticky-menu  behavior-down sidebar-both layout-fullwidth wpb-js-composer js-comp-ver-5.4.5 vc_responsive">
        <div id="fb-root"></div>
        <a name="top" style="height:0; position:absolute; top:0;" id="top"></a>
        <div id="body-wrap"  class=" " >
            <div id="wrap">
                @include('layouts.menu')
                <!--body content-->
                <div id="cactus-body-container" >
                    <div class="cactus-sidebar-control sb-ct-medium   sb-ct-small ">
                        <!--sb-ct-medium, sb-ct-small-->
                        <div class="cactus-container ">
                            <div class="cactus-row">
                                <!--Sidebar-->
                                @include('layouts.sidebar1')
                                <!--Sidebar-->                    
                                <div class="main-content-col">
                                    <div class="main-content-col-body">
                                        <div class="single-page-content">
                                            <article class="cactus-single-content">
                                                <h2 class="hidden-title">Home Page V5</h2>
                                                <div class="single-page-content single-content">
                                                <ol class="cactus-breadcrumb  navigation-font font-size-1 " itemscope itemtype="http://schema.org/BreadcrumbList">
                                                <a itemprop="item" href="../index.html" rel="v:url" property="v:title"><span itemprop="name">Home</span></a><i class="fas fa-angle-right" aria-hidden="true"></i><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="current"><span itemprop="name">Register</span><meta itemprop="position" content="2" /></li></ol><!-- .breadcrumbs -->
                                                <h1 class="single-title entry-title">Register [Produce]</h1>    
                                                    <!--Single Page Content-->
                                                    <article id="post-1508" class="post-1508 page type-page status-publish cactus-single-content">
                                                            @include('layouts.messages')
                                                            <div class="body-content">
                                                            <!--Content-->
                                                            <div role="form" class="" id="" lang="en-US">
                                                                <div class="screen-reader-response"></div>
                                                                <form action="/create-prouduce-account" method="post" class="wpcf7-form" enctype="multipart/form-data">
                                                                @csrf
                                                                    <p>Your Name *<br />
                                                                        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  required /></span> 
                                                                    </p>
                                                                    <p>Your Phone Number *<br />
                                                                        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="contact" value="" size="40" maxLength="10" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  required /></span> 
                                                                    </p>
                                                                    <p>Your Location *<br />
                                                                        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  required /></span> 
                                                                    </p>
                                                                    <p>Your Photo *<br />
                                                                        <span class="wpcf7-form-control-wrap your-name"><input type="file" name="profile_photo_path" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  required /></span> 
                                                                    </p>
                                                                    <p>Your Email *<br />
                                                                        <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"  required /></span> 
                                                                    </p>
                                                                    <p>Your Password<br />
                                                                        <span class="wpcf7-form-control-wrap your-subject"><input type="password" name="password" value="" size="40" class="wpcf7-form-control wpcf7-text" required /></span> 
                                                                    </p>
                                                                    <p>Confirm Password<br />
                                                                        <span class="wpcf7-form-control-wrap your-subject"><input type="password" name="password_confirmation" value="" size="40" class="wpcf7-form-control wpcf7-text" required /></span> 
                                                                    </p>
                                                                    <p><button type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit btn-primary">Submit</button>
                                                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                                    <span style="color:blue;">Have already an account <a href="{{ route('login') }}" style="color:blue;">Login</a></span>
                                                                </form>
                                                            </div>
                                                            <!--Content-->
                                                            <div class="entry-footer">
                                                            </div>
                                                            <!-- .entry-footer -->
                                                        </div>
                                                    </article>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <!--Sidebar-->
                                @include('layouts.right-sidebar1')
                                <!--Sidebar-->                    
                            </div>
                        </div>
                    </div>
                </div>
                <!--body content-->
                @include('layouts.popular-posts')
                <!--footer-->
                @include('layouts.footer')
                <!--footer-->
            </div>
            <!--Menu moblie-->
            <div class="canvas-ovelay"></div>
            @include('layouts.mobile-view')
            <!--Menu moblie-->
        </div>
        @include('layouts.javascript')
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="ct-icon-star-two" viewBox="0 0 512 512">
                <path d="m494 185c0 4-3 9-8 14l-103 101l24 143c0 1 0 3 0 5c0 4-1 8-3 10c-2 3-4 5-8 5c-4 0-8-2-12-4l-128-67l-128 67c-4 2-8 4-12 4c-4 0-7-2-9-5c-2-2-3-6-3-10c0-1 0-3 1-5l24-143l-104-101c-4-6-7-10-7-14c0-7 6-12 16-13l144-21l64-130c4-8 8-12 14-12c6 0 10 4 14 12l64 130l144 21c10 1 16 6 16 13z"/>
            </symbol>
        </svg>
        <div class="cactus-widget-demo">
            <!--btn open-->
            <div class="cactus-button-open">
                <svg class="ct-icon-star-two">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ct-icon-star-two"></use>
                </svg>
                <span>DEMOS</span>
            </div>
            <!--btn open-->
            <div class="cactus-buy-button">
                <a href="https://themeforest.net/item/videopro-video-wordpress-theme/16677956?ref=cactusthemes" target="_blank" class="cactus-btn-buy">Buy Now</a>
            </div>
            <div class="cactus-content-scroll">
                <p class="desc">VideoPro has more features than you can imagine. In addition, it is highly customizabe and extensible</p>
                <div class="cactus-content-body">
                    <div class="cactus-group-demo">
                        <div class="cactus-group-content">
                            <div class="cactus-item">
                                <a href="http://videopro.cactusthemes.com/v1/" target="_blank" class="cactus-item-content" title="Default Demo">
                                    <img src="{{ asset('wp-content/plugins/cactus-buy-button/img/entertainment.jpg')}}" alt="Default Demo">
                                    <div>V1 - Default</div>
                                </a>
                            </div>
                            <div class="cactus-item">
                                <a href="http://videopro.cactusthemes.com/v2/" target="_blank" class="cactus-item-content" title="VideoPro Membership & Community Features">
                                    <img style="margin:15px 0 20px 0" src="{{ asset('wp-content/plugins/cactus-buy-button/img/videopro-v2.jpg')}}" alt="VideoPro Membership & Community Features">
                                    <div>V2 - Membership</div>
                                </a>
                            </div>
                            <div class="cactus-item">
                                <a href="http://videopro.cactusthemes.com/poster" target="_blank" class="cactus-item-content" title="Poster Movie Site">
                                    <img src="{{ asset('wp-content/plugins/cactus-buy-button/img/poster.jpg')}}" alt="Poster Movie Site">
                                    <div>Poster Movie</div>
                                </a>
                            </div>
                            <div class="cactus-item">
                                <a href="http://videopro.cactusthemes.com/cooking" target="_blank" class="cactus-item-content" title="Cooking Demo">
                                    <img src="{{ asset('wp-content/plugins/cactus-buy-button/img/cooking.jpg')}}" alt="Cooking Demo">
                                    <div>Cooking</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="desc">Have a pre-sale question? <a href="https://themeforest.net/user/cactusthemes" target="_blank">Inbox us</a> now</p>
            </div>
        </div>
    </body>
</html>