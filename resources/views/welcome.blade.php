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
                @include('layouts.slider')  
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
                                                <h2 class="hidden-title">SuperMarket</h2>
                                                <div class="single-page-content single-content">
                                                    <!--Single Page Content-->
                                                    <article id="post-1508" class="post-1508 page type-page status-publish cactus-single-content">
                                                        <div class="body-content">
                                                            <!--Content-->
                                                            <div class="vc_row wpb_row vc_row-fluid">
                                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                    <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="cactus-listing-wrap cactus-contents-block style-1 is_border">
                                                                                <div class="control-header">
                                                                                    <h2 class="block-title">{{request()->route()->getName()}}</h2>
                                                                                    <div class="view-sortby metadata-font font-size-1 ct-gradient elms-right">
                                                                                        <span style="color:blue;"><i class="fa fa-clock"></i> {{  date('l,jS F, Y') }} | {{  date("H:i:s")}} </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="block-wrap ajax-container active tab-active" data-filter="0" data-paged="1">
                                                                                    <div class="cactus-listing-config style-2">
                                                                                        <!--addClass: style-1 + (style-2 -> style-n)-->
                                                                                        <div class="cactus-sub-wrap">
                                                                                            <!--item listing--> 
                                                                                            @foreach($get_accomodation as $property)                                               
                                                                                            <article class="cactus-post-item">
                                                                                                <div class="entry-content">
                                                                                                    <!--picture (remove)-->
                                                                                                    <div class="picture">
                                                                                                        <div class="picture-content">
                                                                                                            <a href="/" target="_self" title="Little Night Music In Perth Contemporary">
                                                                                                                <img 
                                                                                                                data-src="{{ asset('/property_photos/'.$property->photo)}}" style="height:145px;"
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
                                                                                                            <div class="cactus-note font-size-1"><i class="fa fa-thumbs-up"></i><span>2</span></div>
                                                                                                            <a href="#" title="Watch Later" class="btn btn-default video-tb icon-only font-size-1 btn-watch-later" data-id="1570"><i class="fas fa-clock"></i></a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--picture-->
                                                                                                    <div class="content">
                                                                                                        <!--Title (no title remove)-->
                                                                                                        <h3 class="cactus-post-title entry-title h4"> 
                                                                                                            {{$property->description}}    
                                                                                                        </h3>
                                                                                                        <!--Title-->
                                                                                                        <div class="posted-on metadata-font text-center">
                                                                                                            <div class="cactus-info font-size-4">{{$property->category_name}} | {{$property->location}}</div>
                                                                                                        </div>
                                                                                                        <div class="posted-on metadata-font text-center">
                                                                                                            <div class="cactus-info font-size-4"><span style="color:blue; font-weight:bold;"> Ugx: {{ number_format($property->price)}}</span></div>
                                                                                                        </div>
                                                                                                        <div class="posted-on metadata-font">
                                                                                                        <div class="share-tool-block like-button _check-like-id-344 login-to-vote" data-like="like" data-unlike="dislike">
                                                                                                            <div class='watch-action'>
                                                                                                                    <div class='watch-position align-left'>
                                                                                                                        <div class='action-like'>
                                                                                                                        <a class='lbg-style1 like-344 jlk' href='javascript:void(0)' data-task='like' data-post_id='344' data-nonce='79afb76e2c' rel='nofollow'>
                                                                                                                        <button class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> view Contact</button>                                                       
                                                                                                                        </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                            </div>
                                                                                                            <div class='wti-clear'></div>               
                                                                                                            <div class="login-msg">
                                                                                                                <div class="login-content">
                                                                                                                    <span class="login-info">
                                                                                                                        <strong><i class="fa fa-phone-volume"></i> {{$property->contact}}</strong>                        
                                                                                                                    </span>
                                                                                                                </span>
                                                                                                                </div>
                                                                                                            </div>
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
                                                            <div class="vc_row wpb_row vc_row-fluid">
                                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                    <div class="vc_column-inner vc_custom_1466563983427">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="cactus-listing-wrap cactus-contents-block style-1 is_border">
                                                                                <div class="control-header">
                                                                                    <h2 class="block-title">Your Supermarket</h2>
                                                                                    <div class="prev-next-slider elms-right">
                                                                                        <a href="#" class="btn btn-default ct-gradient bt-action metadata-font font-size-1 icon-smart control-prev"><i class="fa fa-angle-left"></i></a>
                                                                                        <a href="#" class="btn btn-default ct-gradient bt-action metadata-font font-size-1 icon-smart control-next"><i class="fa fa-angle-right"></i></a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="block-wrap ajax-container active tab-active" data-filter="0" data-paged="1">
                                                                                    <div class="cactus-listing-config style-2">
                                                                                        <!--addClass: style-1 + (style-2 -> style-n)-->
                                                                                        <div class="cactus-sub-wrap">
                                                                                            <!--item listing-->  
                                                                                            @foreach($supermarket_items as $items)                                              
                                                                                            <article class="cactus-post-item">
                                                                                                <div class="entry-content">
                                                                                                    <!--picture (remove)-->
                                                                                                    <div class="picture">
                                                                                                        <div class="picture-content">
                                                                                                            <a href="/" target="_self" title="Hendrix Official Lorem Ipsum Music">
                                                                                                                <img 
                                                                                                                data-src="{{ asset('super_market_photos/'.$items->photo)}}" style="height:150px;"
                                                                                                                
                                                                                                                data-sizes="(max-width: 480px) 100vw, (max-width: 767px) 340px, (max-width: 1040px) 192px, (min-width: 1280px) and (max-width: 1600px) 320px, 407px"
                                                                                                                alt="vp-ms01"
                                                                                                                class="feature-image-first-index lazyload effect-fade"	
                                                                                                                width="407" 
                                                                                                                height="229" 
                                                                                                                style="padding-top:56.265356265356%;"												
                                                                                                                />
                                                                                                            </a>
                                                                                                            <div class="cactus-note font-size-1"><i class="fa fa-thumbs-up"></i><span>{{$items->item}}</span></div>
                                                                                                            <div class="cactus-note ct-time font-size-1"><span></span></div>
                                                                                                            <a href="#" title="Watch Later" class="btn btn-default video-tb icon-only font-size-1 btn-watch-later" data-id="191"><i class="fas fa-clock"></i></a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--picture-->
                                                                                                    <div class="content">
                                                                                                        <!--Title (no title remove)-->
                                                                                                        <h3 class="cactus-post-title entry-title h4"> 
                                                                                                           {{$items->description}}
                                                                                                        </h3>
                                                                                                        <div class="posted-on metadata-font text-center">
                                                                                                            <div class="cactus-info font-size-4" style="color:blue; font-weight:bold;"><span>Ugx: {{ number_format($items->price)}}</span></div>
                                                                                                        </div>
                                                                                                        <div class="posted-on metadata-font text-center">
                                                                                                            <div class="cactus-info font-size-1">
                                                                                                            <span>
                                                                                                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                                                                                @csrf
                                                                                                                <input type="hidden" value="{{ $items->id }}" name="id">
                                                                                                                <input type="hidden" value="{{ $items->item }}" name="name">
                                                                                                                <input type="hidden" value="{{ $items->price }}" name="price">
                                                                                                                <input type="hidden" value="{{ $items->photo }}"  name="image">
                                                                                                                <input type="hidden" value="1" name="quantity">
                                                                                                                <div class="col-xs-12">
                                                                                                                    <button class="btn btn-primary mb-1" style="padding:5px;">Add To Cart</button>
                                                                                                                    <a href="/cart" class="btn btn-warning" style="color:#ffffff; padding:7px;">View Cart</a>
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
                                                            @include('layouts.agric-produce')
                                                            <div class="vc_row wpb_row vc_row-fluid">
                                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                    <div class="vc_column-inner vc_custom_1466563983427">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="cactus-listing-wrap cactus-contents-block style-1">
                                                                                <div class="control-header">
                                                                                    <h2 class="block-title">Your Agriculture Equipment</h2>
                                                                                    <div class="prev-next-slider elms-right">
                                                                                        <a href="#" class="btn btn-default ct-gradient bt-action metadata-font font-size-1 icon-smart control-prev"><i class="fa fa-angle-left"></i></a>
                                                                                        <a href="#" class="btn btn-default ct-gradient bt-action metadata-font font-size-1 icon-smart control-next"><i class="fa fa-angle-right"></i></a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="block-wrap ajax-container active tab-active" data-filter="0" data-paged="1">
                                                                                    <div class="cactus-listing-config style-2">
                                                                                        <!--addClass: style-1 + (style-2 -> style-n)-->
                                                                                        <div class="cactus-sub-wrap">
                                                                                            <!--item listing-->  
                                                                                            @foreach($equipment_items as $equipment)                                              
                                                                                            <article class="cactus-post-item">
                                                                                                <div class="entry-content">
                                                                                                    <!--picture (remove)-->
                                                                                                    <div class="picture">
                                                                                                        <div class="picture-content">
                                                                                                            <a href="/" target="_self" title="Hendrix Official Lorem Ipsum Music">
                                                                                                                <img 
                                                                                                                data-src="{{ asset('super_market_photos/'.$equipment->photo)}}" style="height:150px;"
                                                                                                                
                                                                                                                data-sizes="(max-width: 480px) 100vw, (max-width: 767px) 340px, (max-width: 1040px) 192px, (min-width: 1280px) and (max-width: 1600px) 320px, 407px"
                                                                                                                alt="vp-ms01"
                                                                                                                class="feature-image-first-index lazyload effect-fade"	
                                                                                                                width="407" 
                                                                                                                height="229" 
                                                                                                                style="padding-top:56.265356265356%;"												
                                                                                                                />
                                                                                                            </a>
                                                                                                            <div class="cactus-note font-size-1"><i class="fa fa-thumbs-up"></i><span>{{$equipment->equipment}}</span></div>
                                                                                                            <div class="cactus-note ct-time font-size-1"><span>jjoome</span></div>
                                                                                                            <a href="#" title="Watch Later" class="btn btn-default video-tb icon-only font-size-1 btn-watch-later" data-id="191"><i class="fas fa-clock"></i></a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--picture-->
                                                                                                    <div class="content">
                                                                                                        <!--Title (no title remove)-->
                                                                                                        <h3 class="cactus-post-title entry-title h4"> 
                                                                                                           {{$equipment->description}}
                                                                                                        </h3>
                                                                                                        <div class="posted-on metadata-font text-center">
                                                                                                            <div class="cactus-info font-size-4" style="color:blue; font-weight:bold;"><span>Ugx: {{$equipment->price}}</span></div>
                                                                                                        </div>
                                                                                                        <div class="posted-on metadata-font text-center">
                                                                                                            <div class="cactus-info font-size-1">
                                                                                                                <span>
                                                                                                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                                                                                @csrf
                                                                                                                <input type="hidden" value="{{ $equipment->id }}" name="id">
                                                                                                                <input type="hidden" value="{{ $equipment->equipment }}" name="name">
                                                                                                                <input type="hidden" value="{{ $equipment->price }}" name="price">
                                                                                                                <input type="hidden" value="{{ $equipment->photo }}"  name="image">
                                                                                                                <input type="hidden" value="1" name="quantity">
                                                                                                                <div class="col-xs-12">
                                                                                                                    <button class="btn btn-primary mb-1" style="padding:5px;">Add To Cart</button>
                                                                                                                    <a href="/cart" class="btn btn-warning" style="color:#ffffff; padding:7px;">View Cart</a>
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
    </body>
</html>