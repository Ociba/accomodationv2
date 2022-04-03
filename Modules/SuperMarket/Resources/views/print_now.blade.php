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
                {{--@include('layouts.admin-menu')--}}
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
                                                        <div class="body-content" id="print">
                                                            @foreach($print_orders_info as $info)
                                                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1469090485921 vc_row-has-fill">
                                                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                                                                    <div class="vc_column-inner vc_custom_1469089033309">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1469090197064" >
                                                                                <div class="wpb_wrapper" style="text-align:center">
                                                                                <img style="width:60px; height:40px;" src="{{ asset('wp-content/uploads/house.png')}}">
                                                                                    <h4 >JJOOME Accomodation,Property,Supermarket,Equipment & Produce</h4><br>
                                                                                    <h5>Soroti Uganda,Tel: 0775401793 | 0753659267</h5>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1469094858728 vc_row-has-fill">
                                                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                                                    <div class="vc_column-inner vc_custom_1469094319392">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1469094301919" >
                                                                                <div class="wpb_wrapper">
                                                                                    <ul>
                                                                                        <li><strong>Name:</strong> {{$info->name}}</li>
                                                                                        <li><strong class="font-weight-semibold">Date</strong>: {{date("jS F, Y", strtotime($info->created_at));}}</li>
                                                                                        <li><strong>Email:</strong> {{$info->email}}</li>
                                                                                        <li><strong>Address:</strong> {{$info->address}}</li>
                                                                                        <li><strong>Street:</strong> {{$info->street}}</li>
                                                                                        <li><strong>Division:</strong> {{$info->division}}</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                                                    <div class="vc_column-inner vc_custom_1469094324635">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1469094307880" >
                                                                                <div class="wpb_wrapper">
                                                                                    <ul>
                                                                                        <li><strong>INVOICE <span style="color:red;">#000{{$info->user_id}}</span></strong></li>
                                                                                        <li><strong class="font-weight-semibold">Due Date</strong>: {{date("jS F, Y", strtotime($info->created_at .'+1 days'));}}</li>
                                                                                        @php
                                                                                        $total_amount = \DB::table('unitprices')->where('unitprices.user_id',$info->user_id)
                                                                                        ->whereDate('unitprices.created_at' , '=',\Carbon\Carbon::today())
                                                                                        ->whereTime('unitprices.created_at' , '>',\Carbon\Carbon::now()->subHours(1))
                                                                                        ->sum('total');
                                                                                        @endphp
                                                                                        <li><strong>UGX:{{ number_format($total_amount)}}</strong></li>
                                                                                        <li><strong>Town:</strong> {{$info->town}}</li>
                                                                                        <li><strong>Phone Number:</strong> {{$info->contact}}</li>
                                                                                        <li><strong>Plot Number:</strong> {{$info->plot_number}}</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @include('layouts.messages')
                                                            <div class="wpb_wrapper" style="overflow-x:auto;">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Item</th>
                                                                            <th>Photo</th>
                                                                            <th>Quantity</th>
                                                                            <th>Price</th>
                                                                            <th> Unit Price</th>
                                                                        </tr>
                                                                        @php
                                                                        $items_ordered = \DB::table('orders')->join('supermarkets','supermarkets.id','orders.item_id')
                                                                        ->where('user_id',$info->user_id)
                                                                        ->whereDate('orders.created_at' , '=',\Carbon\Carbon::today())
                                                                        ->whereTime('orders.created_at' , '>',\Carbon\Carbon::now()->subHours(1))
                                                                        ->get(['orders.*','supermarkets.photo']);
                                                                        @endphp
                                                                        @foreach($items_ordered as $orders)
                                                                        <tr>
                                                                            <td>{{$orders->item_name}}</td>
                                                                            <td><img style="width:60px; height:40px;" src="{{ asset('super_market_photos/'.$orders->photo)}}"></td>
                                                                            <td>{{$orders->quantity}}</td>
                                                                            <td>{{number_format($orders->price)}}</td>
                                                                            <td> <strong>sh .{{ number_format($orders->price * $orders->quantity)}}</strong></td>
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1469094858728 vc_row-has-fill">
                                                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                                                    <div class="vc_column-inner vc_custom_1469094319392">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1469094301919" >
                                                                                <div class="wpb_wrapper">
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                                                    <div class="vc_column-inner vc_custom_1469094324635">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1469094307880" >
                                                                                <div class="wpb_wrapper">
                                                                                    <ul>
                                                                                        <li><strong>Subtotal: </strong>UGX:{{ number_format($total_amount)}}</li>
                                                                                        <li><strong>Transport:</strong> UGX: 4,000</li>
                                                                                        <li><strong>To Be Paid:</strong> UGX: {{ number_format($total_amount + 4000)}}</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        <div class="row text-center">
                                                        <button class="print-lin" onclick="jQuery.print()">
                                                        Printed By {{auth()->user()->name}}
                                                        </button>
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
        {{--@include('layouts.admin-footer')--}}
        <!--footer-->
        </div>
        <!--Menu moblie-->
        <div class="canvas-ovelay"></div>
        {{--@include('layouts.admin-mobile-view')--}}
        <!--Menu moblie-->
        @include('layouts.javascript')
        {{--@include('layouts.sidebar-modal')--}}
        <script type="text/JavaScript" src="{{ asset('print.js')}}"></script>
        <script type='text/javascript'>
        //<![CDATA[
        jQuery(function($) { 'use strict';
            $("#ele3").find('button').on('click', function() {
                //Print ele4 with custom options
                $("#ele3").print({
                    //Use Global styles
                    globalStyles : false,
                    //Add link with attrbute media=print
                    mediaPrint : false,
                    //Print in a hidden iframe
                    iframe : false,
                    //Don't print this
                    noPrintSelector : ".avoid-this",
                    //Add this at top
                    prepend : "Hello World!!!<br/>",
                    //Add this on bottom
                    append : "<span><br/>Buh Bye!</span>",
                    //Log to console when printing is done via a deffered callback
                    deferred: $.Deferred().done(function() { console.log('Printing done', arguments); })
                });
            });
        });
        //]]>
        </script>
    </body>
</html>