<div>
    <style>
        .mb-1 {
            margin-top:5px;
        }
    </style>
@livewireStyles
<link rel="stylesheet" href="{{ asset('css/tailwind.css')}}" /> 
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
                                        <span class="">
                                            <select class="form-control" wire:model="per_page">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
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
                                        <span class="">
                                         <input  type="text" value="" size="40" class="" wire:model="searchTerm">
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
                                        <th>Place</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($locations as $i=>$locates)
                                    <tr>
                                       @php
                                            if( $locations->currentPage() == 1){
                                            $i = $i+1;
                                            }else{
                                            $i = ($i+1) + 10*($locations->currentPage()-1);
                                            }
                                        @endphp
                                        <td>{{$i}}</td>
                                        <td hidden>{{$locates->id}}</td>
                                        <td>{{$locates->location}}</td>
                                        <td>{{ number_format($locates->transport_amount)}}</td>
                                        <td>
                                            <a href="/location/edit-location/{{$locates->id}}"  class="btn btn-info mb-1">Edit</a>
                                            <a href="/location/delete-location/{{$locates->id}}"  class="btn btn-danger mb-1">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </table>
                        </div>
                        <div class="row mb-1">
                                {{$locations->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row wpb_row vc_row-fluid vc_custom_1469089899584 vc_row-has-fill">
    <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
    <div class="vc_column-inner vc_custom_1469089852378">
    <div class="wpb_wrapper">
    {{--<a href="" title="Click To Remove" id="cactus-btn-6166"  class="btn btn-default bt-style-1">Remove All Cart</a>--}}
    </div>
    </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
    <div class="vc_column-inner vc_custom_1469089860166">
    <div class="wpb_wrapper">
    </div>
    </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
    <div class="vc_column-inner vc_custom_1469089860166">
    <div class="wpb_wrapper text-right">
    <a href="#" data-toggle="modal" data-target="#add-locations" class="btn btn-user-submit btn-default bt-style-2 padding-small " data-type="">        	
    <span>Add locations</span>
    </a>
    </div>
    </div>
    </div>
    </div>
    @livewireScripts
</div>