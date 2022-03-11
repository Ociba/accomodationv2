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
                                        <span class="search Name">
                                        <input type="email"  value="" size="40" wire:model="searchTerm">
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
                                        <th>NAME</th>
                                        <th>Email</th>
                                        <th>Type</th>
                                        <th>Contact</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($users as $i=>$user)
                                    <tr>
                                        @php
                                        if( $users->currentPage() == 1){
                                        $i = $i+1;
                                        }else{
                                        $i = ($i+1) + 10*($users->currentPage()-1);
                                        }
                                        @endphp
                                        <td>{{$i}}</td>
                                        <td hidden>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->type}}</td>
                                        <td>{{$user->contact}}</td>
                                        <td>
                                            @if($user->status =='suspended')
                                            <a href="/users/activate-user/{{$user->id}}"  class="btn btn-info mb-1">Activate</a>
                                            @else
                                            <a href="/users/suspend-user/{{$user->id}}"  class="btn btn-warning mb-1">Suspend</a>
                                            @endif
                                            <a href="/users/delete-user/{{$user->id}}"  class="btn btn-danger mb-1">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row mb-1">
                            {{ $users->links()}}
                        </div>
                        <div class="row mt-0">
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill mt-0">
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
                                            <span>Add User</span>
                                            </a>
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
    @livewireScripts
</div>