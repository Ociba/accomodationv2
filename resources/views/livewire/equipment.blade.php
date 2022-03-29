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
    <link rel="stylesheet" href="{{ asset('css/tailwind.css')}}" />
<div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1466563983427">
                <div class="wpb_wrapper">
                    <div class="cactus-listing-wrap cactus-contents-block style-1">
                        <div class="control-header">
                            <h2 class="block-title">Your Agriculture Equipments</h2>
                            {{--<div class="prev-next-slider elms-right">
                                <a href="#" class="btn btn-default ct-gradient bt-action metadata-font font-size-1 icon-smart control-prev"><i class="fa fa-angle-left"></i></a>
                                <a href="#" class="btn btn-default ct-gradient bt-action metadata-font font-size-1 icon-smart control-next"><i class="fa fa-angle-right"></i></a>
                            </div>--}}
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1469089899584 vc_col-sm-12 vc_row-has-fill">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1469089852378">
                        <div class="wpb_wrapper">
                            Show More Agriculture Equipments
                            <span class="wpcf7-form-control-wrap your-email">
                                <select class="form-control" wire:model="per_page">
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                    <option>40</option>
                                    <option>50</option>
                                    <option>60</option>
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
                {{--<div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1469089860166">
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1469089860166">
                        <div class="wpb_wrapper">
                            <span title="" id="cactus-btn-493"  class="btn btn-defaul bt-style-1">
                            Search By Location
                            <span class="wpcf7-form-control-wrap your-email">
                            <p>
                                <span class="wpcf7-form-control-wrap email-719">
                                    <input type="email" value="" size="40" placeholder="Type Location Here" wire:model="searchTerm" />
                                </span>
                            </p>
                            </span>
                        </span>
                        </div>
                    </div>
                </div>--}}
            </div>
            <div class="channel-menu">
                <div class="channel-menu-content">
                    
                </div>
            </div>
                        <div class="block-wrap ajax-container active tab-active" data-filter="0" data-paged="1">
                            <div class="cactus-listing-config style-2">
                                <!--addClass: style-1 + (style-2 -> style-n)-->
                                <div class="cactus-sub-wrap">
                                    <!--item listing-->  
                                    @foreach($equipments as $equipment)                                              
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
                                                    <div class="cactus-note ct-time font-size-1"><span>{{$equipment->quantity}}</span></div>
                                                    <a href="#" title="Watch Later" class="btn btn-default video-tb icon-only font-size-1 btn-watch-later" data-id="191"><i class="fas fa-clock"></i></a>
                                                </div>
                                            </div>
                                            <!--picture-->
                                            <div class="content text-center">
                                                <!--Title (no title remove)-->
                                                <h3 class="cactus-post-title entry-title h4"> 
                                                    {{$equipment->description}}
                                                </h3>
                                                <div class="posted-on metadata-font">
                                                    <div class="cactus-info font-size-4" style="color:blue; font-weight:bold;"><span>Ugx: {{$equipment->price}}</span></div>
                                                </div>
                                                <div class="posted-on metadata-font">
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
                                <div class="channel-menu" style="margin-top:15px;">
                                    <div class="channel-menu-content">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                   {{$equipments->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</div>