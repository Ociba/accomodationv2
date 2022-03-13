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
                                        <th>Equipment</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Photo</th>
                                        <th>Quantity</th>
                                    </tr>
                                    @foreach($taken_equipments as $i=>$equipment)
                                    <tr>
                                       @php
                                            if( $taken_equipments->currentPage() == 1){
                                            $i = $i+1;
                                            }else{
                                            $i = ($i+1) + 10*($taken_equipments->currentPage()-1);
                                            }
                                        @endphp
                                        <td>{{$i}}</td>
                                        <td>{{$equipment->item_name}}</td>
                                        <td hidden>{{$equipment->id}}</td>
                                        <td>{{ number_format($equipment->price)}}</td>
                                        <td>{{$equipment->description}}</td>
                                        <td><img style="width:60px; height:50px;" src="{{ asset('equipment_photos/'.$equipment->photo)}}"></td>
                                        <td>{{$equipment->quantity}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row mb-1">
                            {{$taken_equipments->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</div>