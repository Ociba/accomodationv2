<style>
    .mb-1 {
    margin-top:5px;
    }
</style>
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
                                @foreach($get_discount_items as $discount_items)                                               
                                <article class="cactus-post-item">
                                    <div class="entry-content">
                                    @php
                                        $percentage_discount =\DB::table('supermarkets')->where('id',$discount_items->id)->value('discount');
                                        $original_price =\DB::table('supermarkets')->where('id',$discount_items->id)->value('price');
                                        $actual_percentage_discount =($percentage_discount * 0.01);

                                        $calculate_discount =$original_price * $actual_percentage_discount;

                                        $new_price =$original_price-$calculate_discount;
                                    @endphp
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                    <img width="636" style="height:300px;"  data-src="{{ asset('super_market_photos/'.$discount_items->photo)}}" data-sizes="(max-width: 636px) 100vw, 636px" class="lazyload effect-fade"  style="padding-top:56.289308176101%;" alt="vp-sp01"/>			
                                                    <div class="ct-icon-video">
                                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $discount_items->id }}" name="id">
                                                            <input type="hidden" value="{{ $discount_items->item }}" name="name">
                                                            <input type="hidden" value="{{ $discount_items->new_price }}" name="price">
                                                            <input type="hidden" value="{{ $discount_items->photo }}"  name="image">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <div class="col-xs-12">
                                                                <button class="btn btn-primary mb-1" style="padding:5px; background-color:#000066; color:#ffffff;"> Add To Cart</button>
                                                                {{--<a href="/cart" class="btn btn-warning mb-1" style="color:#ffffff; padding:5px;">View Cart</a>--}}
                                                            </div>
                                                        </form>		
                                                    </div>
                                                    <div class="badges-group">
                                                        <div class="badges-item">
                                                            <img src="{{ asset('wp-content/uploads/2016/05/12-015-Video-Badges_03.png')}}" alt="">
                                                            <span style="color:blue;">{{$discount_items->discount}} %</span>
                                                        </div>
                                                    </div>
                                                <div class="content content-absolute-bt">
                                                    <!--Title (no title remove)-->
                                                    <h3 class="cactus-post-title entry-title h4"> 
                                                        <span>{{$discount_items->item}} | {{$discount_items->description}}</span><br>
                                                        <span>sh. <del>{{ number_format($discount_items->price)}}</del> | sh. {{ number_format($new_price)}}</span>
                                                    </h3>
                                                    <!--Title-->
                                                    <div class="posted-on metadata-font">
                                                        <div class="cactus-info font-size-1">
                                                        <span>
                                                            
                                                        </span>
                                                        </div>
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