<div class="main-bottom-sidebar-wrap">
    <aside id="popular_posts_id-6" class="   widget body-widget widget-popular-post">
        <style>#popular_posts_id-6 .ct-sub-w-title{color:FFFFFF !important; background:FF0000 !important}</style>
        <div class="body-widget-inner widget-inner">
            <div class="cactus-carousel-style-bottom dark-div">
                <div class="carousel-heading">
                    <div class="font-size-3 heading-font">
                        Popular Posts
                        <div class="prev-slide"><i class="fas fa-angle-left"></i></div>
                        <div class="next-slide"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
                <div class="cactus-listing-wrap">
                    <div class="cactus-listing-config style-2">
                        <!--addClass: style-1 + (style-2 -> style-n)-->
                        <div class="cactus-sub-wrap">
                            @php
                            //This statement gets all the produce available
                                $all_produce =\DB::table('produces')->join('users','users.id','produces.created_by')->where('produces.status','available')
                                ->get(['produces.*','users.address']);
                            @endphp
                            <!--item listing-->   
                            @foreach($all_produce as $produce)                                             
                            <article class="cactus-post-item hentry">
                                <div class="entry-content">
                                    <!--picture (remove)-->
                                    <div class="picture">
                                        <div class="picture-content">
                                            <a title="Top 3 Fitness Apps For That Body" class="post-link" target="_self" href="ping-pong-trick-shots-2-dude-perfect/">
                                                <img width="277" style="height:156px"  src="{{ asset('produce_photos/'.$produce->image)}}"  data-sizes="(max-width: 277px) 100vw, 277px" class="lazyload effect-fade"" alt="vp-sp04"/>
                                                <div class="ct-icon-video"></div>
                                            </a>
                                            <div class="cactus-note font-size-1"></i><span>jjoome</span></div>
                                            {{--<div class="cactus-note ct-time font-size-1"><span>05:05</span></div>--}}
                                        </div>
                                    </div>
                                    <!--picture-->
                                    <div class="content">
                                        <!--Title (no title remove)-->
                                        <h3 class="cactus-post-title entry-title h4"> 
                                            <a href="ping-pong-trick-shots-2-dude-perfect/" title="Top 3 Fitness Apps For That Body">{{$produce->produce_name}} | Ugx: {{ $produce->price}}</a>
                                        </h3>
                                        <!--Title-->
                                        <div class="posted-on metadata-font">
                                            <a href="uploader/hoaintt/" target="_self" class="vcard author cactus-info font-size-1"><span class="fn">{{$produce->address}}</span></a>
                                            <div class="date-time cactus-info font-size-1"><a href="ping-pong-trick-shots-2-dude-perfect/" target="_self" class="cactus-info" rel="bookmark"><time datetime="2016-05-27T04:07:45+00:00" class="entry-date updated">{{$produce->phone_number}}</time></a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                            <!--item listing-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>