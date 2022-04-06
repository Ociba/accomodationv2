<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="cactus-listing-wrap cactus-contents-block style-1 is_border">
                    <div class="control-header">
                        <h2 class="block-title">Agriculture Products</h2>
                        {{--<div class="view-sortby metadata-font font-size-1 ct-gradient elms-right">
                            <span class="cur-item" data-filter="0" >Search</span>
                            <i class="fa fa-search"></i>
                        </div>--}}
                    </div>
                    <div class="block-wrap ajax-container active tab-active" data-filter="0" data-paged="1">
                        <div class="cactus-listing-config style-2">
                            <!--addClass: style-1 + (style-2 -> style-n)-->
                            <div class="cactus-sub-wrap">
                                <!--item listing-->     
                                @foreach($produce as $production)                                           
                                <article class="cactus-post-item">
                                    <div class="entry-content">
                                        <!--picture (remove)-->
                                        <div class="picture">
                                            <div class="picture-content">
                                                <a href="/" target="_self" title="Little Night Music In Perth Contemporary">
                                                    <img 
                                                    data-src="{{ asset('produce_photos/'.$production->image)}}" style="height:145px;"
                                                    data-sizes="(max-width: 480px) 100vw, (max-width: 767px) 340px, (max-width: 1040px) 192px, (min-width: 1280px) and (max-width: 1600px) 320px, 407px"
                                                    alt="vp-show-06"
                                                    class="feature-image-first-index lazyload effect-fade"	
                                                    width="407" 
                                                    height="229" 
                                                    style="padding-top:56.265356265356%;"												
                                                    />
                                                    <div class="badges-group">
                                                        <div class="badges-item">
                                                            <img src="{{ asset('advert/joome12.jpg')}}" style="height:40px;" alt="Little Night Music In Perth Contemporary">
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="cactus-note font-size-1"><span>jjoome</span></div>
                                                <a href="#" title="Watch Later" class="btn btn-default video-tb icon-only font-size-1 btn-watch-later" data-id="1570"><i class="fas fa-clock"></i></a>
                                            </div>
                                        </div>
                                        <!--picture-->
                                        <div class="content" style="text-align:center;">
                                            <!--Title (no title remove)-->
                                            <h3 class="cactus-post-title entry-title h4"> 
                                                {{$production->produce_name}}  | {{$production->address}}   
                                            </h3>
                                            <!--Title-->
                                            <div class="posted-on metadata-font text-center">
                                                <div class="cactus-info font-size-4" style="color:blue; font-weight:bold;"><span>Ugx: {{$production->price}}</span></div>
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
                                                            <strong><i class="fa fa-phone-volume"></i> {{$production->phone_number}}</strong>                        
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