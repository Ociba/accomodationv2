<!DOCTYPE html>
<html lang="en-US">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.css')
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
                                                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1469088724328 vc_row-has-fill">
                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1469094242775" >
                                                               @foreach($get_users_type as $user)
                                                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1469089899584 vc_row-has-fill">
                                                                    <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                                                                        <div class="vc_column-inner vc_custom_1469089852378">
                                                                            <div class="wpb_wrapper">
                                                                                <span style="color:blue; font-weight:bold;">{{$user->type}}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                                                                        <div class="vc_column-inner vc_custom_1469089860166">
                                                                        </div>
                                                                    </div>
                                                                    <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                                                                        <div class="vc_column-inner vc_custom_1469089860166">
                                                                            <div class="wpb_wrapper">
                                                                            <a href="/add-permission/{{$user->type_id}}" class="btn btn-primary p-2">Add Permission (s)</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                                                                    <div class="vc_column-inner vc_custom_1469092997733">
                                                                        <div class="wpb_wrapper">
                                                                        <div class="wpb_text_column wpb_content_element  vc_custom_1469094242775" >  
                                                                                <div class="wpb_wrapper" style="overflow-x:auto;">
                                                                                    <table class="table">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                {{--<th>No</th>--}}
                                                                                                <th>Permissions</th>
                                                                                                <th>Click To Proceed</th>
                                                                                            </tr>
                                                                                                @foreach($get_permission_for_selected_type as $i=>$user)
                                                                                            <tr>
                                                                                                {{--@php
                                                                                                if( $get_permission_for_selected_type->currentPage() == 1){
                                                                                                $i = $i+1;
                                                                                                }else{
                                                                                                $i = ($i+1) + 10*($get_permission_for_selected_type->currentPage()-1);
                                                                                                }
                                                                                                @endphp
                                                                                                <td>{{$i}}</td>--}}
                                                                                                <td hidden>{{$user->id}}
                                                                                                <td>{{$user->permission}}</td>
                                                                                                <td>
                                                                                                    <a href="/unassign-permission/{{$user->id}}"  class="btn btn-primary p-2">Remove Permission</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            @endforeach
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <div class="row mb-1">
                                                                                   {{--{{ $get_permission_for_selected_type->links()}}--}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
        @livewireScripts
    </body>
</html>