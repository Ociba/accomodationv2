<div>
<style>
    .mb-1 {
        margin-top:5px;
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
                                        Search Entries<span class="">
                                            <input type="email" value="" size="40" wier:model="searchTerm"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_wrapper" style="overflow-x:auto;">
                            <table class="table">
                                <tbody>
                                   
                                    <tr>
                                        <th>No.</td>
                                        <th>NAME</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Contact</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($my_produce as $i=>$produce)
                                    <tr>
                                        @php
                                        if( $my_produce->currentPage() == 1){
                                        $i = $i+1;
                                        }else{
                                        $i = ($i+1) + 10*($my_produce->currentPage()-1);
                                        }
                                        @endphp
                                        <td>{{$i}}</td>
                                        <td>{{$produce->produce_name}}</td>
                                        <td>{{$produce->quantity}}</td>
                                        <td>{{$produce->price}}</td> 
                                        <td><img style="width:60px; height:40px;" src="{{ asset('produce_photos/'.$produce->image)}}"></td>
                                        <td>{{$produce->phone_number}}</td>
                                        <td>
                                            <a href="/produce/mark-produce-as-sold/{{$produce->id}}"  class="btn btn-info mb-1">Mark as Sold</a>
                                            <a href="/produce/add-discount-form/{{$produce->id}}"  class="btn btn-success mb-1">Discount</a>
                                            <a href="/produce/edit-produce-form/{{$produce->id}}"  class="btn btn-indigo mb-1">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row mb-1">
                            {{$my_produce->links()}}
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
    <a href="#" data-toggle="modal" data-target="#produce" class="btn btn-user-submit btn-default bt-style-2 padding-small " data-type="">        	
    <span>Add Your Produce</span>
    </a>
    </div>
    </div>
    </div>
    </div>
    
</div>