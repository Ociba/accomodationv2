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
                                                <a itemprop="item" href="../index.html" rel="v:url" property="v:title"><span itemprop="name">Home</span></a><i class="fas fa-angle-right" aria-hidden="true"></i><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="current"><span itemprop="name">Notification</span><meta itemprop="position" content="2" /></li></ol><!-- .breadcrumbs -->
                                                <h1 class="single-title entry-title">Send Notification</h1>    
                                                    <!--Single Page Content-->
                                                    <article id="post-1508" class="post-1508 page type-page status-publish cactus-single-content">
                                                            @include('layouts.messages')
                                                            <div class="body-content">
                                                            <!--Content-->
                                                            <div role="form" class="" id="" lang="en-US">
                                                                <div class="screen-reader-response"></div>
                                                                <form action="/send" method="get" class="wpcf7-form" enctype="multipart/form-data">
                                                                @csrf
                                                                    <p>Title *<br />
                                                                        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="title" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  required /></span> 
                                                                    </p>
                                                                    <p>Message *<br />
                                                                        <span class="wpcf7-form-control-wrap your-name"><textarea type="text" name="body" size="40" maxLength="200" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  required /></textarea></span> 
                                                                    </p>
                                                                  
                                                                    <p><button type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit btn-primary">Submit</button>
                                                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
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