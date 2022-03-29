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
                                                                        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  required /></span> 
                                                                    </p>
                                                                    <p>Your Phone Number *<br />
                                                                        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="contact" size="40" maxLength="10" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  required /></span> 
                                                                    </p>
                                                                    <p>Your Location *<br />
                                                                        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="address" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  required /></span> 
                                                                    </p>
                                                                    <p>Your Photo *<br />
                                                                        <span class="wpcf7-form-control-wrap your-name"><input type="file" name="profile_photo_path" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  required /></span> 
                                                                    </p>
                                                                    <p>Your Email *<br />
                                                                        <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"  required /></span> 
                                                                    </p>
                                                                    <p>Your Password<br />
                                                                        <span class="wpcf7-form-control-wrap your-subject"><input type="password" name="password" size="40" class="wpcf7-form-control wpcf7-text" required /></span> 
                                                                    </p>
                                                                    <p>Confirm Password<br />
                                                                        <span class="wpcf7-form-control-wrap your-subject"><input type="password" name="password_confirmation" size="40" class="wpcf7-form-control wpcf7-text" required /></span> 
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
        @include('layouts.sidebar-modal')
    </body>
</html>