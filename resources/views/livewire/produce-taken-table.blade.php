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
                                            <select class="form-control" wier:model="per_page">
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
                                        Search Entries<span class="wpcf7-form-control-wrap your-email">
                                        <input type="email" value="" size="40"wire:model="searchTerm" />
                                        </span>
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
                                        <th>NAME</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>New Price</th>
                                        <th>Discount</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($taken_produce as $i=>$produce)
                                    <tr>
                                       @php
                                        if( $taken_produce->currentPage() == 1){
                                        $i = $i+1;
                                        }else{
                                        $i = ($i+1) + 10*($taken_produce->currentPage()-1);
                                        }
                                        @endphp
                                    <td>{{$i}}</td>
                                    <td>{{$produce->produce_name}}</td>
                                    <td>{{$produce->quantity}}</td>
                                    <td>{{$produce->price}}</td>
                                    <td><img style="width:60px; Height:50px;" src="{{ asset('produce_photos/'.$produce->image)}}"></td>
                                    <td>{{$produce->new_amount}}</td>
                                    <td>{{$produce->discount_percentage}}</td>
                                     <td>
                                            <a href="/produce/delete-produce/{{$produce->id}}"  class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row mb-1">
                           {{$taken_produce->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</div>