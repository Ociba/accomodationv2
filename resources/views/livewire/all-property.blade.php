<div>
     <style>  
        .mb-1 {
        margin-top:5px;
        }
        .mt-0 {
        margin-top:-100px;
        }
    </style>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/tailwind.css')}}" />
    <div class="vc_row wpb_row vc_row-fluid vc_custom_1469088724328 vc_row-has-fill">
        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
            <div class="vc_column-inner vc_custom_1469092997733">
                <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element  vc_custom_1469094242775" >
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1469089899584 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                                <div class="vc_column-inner vc_custom_1469089852378">
                                    <div class="wpb_wrapper">
                                        Show  Entries
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
                            <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                                <div class="vc_column-inner vc_custom_1469089860166">
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                                <div class="vc_column-inner vc_custom_1469089860166">
                                    <div class="wpb_wrapper">
                                        <span title="Your Amount" id="cactus-btn-493"  class="btn btn-defaul bt-style-1">
                                        Search Entries
                                        <span class="wpcf7-form-control-wrap your-email">
                                            <input type="email" size="40" wire:model="searchTerm" /></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_wrapper" style="overflow-x:auto;">
                            <table class="table">
                                <tbody>
                                    <tr>
                                       <th>No.</th>
                                        <th>Category</th>
                                        <th>Location</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Photo</th>
                                        <th>Property Status</th>
                                        <th>Discount</th>
                                        <th>New Price</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($all_property as $i=>$property)
                                    <tr>
                                       @php
                                            if( $all_property->currentPage() == 1){
                                            $i = $i+1;
                                            }else{
                                            $i = ($i+1) + 10*($all_property->currentPage()-1);
                                            }
                                        @endphp
                                        <td>{{$i}}</td>
                                        <td>{{$property->category_name}}</td>
                                        <td>{{$property->location}}</td>
                                        <td>{{$property->description}}</td>
                                        <td>{{ number_format($property->price)}}</td>
                                        <td><img style="width:60px; height:50px;" src="{{ asset('property_photos/'.$property->photo)}}"></td>
                                        <td>{{$property->property_status}}</td>
                                        <td>{{$property->discount}}</td>
                                        <td>{{ number_format($property->discount_price)}}</td>
                                        <td>
                                            <a href="/property/edit/{{$property->id}}"  class="btn btn-info mb-1">Edit</a>
                                            <a href="/property/add-discount/{{$property->id}}"  class="btn btn-success mb-1">Discount</a>
                                            <a href="/property/delete/{{$property->id}}"  class="btn btn-danger mb-1">Delete</a>
                                            <a href="/property/mark-as-taken/{{$property->id}}"  class="btn btn-warning mb-1">Taken</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row mb-1">
                            {{$all_property->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    <div class="vc_row wpb_row vc_row-fluid vc_custom_1469089899584 vc_row-has-fill">
    <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
    <div class="vc_column-inner vc_custom_1469089852378">
    <div class="wpb_wrapper">
    {{--<a href="" title="Click To Remove" id="cactus-btn-6166"  class="btn btn-default bt-style-1">Remove All Cart</a>--}}
    </div>
    </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
    <div class="vc_column-inner vc_custom_1469089860166">
    <div class="wpb_wrapper">
    </div>
    </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-has-fill">
    <div class="vc_column-inner vc_custom_1469089860166">
    <div class="wpb_wrapper">
    <a href="#" data-toggle="modal" data-target="#videopro_submit_form" class="btn btn-user-submit btn-default bt-style-2 padding-small " data-type="">        	
    <span>Add Your Property</span>
    </a>
    </div>
    </div>
    </div>
    </div>
</div>