<div>
<style>
        .mb-1 {
        margin-top:5px;
        }
        .mt-0 {
        margin-top:-100px;
        }
        .btn-primary{
            background-color:#000066;
            color:#ffffff;
        }
    </style>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/tailwind.css')}}" /><div class="body-content">
<!--Content-->
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="cactus-listing-wrap cactus-contents-block style-1 is_border" data-url="#" data-shortcode="{&quot;title&quot;:&quot;Music Videos&quot;,&quot;parent_column_size&quot;:&quot;12&quot;,&quot;number&quot;:&quot;6&quot;,&quot;items_per_page&quot;:&quot;6&quot;,&quot;show_datetime&quot;:&quot;0&quot;,&quot;show_author&quot;:&quot;0&quot;,&quot;videoplayer_lightbox&quot;:&quot;1&quot;,&quot;cats&quot;:&quot;music&quot;,&quot;totalPage&quot;:1,&quot;itemEndPage&quot;:&quot;6&quot;}" data-total-pages="1" data-last-page-items="6" data-filter="0" data-query="{&quot;post_type&quot;:&quot;post&quot;,&quot;posts_per_page&quot;:&quot;6&quot;,&quot;post_status&quot;:&quot;publish&quot;,&quot;ignore_sticky_posts&quot;:1,&quot;order&quot;:&quot;DESC&quot;,&quot;category_name&quot;:&quot;music&quot;}" data-query-class="">
                    <div class="control-header">
                        <h2 class="block-title">{{request()->route()->getName()}}</h2>
                        <label for="search">Search BY Name,Price</label>
                        <input type="text" class="input" placeholder="search" wire:model="searchTerm" size="20">
                    </div>
                    <div class="block-wrap ajax-container active tab-active" data-filter="0" data-paged="1">
                        <div class="cactus-listing-config style-2">
                            <!--addClass: style-1 + (style-2 -> style-n)-->
                            <div class="cactus-sub-wrap">
                                <!--item listing-->                                                
                                <!--item listing-->  
                                @foreach($phones as $phone)                                              
                                <article class="cactus-post-item">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <a href="/" target="_self" title="phones">
                                                    <img 
                                                        data-src="{{ asset('super_market_photos/'.$phone->photo)}}" style="height:250px;"
                                                        data-sizes="(max-width: 480px) 100vw, (max-width: 767px) 340px, (max-width: 1040px) 192px, (min-width: 1280px) and (max-width: 1600px) 320px, 407px"
                                                        alt="vp-show-06"
                                                        class="feature-image-first-index lazyload effect-fade"	
                                                        width="407" 
                                                        height="229" 
                                                        style="padding-top:56.265356265356%;"												
                                                        />
                                                    <div class="badges-group">
                                                        <div class="badges-item">
                                                            <img src="{{ asset('wp-content/uploads/2016/05/12-015-Video-Badges_03.png')}}" alt="Little Night Music In Perth Contemporary">
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="cactus-note font-size-1"><span>{{$phone->item}}</span></div>
                                                <a href="#" title="Watch Later" class="btn btn-default video-tb icon-only font-size-1 btn-watch-later" data-id="1570"><i class="fas fa-clock"></i></a>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content text-center">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                {{$phone->description}}   
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font text-center">
                                                <div class="cactus-info font-size-4" style="color:blue; font-weight:bold;"><span>Ugx: {{ number_format($phone->price)}}</span></div>
                                            </div>
                                            <div class="posted-on metadata-font text-center">
                                            <div class="cactus-info font-size-1">
                                                    <span>
                                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $phone->id }}" name="id">
                                                            <input type="hidden" value="{{ $phone->item }}" name="name">
                                                            <input type="hidden" value="{{ $phone->price }}" name="price">
                                                            <input type="hidden" value="{{ $phone->photo }}"  name="image">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <div class="col-xs-12">
                                                                <button class="btn btn-primary mb-1" style="padding:5px;"><i class="fas fa-plus"></i> Add To Cart</button>
                                                                <a href="/cart" class="btn btn-warning mb-1" style="color:#ffffff; padding:5px;">View Cart</a>
                                                            </div>
                                                        </form>
                                                    </span>
                                                </div>
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
        </div>
    </div>
</div>
    <!--Content-->
    <div class="entry-footer">
    </div>
    <!-- .entry-footer -->
</div>
<div class="row mb-1">
      {{$phones->links()}}
    </div>
    @livewireScripts
</div>