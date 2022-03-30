<!DOCTYPE html>
<html lang="en-US">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.css')
    </head>
    <body class="page-template page-template-page-templates page-template-front-page page-template-page-templatesfront-page-php page page-id-1148 group-blog enable-sticky-menu  behavior-down sidebar-full layout-boxed wpb-js-composer js-comp-ver-5.4.5 vc_responsive">
        <div id="fb-root"></div>
        <a name="top" style="height:0; position:absolute; top:0;" id="top"></a>
        <div id="body-wrap"  class="cactus-box  ">
            <div id="wrap">
                @include('layouts.admin-menu')
                <!--body content-->
                <div id="cactus-body-container">
                    <div class="cactus-sidebar-control   ">
                        <!--sb-ct-medium, sb-ct-small-->
                        <div class="cactus-container ">
                            <div class="cactus-row">
                                <div class="main-content-col">
                                    <div class="main-content-col-body">
                                        <div class="single-page-content">
                                            <article class="cactus-single-content">
                                                <h2 class="hidden-title">Smart Content Box V2</h2>
                                                <div class="single-page-content single-content">
                                                    <!--Single Page Content-->
                                                    <article id="post-1148" class="post-1148 page type-page status-publish cactus-single-content">
                                                        <div class="body-content">
                                                            <div class="vc_row wpb_row vc_row-fluid">
                                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                    <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                            <div id="v_comparetable_8519" class="ct-compare-table-group ">
                                                                                <div  class="compare-table-item col-md-3 " data-special="0">
                                                                                    <div class="compare-table-content">
                                                                                        <div class="compare-table-title h5">ACCOMODATION</div>
                                                                                        {{--
                                                                                        <div class="compare-table-price">
                                                                                            <div class="price-wrap"><span class="price-number">FREE</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        --}}
                                                                                        <div class="compare-table-option">
                                                                                            <p>Today Users : {{auth()->user()->countTodayAccomodationUser()}}</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>Total Users : {{auth()->user()->countAccomodation()}}</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>Available: {{auth()->user()->countAvailableAccomodation()}}</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>Taken: {{auth()->user()->countTakenAccomodation()}}</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>Amount: <strong><b>sh. {{ number_format(auth()->user()->sumAccomodationPayment())}}</b></strong></p>
                                                                                        </div>
                                                                                        <div class="compare-table-option"><a href="/property/" title="View Available Accomodation and Property" id="ct_custom_8731469785580"  class="btn btn-default bt-style-1">View</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div  class="compare-table-item col-md-3 " data-special="1">
                                                                                    <div class="compare-table-content">
                                                                                        <div class="compare-table-title h5">SUPERMARKET</div>
                                                                                        {{--
                                                                                        <div class="compare-table-price">
                                                                                            <div class="price-wrap"><span class="currency">$</span><span class="sub-price">99</span><span class="sub-text">/month</span><span class="price-number">9.99</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        --}}
                                                                                        <div class="compare-table-option">
                                                                                            <p>Total Stock: {{ number_format(auth()->user()->countInitialStock())}}</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>Out Of Stock: </p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>Current Stock: </p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>Amount Collected: </p>
                                                                                        </div>
                                                                                        <div class="compare-table-option"><a href="/supermarket/supermarket-items" title="BUY THIS THEME" id="ct_custom_1191469785710"  class="btn btn-default bt-style-1">BUY THIS THEME</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div  class="compare-table-item col-md-3 " data-special="0">
                                                                                    <div class="compare-table-content">
                                                                                        <div class="compare-table-title h5">PRODUCE</div>
                                                                                        {{--
                                                                                        <div class="compare-table-price">
                                                                                            <div class="price-wrap"><span class="currency">$</span><span class="sub-price">99</span><span class="sub-text">/month</span><span class="price-number">49.99</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        --}}
                                                                                        <div class="compare-table-option">
                                                                                            <p>100GB Storage</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>8GB Memory</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>Unlimited Bandwidth</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>24/7 Support</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option"><a href="#" title="BUY THIS THEME" id="ct_custom_1191469785710"  class="btn btn-default bt-style-1">BUY THIS THEME</a>
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
                                                                    <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                            <div id="v_comparetable_8519" class="ct-compare-table-group ">
                                                                                <div  class="compare-table-item col-md-3 " data-special="0">
                                                                                    <div class="compare-table-content">
                                                                                        <div class="compare-table-title h5">EQUIPMENTS</div>
                                                                                        {{--
                                                                                        <div class="compare-table-price">
                                                                                            <div class="price-wrap"><span class="price-number">FREE</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        --}}
                                                                                        <div class="compare-table-option">
                                                                                            <p>5GB Storage</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>4GB Memory</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>1,000GB Bandwidth</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>Forum Support</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option"><a href="#" title="BUY THIS THEME" id="ct_custom_8731469785580"  class="btn btn-default bt-style-1">BUY THIS THEME</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div  class="compare-table-item col-md-3 " data-special="1">
                                                                                    <div class="compare-table-content">
                                                                                        <div class="compare-table-title h5">USERS</div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>20GB Storage</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>8GB Memory</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>10,000GB Bandwidth</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>24/7 Support</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option"><a href="#" title="BUY THIS THEME" id="ct_custom_1191469785710"  class="btn btn-default bt-style-1">BUY THIS THEME</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div  class="compare-table-item col-md-3 " data-special="0">
                                                                                    <div class="compare-table-content">
                                                                                        <div class="compare-table-title h5">INCOME</div>
                                                                                        {{--
                                                                                        <div class="compare-table-price">
                                                                                            <div class="price-wrap"><span class="currency">$</span><span class="sub-price">99</span><span class="sub-text">/month</span><span class="price-number">49.99</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        --}}
                                                                                        <div class="compare-table-option">
                                                                                            <p>100GB Storage</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>8GB Memory</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>Unlimited Bandwidth</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option">
                                                                                            <p>24/7 Support</p>
                                                                                        </div>
                                                                                        <div class="compare-table-option"><a href="#" title="BUY THIS THEME" id="ct_custom_1191469785710"  class="btn btn-default bt-style-1">BUY THIS THEME</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--Content-->   
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
        </div>
        </div>
        </div>
        </div>
        <!--body content-->
        <div class="main-bottom-sidebar-wrap"></div>
        <!--footer-->
        @include('layouts.admin-footer')
        <!--footer-->
        </div>
        <!--Menu moblie-->
        <div class="canvas-ovelay"></div>
        @include('layouts.admin-mobile-view')
        <!--Menu moblie-->
        @include('layouts.javascript')
        @include('layouts.sidebar-modal')
    </body>
</html>