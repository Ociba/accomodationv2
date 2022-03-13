<div class="cactus-sidebar ct-small">
    <div class="cactus-sidebar-content">
        <aside id="top-channel-2" class=" style-5  widget widget_top_channels">
            <style>#top-channel-2 .ct-sub-w-title{color:FFFFFF !important; background:#ff6600 !important}</style>
            <div class="widget-inner">
                <h2 class="widget-title h4">Accomodation</h2>
                <div class="widget_top_channel_content">
                    <div class="post-metadata sp-style">
                        <div class="channel-subscribe">
                            <div class="channel-picture">
                                <a href="/rooms/" title="rooms">
                                <img width="50" height="50"  src="{{ asset('images/single.jpg')}}"  data-sizes="(max-width: 50px) 100vw, 50px" class="lazyload effect-fade"  style="padding-top:100%;" alt="vp-ms07"/>
                                </a>
                            </div>
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/rooms/" title="rooms">
                                    Rooms
                                    </a>
                                </h4>
                                <div class="posted-on metadata-font">
                                    @php
                                    $rooms=\DB::table('properties')->where('category_id',1)->orwhere('category_id',2)->count();
                                    $hostel=\DB::table('properties')->where('category_id',4)->count();
                                    $houses=\DB::table('properties')->where('category_id',3)->count();
                                    $apartment=\DB::table('properties')->where('category_id',5)->count();
                                    $plots=\DB::table('properties')->where('category_id',6)->orwhere('category_id',7)->count();
                                    $shop=\DB::table('properties')->where('category_id',9)->count();
                                    $office=\DB::table('properties')->where('category_id',10)->count();
                                    @endphp
                                    <span class="cactus-info font-size-1"><span> {{$rooms}} Items</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="channel-subscribe">
                            <div class="channel-picture">
                                <a href="/" title="TV Channel">
                                <img width="50" height="50"  src="{{ asset('images/single.jpg')}}" data-sizes="(max-width: 50px) 100vw, 50px" class="lazyload effect-fade" style="padding-top:100%;" alt="vp-show-02"/>
                                </a>
                            </div>
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/hostels/" title="Hostels">
                                    Hostels
                                    </a>
                                </h4>
                                <div class="posted-on metadata-font">
                                    <span class="cactus-info font-size-1"><span> {{$hostel}} Items</span></span>
                                    {{--<div class="cactus-info font-size-1"><i class="fas fa-eye"></i> 7705 views</div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="channel-subscribe">
                            <div class="channel-picture">
                                <a href="/" title="Movie Channel">
                                <img width="50" height="50"  src="{{ asset('images/single.jpg')}}"  data-sizes="(max-width: 50px) 100vw, 50px" class="lazyload effect-fade" style="padding-top:100%;" alt="vp-ms05"/>
                                </a>
                            </div>
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/houses/" title="Houses">
                                    Houses
                                    </a>
                                </h4>
                                <div class="posted-on metadata-font">
                                    <span class="cactus-info font-size-1"><span> {{$houses}} Items</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="channel-subscribe">
                            <div class="channel-picture">
                                <a href="/" title="Tech Channel">
                                <img width="50" height="50"  src="{{ asset('images/single.jpg')}}" data-sizes="(max-width: 50px) 100vw, 50px" class="lazyload effect-fade" style="padding-top:100%;" alt="vp-tech07"/>
                                </a>
                            </div>
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/apartment/" title="Tech Channel">
                                   Apartments
                                    </a>
                                </h4>
                                <div class="posted-on metadata-font">
                                    <span class="cactus-info font-size-1"><span> {{$apartment}} Items</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="channel-subscribe">
                            <div class="channel-picture">
                                <a href="/" title="Sport Channel">
                                <img width="50" height="50"  src="{{ asset('images/single.jpg')}}" data-sizes="(max-width: 50px) 100vw, 50px" class="lazyload effect-fade" style="padding-top:100%;" alt="vp-sp10"/>
                                </a>
                            </div>
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/plotsandland/" title="Land and Plots">
                                    Plots & Land
                                    </a>
                                </h4>
                                <div class="posted-on metadata-font">
                                    <span class="cactus-info font-size-1"><span> {{$plots}} Items</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="channel-subscribe">
                            <div class="channel-picture">
                                <a href="/" title="Sport Channel">
                                <img width="50" height="50"  src="{{ asset('images/single.jpg')}}" data-sizes="(max-width: 50px) 100vw, 50px" class="lazyload effect-fade" style="padding-top:100%;" alt="vp-sp10"/>
                                </a>
                            </div>
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/shop/" title="Shop">
                                    Shop
                                    </a>
                                </h4>
                                <div class="posted-on metadata-font">
                                    <span class="cactus-info font-size-1"><span> {{$shop}} Items</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="channel-subscribe">
                            <div class="channel-picture">
                                <a href="/" title="Sport Channel">
                                <img width="50" height="50"  src="{{ asset('images/single.jpg')}}" data-sizes="(max-width: 50px) 100vw, 50px" class="lazyload effect-fade" style="padding-top:100%;" alt="vp-sp10"/>
                                </a>
                            </div>
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/office/" title="Office">
                                    Office
                                    </a>
                                </h4>
                                <div class="posted-on metadata-font">
                                    <span class="cactus-info font-size-1"><span> {{$office}} items</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </aside>
            <aside id="videopro_categories-2" class=" style-2  widget videopro_widget_categories widget_casting">
            <style>#videopro_categories-2 .ct-sub-w-title{color:FFFFFF !important; background:FF0000 !important}</style>
            <div class="widget-inner">
                <h2 class="widget-title h4">Supermarket</h2>
                <div class="widget_casting_content widget-cat-style-icon">
                    <div class="post-metadata sp-style style-2 style-3">
                        <div class="channel-subscribe ">
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/supermarket" title="All">
                                    <i class="fas fa fa-gamepad"></i>
                                    All                        
                                    <span class="tt-number"></span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class="channel-subscribe ">
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/clothes/" title="KOMBAT">
                                    <i class="fas fa-shield-alt"></i>
                                    Colthes                        
                                    <span class="tt-number"></span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class="channel-subscribe ">
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/shoe/" title="Shoes">
                                    <i class="fas fa fa-play-circle"></i>
                                    Shoes                        
                                    <span class="tt-number"></span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class="channel-subscribe ">
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/phones/" title="Phones">
                                    <i class="fas fa fa-music"></i>
                                    Phones                        
                                    <span class="tt-number"></span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class="channel-subscribe ">
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/saloon/" title="Saloon">
                                    <i class="fas far fa-newspaper"></i>
                                    Saloon                        
                                    <span class="tt-number"></span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class="channel-subscribe ">
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/bags/" title="Bags">
                                    <i class="fas far fa-futbol"></i>
                                    Bags                        
                                    <span class="tt-number"></span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class="channel-subscribe ">
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/electronics/" title="Electronic">
                                    <i class="fas fa fa-location-arrow"></i>
                                    Electronics                      
                                    <span class="tt-number"></span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class="channel-subscribe ">
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/computers/" title="Computer">
                                    <i class="fas fa fa-leaf"></i>
                                    Computers                        
                                    <span class="tt-number"></span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class="channel-subscribe ">
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/drinks/" title="Drinks">
                                    <i class="fas fa fa-leaf"></i>
                                    Drinks                        
                                    <span class="tt-number"></span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class="channel-subscribe ">
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/utensils/" title="Utensils">
                                    <i class="fas fa fa-leaf"></i>
                                    Utensils                        
                                    <span class="tt-number"></span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class="channel-subscribe ">
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/beddings/" title="Beddings">
                                    <i class="fas fa fa-leaf"></i>
                                    Beddings                        
                                    <span class="tt-number"></span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class="channel-subscribe ">
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/scholastic/" title="School">
                                    <i class="fas fa fa-leaf"></i>
                                    Scholastics                        
                                    <span class="tt-number"></span>
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <aside id="actor-listing-2" class="small-padding dark-div style-4  widget widget_casting">
            <style>#actor-listing-2 .ct-sub-w-title{color:FFFFFF !important; background:17A015 !important}</style>
            <div class="widget-inner">
                <h2 class="widget-title h4" style="text-align:center;"><span>Agriculture Produce{{--<i class="ct-sub-w-title">HOT</i>--}}</span></h2>
                @php
                  $poultry=\DB::table('produces')->where('produce_category_id',1)->count();
                  $animals=\DB::table('produces')->where('produce_category_id',2)->count();
                  $cereals=\DB::table('produces')->where('produce_category_id',3)->count();
                  $root_tubers=\DB::table('produces')->where('produce_category_id',4)->count();
                  $legumes=\DB::table('produces')->where('produce_category_id',5)->count();
                  $vegetables=\DB::table('produces')->where('produce_category_id',6)->count();
                  $fruits=\DB::table('produces')->where('produce_category_id',7)->count();
                  $stem_tubers=\DB::table('produces')->where('produce_category_id',8)->count();
                @endphp
                <div class="widget_casting_content original-style">
                    <div class="post-metadata sp-style style-2 style-3">
                        <div class="channel-subscribe">
                            <div class="channel-picture">
                                <a href="/poultry/" title="Poultry">
                                <img width="50" height="50"  src="{{asset('/produce/guinea2.jpeg')}}" data-sizes="(max-width: 50px) 100vw, 50px" class="lazyload effect-fade" style="padding-top:100%;" alt="08-Trinity-Green"/>
                                </a>
                            </div>
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/poultry/" title="Poultry">Poultry</a>
                                </h4>
                                <span class="tt-number cactus-info font-size-1">{{$poultry}} Items</span>
                            </div>
                        </div>
                        <div class="channel-subscribe">
                            <div class="channel-picture">
                                <a href="/animals/" title="Animals">
                                <img width="50" height="50"  src="{{asset('/produce/rabits.jpeg')}}"  data-sizes="(max-width: 50px) 100vw, 50px" class="lazyload effect-fade" style="padding-top:100%;" alt="03-Alex-Johnson"/>
                                </a>
                            </div>
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/animals/" title="Animals">Animals</a>
                                </h4>
                                <span class="tt-number cactus-info font-size-1">{{$animals}} Items</span>
                            </div>
                        </div>
                        <div class="channel-subscribe">
                            <div class="channel-picture">
                                <a href="/cereals/" title="Cereals">
                                <img width="50" height="50"  src="{{asset('/produce/peass.jpeg')}}"  data-sizes="(max-width: 50px) 100vw, 50px" class="lazyload effect-fade" style="padding-top:100%;" alt="05-Dakota-Thomas"/>
                                </a>
                            </div>
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/cereals/" title="Cereals">Cereals</a>
                                </h4>
                                <span class="tt-number cactus-info font-size-1"> {{$cereals}} Items</span>
                            </div>
                        </div>
                        <div class="channel-subscribe">
                            <div class="channel-picture">
                                <a href="/roottubers/" title="Root Tubers">
                                <img width="50" height="50" src="{{asset('/produce/sweetpotaoes.jpeg')}}" data-sizes="(max-width: 50px) 100vw, 50px" class="lazyload effect-fade" style="padding-top:100%;" alt="07-Tyler-Allen"/>
                                </a>
                            </div>
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/roottubers/" title="Root Tubers">Root Tubers</a>
                                </h4>
                                <span class="tt-number cactus-info font-size-1">{{$root_tubers}} Items</span>
                            </div>
                        </div>
                        <div class="channel-subscribe">
                            <div class="channel-picture">
                                <a href="/legumes/" title="Legumes">
                                <img width="50" height="50" src="{{asset('/produce/gnuts.jpeg')}}" data-sizes="(max-width: 50px) 100vw, 50px" class="lazyload effect-fade" style="padding-top:100%;" alt="06-Daniel-Walker"/>
                                </a>
                            </div>
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/legumes/" title="Legumes">Legumes</a>
                                </h4>
                                <span class="tt-number cactus-info font-size-1">{{$legumes}} Items</span>
                            </div>
                        </div>
                        <div class="channel-subscribe">
                            <div class="channel-picture">
                                <a href="/vegetables/" title="Vegetables">
                                <img width="50" height="50" src="{{asset('/produce/redchilli.jpeg')}}" data-sizes="(max-width: 50px) 100vw, 50px" class="lazyload effect-fade" style="padding-top:100%;" alt="02-kayla-miller"/>
                                </a>
                            </div>
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/vegetables/" title="Vegetables">Vegetables</a>
                                </h4>
                                <span class="tt-number cactus-info font-size-1">{{$vegetables}} Items</span>
                            </div>
                        </div>
                        <div class="channel-subscribe">
                            <div class="channel-picture">
                                <a href="/fruits" title="Fruits">
                                <img width="50" height="50" src="{{asset('/produce/mango.jpeg')}}" data-sizes="(max-width: 50px) 100vw, 50px" class="lazyload effect-fade" style="padding-top:100%;" alt="04-Alyssa-Moore"/>
                                </a>
                            </div>
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/fruits" title="Fruits">Fruits</a>
                                </h4>
                                <span class="tt-number cactus-info font-size-1">{{$fruits}} Items</span>
                            </div>
                        </div>
                        <div class="channel-subscribe">
                            <div class="channel-picture">
                                <a href="/stem-tubers" title="Stem Tubers">
                                <img width="50" height="50" src="{{asset('/produce/cane3.jpeg')}}" data-sizes="(max-width: 50px) 100vw, 50px" class="lazyload effect-fade" style="padding-top:100%;" alt="04-Alyssa-Moore"/>
                                </a>
                            </div>
                            <div class="channel-content">
                                <h4 class="channel-title h6">
                                    <a href="/stemtubers" title="Stem Tubers">Stem Tubers</a>
                                </h4>
                                <span class="tt-number cactus-info font-size-1">{{$stem_tubers}} Items</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <aside id="text-4" class="small-padding white-div style-4  widget widget_text">
            <style>#text-4 .ct-sub-w-title{color:FFFFFF !important; background:FFFFFF !important}</style>
            <div class="widget-inner">
                <h2 class="widget-title h4"><a href="/agricultureequipments/">Agricultural Equipements</a></h2>
                <div class="textwidget">
                    <img style="height:200px; width:250px;" src="{{asset('/produce/sprayer.jpeg')}}">
                    <p><a href="/agricultureequipments/" title="BUY NOW" id="cactus-btn-232"  class="btn btn-default bt-style-1">BUY NOW</a></p>
                </div>
            </div>
        </aside>
        <aside id="text-23" class="   widget widget_text">
            <style>#text-23 .ct-sub-w-title{color:FFFFFF !important; background:FF0000 !important}</style>
            <div class="widget-inner">
                <div class="textwidget">
                    <div style="text-align:center"><a href="/agricultureequipments/" title="VideoPro Sample Banner"><img src="{{ asset('wp-content/uploads/2016/05/banner-2.jpg')}}" alt="Ad banner"></a></div>
                </div>
            </div>
        </aside>
    </div>
</div>