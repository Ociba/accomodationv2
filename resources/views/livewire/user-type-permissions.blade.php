<div>
<style>
        .mb-1 {
        margin-top:5px;
        }
        .mt-0 {
        margin-top:-100px;
        }
        .btn-primary{
            background-color:#000066;
            color:#ffffff;
        }
       
    </style>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/tailwind.css')}}" />
    <div class="wpb_text_column wpb_content_element  vc_custom_1469094242775" >  
        <div class="wpb_wrapper" style="overflow-x:auto;">
            <table class="table">
                <tbody>
                    <tr>
                        <th>No</th>
                        <th>Type</th>
                        <th>Click To Proceed</th>
                    </tr>
                        @foreach($get_users as $i=>$user)
                    <tr>
                        @php
                        if( $get_users->currentPage() == 1){
                        $i = $i+1;
                        }else{
                        $i = ($i+1) + 10*($get_users->currentPage()-1);
                        }
                        @endphp
                        <td>{{$i}}</td>
                        <td>{{$user->type}}</td>
                        <td>
                            <a href="/assign-or-remove-permission/{{$user->type_id}}"  class="btn btn-primary p-2">Assign | Remove Permission</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row mb-1">
            {{ $get_users->links()}}
        </div>
    </div>
    @livewireScripts
</div>
