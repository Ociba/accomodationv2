<div class="main-top-sidebar-wrap">
    <aside id="text-14" class="   widget body-widget widget_text">
        <style>#text-14 .ct-sub-w-title{color:FFFFFF !important; background:FF0000 !important}</style>
        <div class="body-widget-inner widget-inner">
            <div class="textwidget">
                <div class="ct-shortcode-sliderv3 sliderv5 dark-div carousel-v1" data-autoplay="1" data-item="">
                    <div class="prev-slide"><i class="fa fa-angle-left"></i></div>
                    <div class="next-slide"><i class="fa fa-angle-right"></i></div>
                    <div class="cactus-listing-wrap">
                        <div class="cactus-listing-config  style-2">
                            <!--addClass: style-1 + (style-2 -> style-n)-->
                            <div class="cactus-sub-wrap">
                                <!--item listing-->    
                                @foreach($get_accomodation_with_discount as $discount)                                            
                                <article class="cactus-post-item">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <a href="/" target="_self" title="House of Your Sleep Dreams">
                                                    <img width="636" height="358"  src="{{ asset('/property_photos/'.$discount->photo)}}" data-sizes="(max-width: 636px) 100vw, 636px" class="lazyload effect-fade"  style="padding-top:56.289308176101%;" alt="vp-sp01"/>			
                                                      
                                                    <div class="badges-group">
                                                        <div class="badges-item">
                                                            <img src="{{ asset('advert/joome12.jpg')}}" style="height:30px;" alt="House of Your Sleep Dreams">
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="content content-absolute-bt">
                                                    <!--Title (no title remove)-->
                                                    <h3 class="cactus-post-title entry-title h4"> 
                                                        <a href="/" target="_self" title="House of Your Sleep Dreams">Size:{{$discount->property_size}}|Rooms:{{$discount->bedroom}}| Garage: {{$discount->garage}}|<br>Batherooms: {{$discount->bathroom}} | Location: {{$discount->location}}|For: {{$discount->property_status}}</a>
                                                    </h3>
                                                    <!--Title-->
                                                    <div class="posted-on metadata-font">
                                                        <a href="h" class="author cactus-info font-size-1"><span style="color:blue; font-weight:bold; font-size:18px;">Shs. <del>{{number_format($discount->price)}}</del> </span></a>
                                                        <div class="date-tim cactus-inf font-size-1" ><a href="/" target="_self" class="cactus-inf" rel="bookmark"><time datetime="2016-05-27T04:27:36+00:00" class="entry-date updated" style="color:blue; font-weight:bold; font-size:18px;">shs. {{number_format($discount->discount_price)}} |   {{$discount->contact}}</time></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--picture-->
                                    </div>
                                </article>
                                @endforeach
                                <!--item listing-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>