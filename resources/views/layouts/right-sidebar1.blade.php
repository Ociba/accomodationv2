<style>
    .pic-ctn {
  width: 100vw;
  height: 200px;
}

@keyframes display {
  0% {
    transform: translateX(200px);
    opacity: 0;
  }
  10% {
    transform: translateX(0);
    opacity: 1;
  }
  20% {
    transform: translateX(0);
    opacity: 1;
  }
  30% {
    transform: translateX(-200px);
    opacity: 0;
  }
  100% {
    transform: translateX(-200px);
    opacity: 0;
  }
}

.pic-ctn {
  position: relativ;
  width: 100vw;
  height: ;
  margin-top: 15vh;
  margin-left:10px;
}

.pic-ctn > img {
  position: absolute;
  top: 0;
  left: calc(40% - 100px);
  opacity: 0;
  animation: display 10s infinite;
}

img:nth-child(2) {
  animation-delay: 2s;
}
img:nth-child(3) {
  animation-delay: 4s;
}
img:nth-child(4) {
  animation-delay: 6s;
}
img:nth-child(5) {
  animation-delay: 8s;
}
</style>
<div class="cactus-sidebar ct-medium">
    <div class="cactus-sidebar-content">
        <aside id="text-22" class=" style-5  widget widget_text">
            <style>#text-22 .ct-sub-w-title{color:FFFFFF !important; background:FF0000 !important}</style>
            <div class="widget-inner">
                <h2 class="widget-title h4"><i class="fas fab fa-connectdevelop"></i> <span>Connect With Us</span></h2>
                <div class="textwidget">
                    <ul class='nav navbar-nav navbar-right social-listing list-inline social-accounts'>
                        <li class="facebook"><a target='_blank' href="https://www.facebook.com/Jjoome-accomodationproperty-shopping-online-100470529257806/" title='Facebook'><i class="fab fa-facebook"></i></a></li>
                        <li class="youtube"><a target='_blank' href="https://www.youtube.com/channel/UCxemJjh0Ym2fCTcRvIr86ww" title='YouTube'><i class="fab fa-youtube"></i></a></li>
                        <li class="twitter"><a target='_blank' href="https://twitter.com/JoomeProperty" title='Twitter'><i class="fab fa-twitter"></i></a></li>
                        <li class="twitch"><a target='_blank' href="#" title='0775401793'><i class="fab fa-whatsapp-square"></i></a></li>
                        <li class="rss"><a href="callto:+256753926367" title='+256753926367'><i class="fas fa-phone"></i></a></li>
                        {{--<li class="twitch"><a target='_blank' href="#" title='Twitch'><i class="fab fa-twitch"></i></a></li>
                        --}}
                    </ul>
                </div>
            </div>
        </aside>
        <aside id="text-7" class="   widget widget_text">
            <style>#text-7 .ct-sub-w-title{color:FFFFFF !important; background:FF0000 !important}</style>
            <div class="widget-inner">
                <div class="textwidget">
                    <div style="text-align:center">
                    <a href="/register-now" title="VideoPro Sample Banner">
                    <img src="{{ asset('images/JOOME.jpg')}}" alt="Ad banner"></a>
                   </div>
                </div>
            </div>
        </aside>
        <aside id="popular_posts_id-2" class=" style-2  widget widget-popular-post">
            <style>#popular_posts_id-2 .ct-sub-w-title{color:FFFFFF !important; background:FF0000 !important}</style>
            <div class="widget-inner">
                <h2 class="widget-title h4"><i class="fas fa-play"></i> <span>Recent Items</span></h2>
                <div class="widget-popular-post-content ">
                    <div class="cactus-listing-wrap">
                        <div class="cactus-listing-config style-3 style-widget-popular-post">
                            <div class="cactus-sub-wrap">
                                @php
                                $equipment_items =\App\Models\Equipment::where('status','active')->latest()->limit(6)->get();
                                @endphp
                                @foreach($equipment_items as $equipment)
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <div class="picture">
                                            <div class="picture-content">
                                                <a title="" target="_self" href="/agricultureequipments/">
                                                    <img width="100" height="75"  src="{{ asset('super_market_photos/'.$equipment->photo)}}" data-sizes="(max-width: 100px) 100vw, 100px" class="lazyload effect-fade" style="padding-top:75%;" alt="canberra_hero_image_JiMVvYU"/>
                                                    
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h3 class="cactus-post-title entry-title h6 sub-lineheight">
                                                <a href="/agricultureequipments/" target="_self" title="">{{$equipment->description}}</a>
                                            </h3>
                                            <div class="posted-on metadata-font">
                                                <a href="/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">{{$equipment->equipment}}</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="/agricultureequipments/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2017-07-11T01:57:01+00:00" class="entry-date updated">Ugx: {{ number_format($equipment->price)}}</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <aside id="popular_posts_id-3" class=" style-2  widget widget-popular-post">
            <style>#popular_posts_id-3 .ct-sub-w-title{color:FFFFFF !important; background:FF0000 !important}</style>
            <div class="widget-inner">
                <h2 class="widget-title h4"><i class="fas fa-star"></i> <span>Adverts Corner</span></h2>
                <div class="widget-popular-post-content style-2">
                    <div class="cactus-listing-wrap">
                        <div class="cactus-listing-config style-2 style-widget-popular-post">
                            <div class="cactus-sub-wrap">
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <div class="picture">
                                            <div class="picture-content">
                                            <div class="pic-ctn text-center">
                                                <img src="{{ asset('advert/adv1.png')}}" style="width:280px; height:160px;,background-color:#fff;" alt="" class="pic">
                                                <img src="{{ asset('advert/adv5.jpg')}}" style="width:260px; height:160px;" alt="" class="pic">
                                                <img src="{{ asset('advert/adv6.jpg')}}" style="width:260px; height:160px;" alt="" class="pic">
                                                <img src="{{ asset('advert/adv7.jpg')}}" style="width:260px; height:160px;" alt="" class="pic">
                                                <img src="{{ asset('advert/adv9.jpg')}}" style="width:260px; height:160px;" alt="" class="pic">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <div class="picture">
                                            <div class="picture-content">
                                                <a title="World&#8217;s Greatest Drag Race 2" target="_self" href="/">
                                                    <img width="407" height="229"  src="{{ asset('wp-content/pic2.png')}}"  data-sizes="(max-width: 407px) 100vw, 407px" class="lazyload effect-fade" style="padding-top:56.265356265356%;" alt="vp-sp06"/>
                                                    <div class="ct-icon-video"></div>
                                                </a>
                                                <div class="cactus-note ct-time font-size-1"><span>05:05</span></div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h3 class="cactus-post-title entry-title h6 sub-lineheight">
                                                <a href="/" target="_self" title="World&#8217;s Greatest Drag Race 2">Service&#8217;s & Market Efficiency is our result</a>
                                            </h3>
                                            <div class="posted-on metadata-font">
                                                <a href="/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">JJOOME</span></a>
                                                <div class="liked cactus-info font-size-1">{{ date('Y')}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <aside id="text-2" class="dark-div style-2 style-3  widget widget_text">
            <style>#text-2 .ct-sub-w-title{color:FFFFFF !important; background:FF0000 !important}</style>
            <div class="widget-inner">
                <h2 class="widget-title h4"><i class="fas fa-envelope"></i> <span>Email Subscribe</span></h2>
                <div class="textwidget">
                    Want to be the first to know when new Products available? Subscribe to our weekly email newsletter. No spam!
                    <div role="form"  lang="en-US" dir="">
                        <div class="screen-reader-response"></div>
                        {{--@include('layouts.messages')--}}
                        <form action="/subscribers/send-email" method="get" class="wpcf7-form">
                            <p><span class="wpcf7-form-control-wrap email-719">
                                <input type="email" name="email" value="" size="40" class="" required placeholder="Your Email" />
                                </span>
                            </p>
                            <p><button type="submit" value="SUBSCRIBE" class="btn btn-primary" style="background-color:orange;">Subscribe Now</button>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </form>
                    </div>
                </div>
            </div>
        </aside>
        <aside id="popular_posts_id-9" class="   widget widget-popular-post">
            <style>#popular_posts_id-9 .ct-sub-w-title{color:FFFFFF !important; background:FF0000 !important}</style>
            <div class="widget-inner">
                <div class="cactus-carousel-style-bottom default-sidebar dark-div">
                    <h2 class="widget-title h4">Get Your Fruits</h2>
                    <div class="cactus-listing-wrap">
                        <div class="cactus-listing-config style-2">
                            <!--addClass: style-1 + (style-2 -> style-n)-->
                            <div class="cactus-sub-wrap">
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <a title="" class="post-link" target="_self" href="/">
                                                    <img width="277" height="156"  src="{{ asset('produce/orange.jpeg')}}" data-sizes="(max-width: 277px) 100vw, 277px" class="lazyload effect-fade"  style="padding-top:56.317689530686%;" alt="canberra_hero_image_JiMVvYU"/>
                                                    
                                                </a>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="/" title=""></a>
                                            </h3>
                                            <!--Title-->
                                           {{--<div class="posted-on metadata-font">
                                                <a href="/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">videopro</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2017-07-11T01:57:01+00:00" class="entry-date updated">July 11, 2017</time></a></div>
                                            </div>
                                            --}}
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/google-drive-video-link/" title="Google Drive Video Link">Google Drive Video Link</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="https://videopro.cactusthemes.com/v1/uploader/nhungph/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Rose</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/google-drive-video-link/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2017-02-24T11:04:51+00:00" class="entry-date updated">February 24, 2017</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note font-size-1"><i class="fas fa-thumbs-up"></i><span>8</span></div>
                                                <div class="cactus-note ct-time font-size-1"><span>00:41</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/self-hosted-video/" title="Self-Hosted Video">Self-Hosted Video</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Emily</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/self-hosted-video/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-09-08T04:27:07+00:00" class="entry-date updated">September 8, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note font-size-1"><i class="fas fa-thumbs-up"></i><span>2</span></div>
                                                <div class="cactus-note ct-time font-size-1"><span>14:56</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/grim-legends-3-the-dark-city-part-1-lets-play-walkthrough-beta/" title="Game Tips Collection The Dark City Part 1 Walkthrough BETA">Game Tips Collection The Dark City Part 1 Walkthrough BETA</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="https://videopro.cactusthemes.com/v1/uploader/huongttt/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Jenifer Lopez</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/grim-legends-3-the-dark-city-part-1-lets-play-walkthrough-beta/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-06-09T03:52:11+00:00" class="entry-date updated">June 9, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note ct-time font-size-1"><span>02:22</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/dungeon-hunter-5-how-to-get-a-super-fusion-bonus/" title="How To Get A Super Fusion Bonus Game Walkthrough">How To Get A Super Fusion Bonus Game Walkthrough</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="https://videopro.cactusthemes.com/v1/uploader/huongttt/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Jenifer Lopez</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/dungeon-hunter-5-how-to-get-a-super-fusion-bonus/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-06-09T03:44:29+00:00" class="entry-date updated">June 9, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note ct-time font-size-1"><span>02:22</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/league-of-legends-ekko-seconds/" title="League Of Legends Ekko Seconds Game Tips Cheat Codes">League Of Legends Ekko Seconds Game Tips Cheat Codes</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="https://videopro.cactusthemes.com/v1/uploader/huongttt/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Jenifer Lopez</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/league-of-legends-ekko-seconds/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-06-09T03:36:33+00:00" class="entry-date updated">June 9, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note ct-time font-size-1"><span>01:26</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/avexir-updates-flashy-plasma/" title="Avexir Updates Flashy Plasma Game Review By Pros">Avexir Updates Flashy Plasma Game Review By Pros</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Emily</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/avexir-updates-flashy-plasma/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-05-28T04:54:16+00:00" class="entry-date updated">May 28, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note font-size-1"><i class="fas fa-thumbs-up"></i><span>963</span></div>
                                                <div class="cactus-note ct-time font-size-1"><span>01:01</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/mtv-game-awards-graphic-package/" title="MTV Game Awards Graphic Package The Best Games Of 2016">MTV Game Awards Graphic Package The Best Games Of 2016</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Emily</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/mtv-game-awards-graphic-package/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-05-28T04:52:46+00:00" class="entry-date updated">May 28, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note font-size-1"><i class="fas fa-thumbs-up"></i><span>3.18K</span></div>
                                                <div class="cactus-note ct-time font-size-1"><span>01:01</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/enders-game-motion-graphics-reel/" title="Enders Game Motion Graphics Reel Game Review By Danny">Enders Game Motion Graphics Reel Game Review By Danny</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Emily</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/enders-game-motion-graphics-reel/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-05-28T04:51:33+00:00" class="entry-date updated">May 28, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note font-size-1"><i class="fas fa-thumbs-up"></i><span>723</span></div>
                                                <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/how-to-farm-souls-early-on-in-dark-souls-3/" title="Walkthrough How To Farm Souls Early On In Dark Souls 3">Walkthrough How To Farm Souls Early On In Dark Souls 3</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Emily</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/how-to-farm-souls-early-on-in-dark-souls-3/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-05-28T04:48:25+00:00" class="entry-date updated">May 28, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note font-size-1"><i class="fas fa-thumbs-up"></i><span>28.37K</span></div>
                                                <div class="cactus-note ct-time font-size-1"><span>01:27</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/game-grumps-animated-balogna-man-by-patrick-stannard/" title="Game Grumps Animated Balogna Man Game Review By Chris">Game Grumps Animated Balogna Man Game Review By Chris</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Emily</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/game-grumps-animated-balogna-man-by-patrick-stannard/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-05-28T04:47:05+00:00" class="entry-date updated">May 28, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note font-size-1"><i class="fas fa-thumbs-up"></i><span>7.43K</span></div>
                                                <div class="cactus-note ct-time font-size-1"><span>10:10</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/top-10-best-android-games-2016-must-play/" title="Top 10 Best Android Games Of 2016">Top 10 Best Android Games Of 2016</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Emily</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/top-10-best-android-games-2016-must-play/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-05-28T04:45:43+00:00" class="entry-date updated">May 28, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note font-size-1"><i class="fas fa-thumbs-up"></i><span>5.36K</span></div>
                                                <div class="cactus-note ct-time font-size-1"><span>09:27</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/reviewers-bad-at-games-the-know/" title="Are Reviewers Really Bad at Games">Are Reviewers Really Bad at Games</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Emily</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/reviewers-bad-at-games-the-know/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-05-28T04:41:47+00:00" class="entry-date updated">May 28, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note font-size-1"><i class="fas fa-thumbs-up"></i><span>65.19K</span></div>
                                                <div class="cactus-note ct-time font-size-1"><span>07:52</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/clueless-gamer-overwatch-with-peter-dinklage-lena-headey-conan-on-tbs/" title="Overwatch With Peter Dinklage And Lena Headey">Overwatch With Peter Dinklage And Lena Headey</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Emily</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/clueless-gamer-overwatch-with-peter-dinklage-lena-headey-conan-on-tbs/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-05-28T04:40:35+00:00" class="entry-date updated">May 28, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note font-size-1"><i class="fas fa-thumbs-up"></i><span>16.65K</span></div>
                                                <div class="cactus-note ct-time font-size-1"><span>05:57</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/overwatch-gameplay-trailer/" title="Overwatch Gameplay Trailer Official">Overwatch Gameplay Trailer Official</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Emily</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/overwatch-gameplay-trailer/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-05-28T04:38:31+00:00" class="entry-date updated">May 28, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note font-size-1"><i class="fas fa-thumbs-up"></i><span>2.40K</span></div>
                                                <div class="cactus-note ct-time font-size-1"><span>07:52</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/overwatch-best-pc-game-this-year-so-far-the-know/" title="Overwatch Best PC Game This Year So Far">Overwatch Best PC Game This Year So Far</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Emily</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/overwatch-best-pc-game-this-year-so-far-the-know/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-05-28T04:36:23+00:00" class="entry-date updated">May 28, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note font-size-1"><i class="fas fa-thumbs-up"></i><span>12.01K</span></div>
                                                <div class="cactus-note ct-time font-size-1"><span>02:22</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/taylor-swift-album-of-the-year-58th-grammys/" title="58th Grammy Announcement Moment">58th Grammy Announcement Moment</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="https://videopro.cactusthemes.com/v1/uploader/huongttt/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Jenifer Lopez</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/taylor-swift-album-of-the-year-58th-grammys/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-05-27T09:53:27+00:00" class="entry-date updated">May 27, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note font-size-1"><i class="fas fa-thumbs-up"></i><span>586</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/the-amazing-race-season-28-preview/" title="The Amazing Race Season 28 Preview">The Amazing Race Season 28 Preview</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="https://videopro.cactusthemes.com/v1/uploader/huongttt/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Jenifer Lopez</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/the-amazing-race-season-28-preview/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-05-27T09:31:35+00:00" class="entry-date updated">May 27, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note ct-time font-size-1"><span>01:01</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/le-printemps-du-cinema-spring-is-coming/" title="16 Experiences Couple Has On Road">16 Experiences Couple Has On Road</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="https://videopro.cactusthemes.com/v1/uploader/huongttt/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Jenifer Lopez</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/le-printemps-du-cinema-spring-is-coming/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-05-27T08:11:47+00:00" class="entry-date updated">May 27, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                                <!--item listing-->                                                
                                <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <div class="cactus-note font-size-1"><i class="fas fa-thumbs-up"></i><span>8</span></div>
                                                <div class="cactus-note ct-time font-size-1"><span>08:08</span></div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                <a href="https://videopro.cactusthemes.com/v1/electroshock-esma-2011/" title="Jennifer Lawrence???s Embarrassing Harrison">Jennifer Lawrence???s Embarrassing Harrison</a>
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font">
                                                <a href="https://videopro.cactusthemes.com/v1/uploader/huongttt/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">Jenifer Lopez</span></a>
                                                <div class="date-time cactus-info font-size-1"><a href="https://videopro.cactusthemes.com/v1/electroshock-esma-2011/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-05-27T08:08:41+00:00" class="entry-date updated">May 27, 2016</time></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!--item listing-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>