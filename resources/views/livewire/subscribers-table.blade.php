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
                                            <input type="email"  value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"  wire:model="searchTerm" />
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
                                        <th>No</th>
                                        <th>Email</th>
                                        <th>Date Subscribed</th>
                                        <th>Action</th>
                                    </tr>
                                        @foreach($subscribers as $i=>$subscribed)
                                    <tr>
                                        @php
                                        if( $subscribers->currentPage() == 1){
                                        $i = $i+1;
                                        }else{
                                        $i = ($i+1) + 10*($subscribers->currentPage()-1);
                                        }
                                        @endphp
                                        <td>{{$i}}</td>
                                        <td>{{$subscribed->email}}</td>
                                        <td>{{$subscribed->created_at}}</td>
                                        <td>
                                            <a href="/subscribers/delete-email/{{$subscribed->id}}"  class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row mb-1">
                            {{ $subscribers->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</div>