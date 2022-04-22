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
                                                <h2 class="hidden-titl"><strong>Available Equipments</strong></h2>
                                                <div class="single-page-content single-content">
                                                    <!--Single Page Content-->
                                                    <article id="post-1148" class="post-1148 page type-page status-publish cactus-single-content">
                                                        <div class="body-content">
                                                            @livewire('available-equipment-table')
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

<div class="submitModal modal fade" id="videopro_submit_form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fas fa-times"></i></button>
                <h4 class="modal-title" id="videopro_frontend_submit_heading">Add Equipment</h4>
            </div>
            <div class="modal-body" >
                <aside id="text-20" class="   user-submit">
                    <style>#text-20 .ct-sub-w-title{color:FFFFFF !important; background:FF0000 !important}</style>
                    <div class="widget-inner">
                        <div class="textwidget">
                            <div role="form" class="" id="" lang="en-US" >
                                <div class="screen-reader-response"></div>
                                <form action="/agricultureequipments/save-equipment" method="post" class="wpcf7-for" enctype="multipart/form-data">
                                     @csrf
                                    <div style="display: none;">
                                        {{--<input type="hidden" name="created_by" value="{{auth()->user()->id}}" />--}}
                                    </div>
                                       Equipment Name
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="text" name="equipment" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required />
                                    </span>
                                    Quantity
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="text" name="quantity" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required />
                                    </span>
                                    Price
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="number" name="price" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required />
                                    </span>
                                    Photo
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="file" name="photo" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required />
                                    </span><br>
                                        Description
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="text" name="description" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required />
                                    </span>
                                     
                                    <hr>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary" style="padding:5px; color:#fff; margin-top:5px;">SUBMIT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>