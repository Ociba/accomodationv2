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
                                    @foreach($property_taken as $i=>$property)
                                    <tr>
                                       @php
                                            if( $property_taken->currentPage() == 1){
                                            $i = $i+1;
                                            }else{
                                            $i = ($i+1) + 10*($property_taken->currentPage()-1);
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
                                            <a href="/property/delete/{{$property->id}}"  class="btn btn-danger mb-1">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row mb-1">
                            {{$property_taken->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</div>