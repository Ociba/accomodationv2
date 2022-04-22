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
                                                            @include('layouts.messages')
                                                            <div class="wpb_wrapper" style="overflow-x:auto;">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>No.</th>
                                                                            {{--<th>Category</th>--}}
                                                                            <th>Name</th>
                                                                            <th>Price</th>
                                                                            {{--<th>Description</th>--}}
                                                                            <th>Photo</th>
                                                                            <th>Quantity</th>
                                                                            <th>Contact</th>
                                                                            <th>Town</th>
                                                                            <th>Address</th>
                                                                            <th>Street</th>
                                                                            <th>Plot No.</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                        @foreach($get_all_orders_info as $i=>$orders)
                                                                        <tr>
                                                                            <td>{{$i + 1}}</td>
                                                                            <td hidden>{{$orders->id}}</td>
                                                                            {{--<td>{{$orders->item_category}}</td>--}}
                                                                            <td>{{$orders->item_name}}</td>
                                                                            <td>{{ number_format($orders->price)}}</td>
                                                                            {{--<td>{{$orders->description}}</td>--}}
                                                                            <td><img style="width:60px; height:40px;" src="{{ asset('super_market_photos/'.$orders->photo)}}"></td>
                                                                            <td>{{$orders->quantity}}</td>
                                                                            <td>{{$orders->contact}}</td>
                                                                            <td>{{$orders->town}}</td>
                                                                            <td>{{ $orders->location}}</td>
                                                                            <td>{{ $orders->street}}</td>
                                                                            <td>{{ $orders->plot_number}}</td>
                                                                            <td>
                                                                            <form action="/supermarket/mark-as-seen/{{$orders->id}}" action="get">
                                                                                <input type="hidden" name="user_id" value="{{$orders->user_id}}">
                                                                                <input type="hidden" name="total" class="form-control" required>
                                                                                <button type="submit" class="btn btn-info btn-sm"title="Mark As Seen To Get Unit Price"><i class="feather icon-file"></i>&nbsp;Mark Seen</button>
                                                                            </form>
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="row mb-1">
                                                            {{--{{$get_all_orders_info->links()}}--}}
                                                            </div>
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