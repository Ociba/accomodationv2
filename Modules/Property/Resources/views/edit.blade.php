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
                                                <h2 class="hidden-titl">Edit Property Information</h2>
                                                <div class="single-page-content single-content">
                                                    <!--Single Page Content-->
                                                    <article id="post-1148" class="post-1148 page type-page status-publish cactus-single-content">
                                                        <div class="body-content">
                                                            @include('layouts.messages')
                                                            @foreach($edit_property as $property)
                                                            <form action="/property/update-property/{{$property->id}}" method="get" class="wpcf7-for" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="vc_row wpb_row vc_row-fluid">
                                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                    <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                                    <div class="vc_column-inner ">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1469616820885 textwidget" >
                                                                                                <div class="wpb_wrapper">
                                                                                                    Property Status [Rent,Sale,Hire]
                                                                                                    <input type="text" name="property_status" value="{{$property->property_status}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                                    <div class="vc_column-inner ">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1469602300039 textwidget" >
                                                                                                <div class="wpb_wrapper">
                                                                                                    Property Size 
                                                                                                    <span class="wpcf7-form-control-wrap your-email">
                                                                                                    <input type="text" name="property_size" value="{{$property->property_size}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" />
                                                                                                    </span>
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
                                                            <div class="vc_row wpb_row vc_row-fluid">
                                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                    <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                                    <div class="vc_column-inner ">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1469616820885 textwidget" >
                                                                                                <div class="wpb_wrapper">
                                                                                                    Number of Bedrooms
                                                                                                    <span class="wpcf7-form-control-wrap your-email">
                                                                                                    <input type="text" name="bedroom" value="{{$property->bedroom}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" />
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                                    <div class="vc_column-inner ">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1469602300039 textwidget" >
                                                                                                <div class="wpb_wrapper">
                                                                                                    Number of BatheRoom 
                                                                                                    <span class="wpcf7-form-control-wrap your-email">
                                                                                                    <input type="text" name="bathroom" value="{{$property->bathroom}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"/>
                                                                                                    </span>
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
                                                            <div class="vc_row wpb_row vc_row-fluid">
                                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                    <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                                    <div class="vc_column-inner ">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1469616820885 textwidget" >
                                                                                                <div class="wpb_wrapper">
                                                                                                    Garage
                                                                                                    <span class="wpcf7-form-control-wrap your-email">
                                                                                                    <input type="text" name="garage" value="{{$property->garage}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" />
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                                    <div class="vc_column-inner ">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1469602300039 textwidget" >
                                                                                                <div class="wpb_wrapper">
                                                                                                    Property Location <span style="color:red">*</span>
                                                                                                    <span class="wpcf7-form-control-wrap your-email">
                                                                                                    <input type="text" name="location" value="{{$property->location}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required />
                                                                                                    </span>
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
                                                            <div class="vc_row wpb_row vc_row-fluid">
                                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                    <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                                    <div class="vc_column-inner ">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1469616820885 textwidget" >
                                                                                                <div class="wpb_wrapper">
                                                                                                    Brief Description <span style="color:red">*</span>
                                                                                                    <span class="wpcf7-form-control-wrap your-email">
                                                                                                    <input type="text" name="description" value="{{$property->description}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required />
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                                    <div class="vc_column-inner ">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1469602300039 textwidget" >
                                                                                                <div class="wpb_wrapper">
                                                                                                    Price <span style="color:red">*</span>
                                                                                                    <span class="wpcf7-form-control-wrap your-email">
                                                                                                    <input type="number" name="price" value="{{$property->price}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required />
                                                                                                    </span>
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
                                                            <hr>
                                                            <div class="text-center">
                                                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                                                            </div>
                                                        </form>
                                                        @endforeach
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