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
                                                    <!--Single Page Content-->
                                                    <article id="post-1508" class="post-1508 page type-page status-publish cactus-single-content">
                                                       @livewire('clothes')
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
        <div class="submitModal modal fade" id="videopro_submit_form">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fas fa-times"></i></button>
                        <h4 class="modal-title" id="videopro_frontend_submit_heading">Submit Video</h4>
                    </div>
                    <div class="modal-body" >
                        <aside id="text-20" class="   user-submit">
                            <style>#text-20 .ct-sub-w-title{color:FFFFFF !important; background:FF0000 !important}</style>
                            <div class="widget-inner">
                                <div class="textwidget">
                                    <div role="form" class="wpcf7" id="wpcf7-f2182-o2" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action="https://videopro.cactusthemes.com/v1/home-page-v5/#wpcf7-f2182-o2" method="post" class="wpcf7-form" enctype="multipart/form-data" novalidate="novalidate">
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="2182" /><br />
                                                <input type="hidden" name="_wpcf7_version" value="5.0.1" /><br />
                                                <input type="hidden" name="_wpcf7_locale" value="en_US" /><br />
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2182-o2" /><br />
                                                <input type="hidden" name="_wpcf7_container_post" value="0" />
                                            </div>
                                            <p>Please fill in all information below to submit video.<br />
                                                Your Email<span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span><br />
                                                Post Title<span class="wpcf7-form-control-wrap post-title"><input type="text" name="post-title" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span><br />
                                                Post Description<span class="wpcf7-form-control-wrap post-description"><textarea name="post-description" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span><br />
                                                Video URL<span class="wpcf7-form-control-wrap video-url"><input type="text" name="video-url" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span><br />
                                                Video File (Limit 30MB, File Type: MP4|FLV)<span class="wpcf7-form-control-wrap video-file"><input type="file" name="video-file" size="40" class="wpcf7-form-control wpcf7-file" accept=".mp4,.flv" aria-invalid="false" /></span><br />
                                                Video Embed Code<span class="wpcf7-form-control-wrap video-code"><textarea name="video-code" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span><br />
                                                Video Thumbnail <span class="wpcf7-form-control-wrap video-thumbnail"><input type="file" name="video-thumbnail" size="40" class="wpcf7-form-control wpcf7-file" accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.ppt,.pptx,.odt,.avi,.ogg,.m4a,.mov,.mp3,.mp4,.mpg,.wav,.wmv" aria-invalid="false" /></span><br />
                                                Tags <span class="wpcf7-form-control-wrap tag"><input type="text" name="tag" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> Use comma to separate tags<br />
                                                Select Categories
                                            </p>
                                            <hr>
                                            <span class="wpcf7-form-control-wrap cat"><span class="row wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required"><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="cat[]" value="12" /> GAME</label><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="cat[]" value="161" /> KOMBAT</label><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="cat[]" value="8" /> MOVIE</label><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="cat[]" value="6" /> MUSIC</label><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="cat[]" value="171" /> NEWS</label><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="cat[]" value="2" /> SPORT</label><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="cat[]" value="5" /> TECH</label><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="cat[]" value="11" /> TV SHOW</label><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="cat[]" value="1" /> Uncategorized</label></span></span><br />
                                            Select Channels</p>
                                            <hr>
                                            <span class="wpcf7-form-control-wrap channel"><span class="row wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required"><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="channel[]" value="2190" /> TV Channel</label><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="channel[]" value="2189" /> Tech Channel</label><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="channel[]" value="2188" /> Music Channel</label><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="channel[]" value="2187" /> Movie Channel</label><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="channel[]" value="2186" /> Sport Channel</label></span></span><br />
                                            Select Playlists</p>
                                            <hr>
                                            <span class="wpcf7-form-control-wrap playlist"><span class="row wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required"><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="playlist[]" value="794" /> MOVIE</label><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="playlist[]" value="793" /> TECH</label><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="playlist[]" value="792" /> TV SHOW</label><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="playlist[]" value="791" /> SPORT</label><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="playlist[]" value="790" /> GAME</label><label class="col-md-4 wpcf7-list-item"><input type="checkbox" name="playlist[]" value="789" /> MUSIC</label></span></span></p>
                                            <div class="wpcf7-form-control-wrap">
                                                <div data-sitekey="6LdjB38dAAAAAEPN9pup5lpwVuyHGiZH0048Vyyj" data-size="compact" class="wpcf7-form-control g-recaptcha wpcf7-recaptcha"></div>
                                                <p>
                                                <noscript>
                                                    </p>
                                                    <div style="width: 302px; height: 422px;">
                                                        <div style="width: 302px; height: 422px; position: relative;">
                                                            <div style="width: 302px; height: 422px; position: absolute;">
                                                                <iframe src="https://www.google.com/recaptcha/api/fallback?k=6LdjB38dAAAAAEPN9pup5lpwVuyHGiZH0048Vyyj" frameborder="0" scrolling="no" style="width:100%; height:422px; border-style: none;"><br />
                                                                </iframe>
                                                            </div>
                                                            <div style="width: 300px; height: 60px; border-style: none; bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px; background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
                                                                <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;"><br />
                                                                </textarea>
                                                            </div>
                                                            </p>
                                                        </div>
                                                        </p>
                                                    </div>
                                                    <p>
                                                </noscript>
                                            </div>
                                            <p><input type="submit" value="SUBMIT VIDEO" class="wpcf7-form-control wpcf7-submit" /></p>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="submitModal modal fade" id="submitReport">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fas fa-times"></i></button>
                        <h4 class="modal-title h4" id="myModalLabel">Report This</h4>
                    </div>
                    <div class="modal-body">
                        <div role="form" class="wpcf7" id="wpcf7-f2183-o3" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="https://videopro.cactusthemes.com/v1/home-page-v5/#wpcf7-f2183-o3" method="post" class="wpcf7-form" novalidate="novalidate">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="2183" />
                                    <input type="hidden" name="_wpcf7_version" value="5.0.1" />
                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2183-o3" />
                                    <input type="hidden" name="_wpcf7_container_post" value="0" />
                                </div>
                                <p>Please fill in all information bellow to report video.<br />
                                <div class="hidden wpcf7-form-control-wrap report_url">
                                    <div class="wpcf7-form-control wpcf7-validates-as-required"><input name="report-url" class="hidden wpcf7-form-control wpcf7-text wpcf7-validates-as-required" type="hidden" value="https://videopro.cactusthemes.com/v1/home-page-v5" /></div>
                                </div>
                                </p>
                                <p>Your Email<br />
                                    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> 
                                </p>
                                <p>Please tell us why do you think this video is inappropriate<br />
                                    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea></span> 
                                </p>
                                <p>Enter security code<br/><input type="hidden" name="_wpcf7_captcha_challenge_captcha-752" value="2662933222" /><img class="wpcf7-form-control wpcf7-captchac wpcf7-captcha-captcha-752" width="72" height="24" alt="captcha" src="{{ asset('wp-content/uploads/wpcf7_captcha/2662933222.png')}}" /> <span class="wpcf7-form-control-wrap captcha-752"><input type="text" name="captcha-752" value="" size="40" class="wpcf7-form-control wpcf7-captchar" autocomplete="off" aria-invalid="false" /></span></p>
                                <p><input type="submit" value="SEND" class="wpcf7-form-control wpcf7-submit" /></p>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 
            Lockers: user tracker for visibility filters
            OnePress, bizpanda.com
            -->
        <script>
            window.__bp_session_timeout = '900';
            window.__bp_session_freezing = 0;
            window.bizpanda||(window.bizpanda={}),window.bizpanda.bp_can_store_localy=function(){return!1},window.bizpanda.bp_ut_get_cookie=function(e){for(var n=e+"=",i=document.cookie.split(";"),o=0;o<i.length;o++){for(var t=i[o];" "==t.charAt(0);)t=t.substring(1);if(0==t.indexOf(n))return decodeURIComponent(t.substring(n.length,t.length))}return!1},window.bizpanda.bp_ut_set_cookie=function(e,n,i){var o=new Date;o.setTime(o.getTime()+24*i*60*60*1e3);var t="expires="+o.toUTCString();document.cookie=e+"="+encodeURIComponent(n)+"; "+t+"; path=/"},window.bizpanda.bp_ut_get_obj=function(e){var n=null;if(!(n=window.bizpanda.bp_can_store_localy()?window.localStorage.getItem("bp_ut_session"):window.bizpanda.bp_ut_get_cookie("bp_ut_session")))return!1;n=(n=n.replace(/\-c\-/g,",")).replace(/\-q\-/g,'"');try{n=JSON.parse(n)}catch(e){return!1}return n.started+1e3*e<(new Date).getTime()&&(n=null),n},window.bizpanda.bp_ut_set_obj=function(e,n){e.started&&window.__bp_session_freezing||(e.started=(new Date).getTime()),(e=JSON.stringify(e))&&(e=(e=e.replace(/\"/g,"-q-")).replace(/\,/g,"-c-")),window.bizpanda.bp_can_store_localy()?window.localStorage.setItem("bp_ut_session",e):window.bizpanda.bp_ut_set_cookie("bp_ut_session",e,5e3)},window.bizpanda.bp_ut_count_pageview=function(){var e=window.bizpanda.bp_ut_get_obj(window.__bp_session_timeout);e||(e={}),e.pageviews||(e.pageviews=0),0===e.pageviews&&(e.referrer=document.referrer,e.landingPage=window.location.href,e.pageviews=0),e.pageviews++,window.bizpanda.bp_ut_set_obj(e)},window.bizpanda.bp_ut_count_locker_pageview=function(){var e=window.bizpanda.bp_ut_get_obj(window.__bp_timeout);e||(e={}),e.lockerPageviews||(e.lockerPageviews=0),e.lockerPageviews++,window.bizpanda.bp_ut_set_obj(e)},window.bizpanda.bp_ut_count_pageview();
        </script>
        <!-- / -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            
            ga('create', 'UA-52179345-9', 'auto');
            ga('send', 'pageview');
            
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var google_conversion_id = 857696998;
            var google_custom_params = window.google_tag_params;
            var google_remarketing_only = true;
            /* ]]> */
        </script>
        <script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
        <noscript>
            <div style="display:inline;">
                <img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/857696998/?guid=ON&amp;script=0"/>
            </div>
        </noscript>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "http://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>   
        <script type="text/javascript">
            (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/platform.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
            })();
        </script>    
        <script type="text/javascript">
            var recaptchaWidgets = [];
            var recaptchaCallback = function() {
            	var forms = document.getElementsByTagName( 'form' );
            	var pattern = /(^|\s)g-recaptcha(\s|$)/;
            
            	for ( var i = 0; i < forms.length; i++ ) {
            		var divs = forms[ i ].getElementsByTagName( 'div' );
            
            		for ( var j = 0; j < divs.length; j++ ) {
            			var sitekey = divs[ j ].getAttribute( 'data-sitekey' );
            
            			if ( divs[ j ].className && divs[ j ].className.match( pattern ) && sitekey ) {
            				var params = {
            					'sitekey': sitekey,
            					'type': divs[ j ].getAttribute( 'data-type' ),
            					'size': divs[ j ].getAttribute( 'data-size' ),
            					'theme': divs[ j ].getAttribute( 'data-theme' ),
            					'badge': divs[ j ].getAttribute( 'data-badge' ),
            					'tabindex': divs[ j ].getAttribute( 'data-tabindex' )
            				};
            
            				var callback = divs[ j ].getAttribute( 'data-callback' );
            
            				if ( callback && 'function' == typeof window[ callback ] ) {
            					params[ 'callback' ] = window[ callback ];
            				}
            
            				var expired_callback = divs[ j ].getAttribute( 'data-expired-callback' );
            
            				if ( expired_callback && 'function' == typeof window[ expired_callback ] ) {
            					params[ 'expired-callback' ] = window[ expired_callback ];
            				}
            
            				var widget_id = grecaptcha.render( divs[ j ], params );
            				recaptchaWidgets.push( widget_id );
            				break;
            			}
            		}
            	}
            };
            
            document.addEventListener( 'wpcf7submit', function( event ) {
            	switch ( event.detail.status ) {
            		case 'spam':
            		case 'mail_sent':
            		case 'mail_failed':
            			for ( var i = 0; i < recaptchaWidgets.length; i++ ) {
            				grecaptcha.reset( recaptchaWidgets[ i ] );
            			}
            	}
            }, false );
        </script>
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