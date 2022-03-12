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
                                        <input type="text" size="40" wire:model="searchTerm" /></span>
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
                                        <th>Customer NAME</th>
                                        <th>Date & Time</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($get_all_orders_summary as $i=>$order)
                                    <tr>
                                        @php
                                            if( $get_all_orders_summary->currentPage() == 1){
                                            $i = $i+1;
                                            }else{
                                            $i = ($i+1) + 10*($get_all_orders_summary->currentPage()-1);
                                            }
                                        @endphp
                                        <td>{{$i}}</td>
                                        <td hidden>{{$order->id}}</td>
                                        <td>{{$order->name}}</td>
                                        <td>{{$order->created_at}}</td>
                                        <td>
                                            <a href="/supermarket/more-on-customer-order/{{$order->id}}"  class="btn btn-info mb-1">View</a>
                                            <a href="/supermarket/print-order/{{$order->id}}"  class="btn btn-success mb-1">Print</a>
                                            <a href="/supermarket/mark-customer-order-as-delivered/{{$order->id}}"  class="btn btn-indigo mb-1">Delivered</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row mb-1">
                          {{$get_all_orders_summary->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</div>