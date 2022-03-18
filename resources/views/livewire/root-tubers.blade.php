
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
    <div class="main-content-col single-channel">
        <div class="main-content-col-body">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1469089899584 vc_col-sm-12 vc_row-has-fill">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1469089852378">
                        <div class="wpb_wrapper">
                            Show More RootTubers
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
            <div class="cactus-listing-wrap switch-view-enable">
                <div class="cactus-listing-config style-2 style-channel-listing">
                    <!--addClass: style-1 + (style-2 -> style-n)-->
                    <div class="cactus-sub-wrap">
                    @foreach($root_tubers as $tubers) 
                        
                        <article class="cactus-post-item hentry">
                            <div class="entry-content">
                                <!--picture (remove)-->
                                <div class="picture">
                                    <div class="picture-content screenshots-preview-inlin" data-post-id="1570">
                                        <a href="/" target="_self"  title=" 1 tubers in Agip,Soroti, ugx:150,000 Per Month">
                                            <div class="screenshots"><img style="height:150px; width: 636px;"
                                                src="{{ asset('produce_photos/'.$tubers->image)}}"
                                                data-sizes="(max-width: 636px) 100vw, 636px"
                                                alt="vp-show-06"
                                                class="feature-image-first-index lazyload effect-fade"
                                                style="padding-top:56.289308176101%;"
                                                />
                                                </div>
                                            <div class="badges-group">
                                                <div class="badges-item">
                                                    <img src="../../wp-content/uploads/2016/05/12-015-Video-Badges_03.png" alt=" 1 tubers in Agip,Soroti, ugx:150,000 Per Month">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="cactus-note font-size-1"><i class="fas fa-thumbs-up"></i><span>2</span></div>
                                        <a href="#" title="Watch Later" class="btn btn-default video-tb icon-only font-size-1 btn-watch-later" data-id="1570"><i class="fas fa-clock"></i></a>
                                    </div>
                                </div>
                                <!--picture-->
                                <div class="content" style="text-align:center;">
                                    <!--Title (no title remove)-->
                                    <h3 class="cactus-post-title entry-title h4"> 
                                        <span style="color:#333399;"> {{$tubers->produce_name}}</span> | {{$tubers->quantity}} <br> ugx:{{$tubers->price}}
                                    </h3>
                                    <!--Title-->
                                    <!--excerpt (remove)-->
                                    <div class="excerpt sub-lineheight" >
                                          <i class="fas fa-map-marker-alt"></i>  {{$tubers->address}}<br>
                                          <div class="share-tool-block like-button _check-like-id-344 login-to-vote" data-like="like" data-unlike="dislike">
                                               <button class="btn btn-primary" style="background-color:#000066; color:#ffffff; padding:5px;"><i class="fa fa-eye"></i> view Contact</button>
                                            <div class='wti-clear'></div>               
                                             <div class="login-msg">
                                                <div class="login-content" style="text-align:center;">
                                                    <span class="login-info">
                                                        <strong><i class="fa fa-phone-volume"></i> {{$tubers->phone_number}}</strong>                        
                                                    </span>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--excerpt-->   
                                </div>
                            </div>
                        </article>
                        @endforeach
                        <!--item listing-->
                    </div>
                    <div class="row">
                       {{$root_tubers->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</div>