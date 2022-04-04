<footer>
   <div class="footer-inner dark-div">
      <div class="footer-sidebar cactus-sidebar">
         <div class="cactus-container padding-20px">
            <div class="cactus-row magin-20px">
               <aside id="text-3" class="   widget module widget-col widget_text">
                  <style>#text-3 .ct-sub-w-title{color:FFFFFF !important; background:FF0000 !important}</style>
                  <div class="widget-inner">
                     <h2 class="widget-title h4">JJOOME</h2>
                     <div class="textwidget">
                        JJOOME is the top Online site for searching for your affordable and pocket friendly accomodation,property.We also deal with shopping online for both shop items and Agriculture produce based on your choice.Not to leave other people out of the site we have also provided your with chance of getting your desired agriculture Equipments.<br> <span style="color:#fff;"><em>We thank you for being our estimeed customers</span></em>
                        <br/><br/>
                        <ul class='nav navbar-nav navbar-right social-listing list-inline social-accounts'>
                           <li class="facebook"><a target='_blank' href="https://www.facebook.com/Jjoome-accomodationproperty-shopping-online-100470529257806/" title='Facebook'><i class="fab fa-facebook"></i></a></li>
                           <li class="youtube"><a target='_blank' href="https://www.youtube.com/channel/UCxemJjh0Ym2fCTcRvIr86ww" title='YouTube'><i class="fab fa-youtube"></i></a></li>
                           <li class="twitter"><a target='_blank' href="https://twitter.com/JoomeProperty" title='Twitter'><i class="fab fa-twitter"></i></a></li>
                           <li class="twitch"><a target='_blank' href="#" title='0775401793'><i class="fab fa-whatsapp-square"></i></a></li>
                           <li class="rss"><a href="callto:+256753926367" title='+256753926367'><i class="fas fa-phone"></i></a></li>
                           {{--<li class="twitch"><a target='_blank' href="#" title='Twitch'><i class="fab fa-twitch"></i></a></li>--}}
                        </ul>
                     </div>
                  </div>
               </aside>
               <aside id="popular_posts_id-5" class="   widget module widget-col widget-popular-post">
                  <style>#popular_posts_id-5 .ct-sub-w-title{color:FFFFFF !important; background:FF0000 !important}</style>
                  <div class="widget-inner">
                     <h2 class="widget-title h4">Recent Accomodation</h2>
                     <div class="widget-popular-post-content ">
                        <div class="cactus-listing-wrap">
                           <div class="cactus-listing-config style-3 style-widget-popular-post">
                              <div class="cactus-sub-wrap">
                                 @php
                                    $apartment=\DB::table('properties')->join('categories','categories.id','properties.category_id')
                                    ->where('properties.category_id',5)->latest()->limit(1)->get(['properties.*','categories.category_name']);
                                 @endphp
                                 @foreach($apartment as $apart)
                                 <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                       <div class="picture">
                                          <div class="picture-content">
                                             <a title=""  href="/apartment/">
                                                <img width="100" height="75"  src="{{ asset('property_photos/'.$apart->photo)}}" class="lazyload effect-fade"  style="padding-top:75%;" alt="vp-mv04"/>
                                                
                                             </a>
                                             <div class="cactus-note ct-time font-size-1"><span>{{$apart->category_name}}</span></div>
                                          </div>
                                       </div>
                                       <div class="content">
                                          <h3 class="cactus-post-title entry-title h6 sub-lineheight">
                                             <a href="/apartment/"  title="">{{$apart->description}}</a>
                                          </h3>
                                          <div class="posted-on metadata-font">
                                             <a href="/apartment/"  class="vcard author cactus-info font-size-1"><span class="fn">{{$apart->location}}</span></a>
                                             <div class="liked cactus-info font-size-1">UGX: {{ number_format($apart->price)}}</div>
                                          </div>
                                       </div>
                                    </div>
                                 </article>
                                 @endforeach
                                 @php
                                    $hostel=\DB::table('properties')->join('categories','categories.id','properties.category_id')
                                    ->where('properties.category_id',4)->latest()->limit(1)->get(['properties.*','categories.category_name']);
                                 @endphp
                                 @foreach($hostel as $hostels)
                                 <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                       <div class="picture">
                                          <div class="picture-content">
                                             <a title=""  href="/hostels/">
                                                <img width="100" height="75"  src="{{ asset('property_photos/'.$hostels->photo)}}" class="lazyload effect-fade"  style="padding-top:75%;" alt="vp-mv04"/>
                                                
                                             </a>
                                             <div class="cactus-note ct-time font-size-1"><span>{{$hostels->category_name}}</span></div>
                                          </div>
                                       </div>
                                       <div class="content">
                                          <h3 class="cactus-post-title entry-title h6 sub-lineheight">
                                             <a href="/hostels/"  title="">{{$hostels->description}}</a>
                                          </h3>
                                          <div class="posted-on metadata-font">
                                             <a href="/hostels/"  class="vcard author cactus-info font-size-1"><span class="fn">{{$hostels->location}}</span></a>
                                             <div class="liked cactus-info font-size-1">UGX: {{ number_format($hostels->price)}}</div>
                                          </div>
                                       </div>
                                    </div>
                                 </article>
                                 @endforeach
                                 @php
                                    $rooms=\DB::table('properties')->join('categories','categories.id','properties.category_id')
                                    ->where('properties.category_id',1)->latest()->limit(1)->get(['properties.*','categories.category_name']);
                                 @endphp
                                 @foreach($rooms as $room)
                                 <article class="cactus-post-item hentry">
                                    <div class="entry-content">
                                       <div class="picture">
                                          <div class="picture-content">
                                             <a title=""  href="/rooms/">
                                                <img width="100" height="75"  src="{{ asset('property_photos/'.$room->photo)}}" class="lazyload effect-fade"  style="padding-top:75%;" alt="vp-mv04"/>
                                                
                                             </a>
                                             <div class="cactus-note ct-time font-size-1"><span>{{$room->category_name}} Rooms</span></div>
                                          </div>
                                       </div>
                                       <div class="content">
                                          <h3 class="cactus-post-title entry-title h6 sub-lineheight">
                                             <a href="/rooms/"  title="">{{$room->description}}</a>
                                          </h3>
                                          <div class="posted-on metadata-font">
                                             <a href="/rooms/"  class="vcard author cactus-info font-size-1"><span class="fn">{{$room->location}}</span></a>
                                             <div class="liked cactus-info font-size-1">UGX: {{ number_format($room->price)}}</div>
                                          </div>
                                       </div>
                                    </div>
                                 </article>
                                 @endforeach
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </aside>
               <aside id="categories-6" class="   col-md-2 widget module widget-col widget_categories">
                  <style>#categories-6 .ct-sub-w-title{color:FFFFFF !important; background:FF0000 !important}</style>
                  <div class="widget-inner">
                     <h2 class="widget-title h4">Accomodation Types</h2>
                     <ul>
                        <li class="cat-item cat-item-12"><a href="/rooms/" >Rooms</a></li>
                        <li class="cat-item cat-item-161"><a href="/hostels/" >Hostels</a></li>
                        <li class="cat-item cat-item-8"><a href="/houses/" >Houses</a></li>
                        <li class="cat-item cat-item-6"><a href="/apartment/" >Apartment</a></li>
                        <li class="cat-item cat-item-171"><a href="/plotsandland/" >Plots & Lnd</a></li>
                        <li class="cat-item cat-item-2"><a href="/shop/" >Shop</a> </li>
                        <li class="cat-item cat-item-5"><a href="/office/" >Office</a></li>
                        <li class="cat-item cat-item-11"><a href="#" >Stores coming soon</a> </li>
                     </ul>
                  </div>
               </aside>
               <aside id="nav_menu-2" class="menu-list   col-md-2 widget module widget-col widget_nav_menu">
                  <style>#nav_menu-2 .ct-sub-w-title{color:FFFFFF !important; background:FF0000 !important}</style>
                  <div class="widget-inner">
                     <h2 class="widget-title h4">Other Services</h2>
                     <div class="menu-custom-menu-container">
                        <ul id="menu-custom-menu" class="menu">
                           <li id="menu-item-2344" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2344"><a href="#">website Development</a></li>
                           <li id="menu-item-2345" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2345"><a href="#">Web App Development</a></li>
                           <li id="menu-item-2386" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2386"><a href="#">Mobile App Development</a></li>
                           <li id="menu-item-2346" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2346"><a href="#">Graphics Design</a></li>
                           <li id="menu-item-2599" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2599"><a href="#">Software Installation</a></li>
                           <li id="menu-item-2600" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2600"><a href="#">Internet Installation</a></li>
                           <li id="menu-item-2347" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2347"><a href="#">Hosting</a></li>
                           <li id="menu-item-2387" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2387"><a href="#">Programming Training</a></li>
                           <li id="menu-item-2413" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2413"><a href="#">Maintanance</a></li>
                        </ul>
                     </div>
                  </div>
               </aside>
               <aside id="top-channel-3" class="   col-md-2 widget module widget-col widget_top_channels">
                  <style>#top-channel-3 .ct-sub-w-title{color:FFFFFF !important; background:FF0000 !important}</style>
                  <div class="widget-inner">
                     <h2 class="widget-title h4">Recent Shop Items</h2>
                     <div class="widget_top_channel_content">
                        <div class="post-metadata sp-style">
                           @php
                              $items=\DB::table('supermarkets')->latest()->limit(4)->get();
                           @endphp
                           @foreach($items as $item)
                           <div class="channel-subscribe">
                              <div class="channel-picture">
                                 <a href="/supermarket/" title="Supermarket">
                                 <img src="{{ asset('super_market_photos/'.$item->photo)}}" width="50" height="50" alt="" class="avatar avatar-50 wp-user-avatar wp-user-avatar-50 photo avatar-default" />
                                 </a>
                              </div>
                              <div class="channel-content">
                                 <h4 class="channel-title h6">
                                    <a href="/supermarket/" title="Supermarket">
                                    {{$item->item}}
                                    </a>
                                 </h4>
                                 <div class="posted-on metadata-font">
                                    <span class="cactus-info font-size-1"><span> {{$item->description}} <br>
                                    UGX:  {{ number_format($item->price)}}
                                    </span></span>
                                    
                                 </div>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </aside>
            </div>
         </div>
      </div>
   </div>
   <div class="footer-info dark-div" style="background-color:rgb(0, 0, 153,1.00) color:#fff;">
      <div class="cactus-container padding-20px">
         <div class="cactus-row magin-20px">
            <div class="copyright font-1">© 2020- {{date('Y')}} JJOOME LImited -Uganda. All rights reserved.</div>
            <div class="link font-1">
               <div class="menu-footer-menu-container ">
                  <ul id="menu-footer-menu" class="menu" style="color:#ffffff;">
                     <li id="menu-item-782" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-782"><a href="/" style="color:#ffffff;">Home</a></li>
                     <li id="menu-item-783" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-783"><a href="tel:+256753652367" style="color:#ffffff;"><img style="width:20px; height:20px; color:#ffffff;" src="{{ asset('produce/call2.png')}}"> 0753-652367</a></li>
                     <li id="menu-item-784" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-784"><a href="tel:+256775401793" style="color:#ffffff;"><img style="width:20px; height:20px;" src="{{ asset('produce/wa1.png')}}"> 0775-401793</a></li>
                     <li id="menu-item-785" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-785"><a href="mailto:ocibajames@gmail.com" style="color:#ffffff;"><i class="fa fa-envelope"></i> ocibajames@gmail.com</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>