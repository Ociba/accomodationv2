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
        <!--loader-->
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
                                                <a itemprop="item" href="/" rel="v:url" property="v:title">
                                                <span itemprop="name">Home</span></a><i class="fas fa-angle-right" aria-hidden="true"></i>
                                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="current">
                                                <span itemprop="name">{{request()->route()->getName()}}</span><meta itemprop="position" content="2" /></li></ol>
                                                <!-- .breadcrumbs -->
                                                    @include('layouts.messages')
                                                    <!--Single Page Content-->  
                                                    <article id="post-1508" class="post-1508 page type-page status-publish cactus-single-content">
                                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1469088724328 vc_row-has-fill">
                                                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                                                            @if ($message = Session::get('success'))
                                                                <div class="p-4 mb-3 bg-green-400 rounded">
                                                                    <p class="text-green-800">{{ $message }}</p>
                                                                </div>
                                                            @endif
                                                            @php
                                                            $locations =\DB::table('users')->join('locations','locations.id','users.location_id')
                                                            ->where('users.id',auth()->user()->id)->value('locations.location');
                                                            @endphp
                                                                <div class="vc_column-inner vc_custom_1469092997733"><div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1469094242775" >
                                                                <div class="wpb_wrapper" style="overflow-x:auto;">
                                                                <span style="color:blue;"><i class="fa fa-user"></i> {{auth()->user()->name}} | {{auth()->user()->contact}} | {{$locations}}</span>
                                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                        <th>NAME</th>
                                                        <th>Item</th>
                                                        <th>Quantity</th>
                                                        <th>Price</th>
                                                        </tr>
                                                        @foreach($cartItems as $item)
                                                        <tr>
                                                        <td>{{$item->name}}</td>
                                                        <td><img src="/super_market_photos/{{ $item->attributes->image }}"></td>
                                                        <td>{{$item->quantity}}</td>
                                                        <td>{{ number_format($item->quantity *$item->price)}}</td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                        </table>

                                                                </div>
                                                            </div>
                                                        </div></div></div></div><br><br>
                                                        @php
                                                            $transport_amount =\DB::table('users')->join('locations','locations.id','users.location_id')
                                                            ->where('users.id',auth()->user()->id)->value('locations.transport_amount');
                                                        @endphp
                                                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1469089899584 vc_row-has-fill">
                                                            <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                                                                <div class="vc_column-inner vc_custom_1469089852378">
                                                                    <div class="wpb_wrapper">
                                                                        <form action="/save-order" method="get">
                                                                            @csrf
                                                                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">
                                                                            @foreach ($cartItems as $item)   
                                                                            <input type="hidden" name="item_id" value="{{$item->id}}" class="form-control">
                                                                            <input type="hidden" name="item_name" value="{{$item->name}}" class="form-control">
                                                                            <input type="hidden" name="price" value="{{$item->price}}" class="form-control">
                                                                            <input type="hidden" name="quantity" value="{{$item->quantity}}" class="form-control">
                                                                            @endforeach
                                                                            <button title="Send Order" type="submit" id="cactus-btn-6166"  class="btn btn-default bt-style-2">Submit Order Now</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                                                                <div class="vc_column-inner vc_custom_1469089860166">
                                                                    <div class="wpb_wrapper">
                                                                        <a href="/logout" title="Logout Your Account    " id="cactus-btn-493"  class="btn btn-default bt-style-1">Logout</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                                                                <div class="vc_column-inner vc_custom_1469089860166">
                                                                    <div class="wpb_wrapper">
                                                                    <span title="Your Amount" id="cactus-btn-493"  class="btn btn-defaul bt-style-1"><strong>Subtotal Ugx: {{ number_format(Cart::getTotal()) }}</strong></span><br>
                                                                    <span title="Your Amount" id="cactus-btn-493"  class="btn btn-defaul bt-style-1"><strong>Transport Ugx: {{ number_format($transport_amount) }}</strong></span><br>
                                                                        <span title="Your Amount" id="cactus-btn-493"  class="btn btn-defaul bt-style-1"><strong>Total Amount Ugx: {{ number_format(Cart::getTotal() + $transport_amount) }}</strong></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{--@livewire('place-order')--}}
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
                                                                                                            <div class="cactus-note font-size-1"><span>{{$items->item}}</span></div>
                                                                                                            <div class="cactus-note ct-time font-size-1"><span>jjoome</span></div>
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
                                                                                                            <div class="cactus-note font-size-1"><span>{{$equipment->equipment}}</span></div>
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