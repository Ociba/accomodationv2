<div>
    <div class="body-content">
        <!--Content-->
        @include('layouts.messages')
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1469089899584 vc_row-has-fill">
                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1469089852378">
                        <div class="wpb_wrappe">
                        <span class="message">Create Account Or <a href="/login" style="color:blue; font-weight:bold;">Already have an Account Login</a></span>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1469089852378">
                        <div class="wpb_wrappe">
                        <span class="message"><a href="/profile-form" style="color:red; font-weight:bold;">Update Profile</a></span>
                        </div>
                    </div>
                </div>
        </div>
       
        <form name="registerform" id="registerform" action="/save-client-information" method="get">
            @csrf         
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1469089899584 vc_row-has-fill">
                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1469089852378">
                        <div class="wpb_wrappe">
                            <label for="name">Name (Full Names) <span style="color:red;">*</span></label>
                            <input type="text" name="name" id="name" class="input" value="" size="20" />
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1469089860166">
                        <div class="wpb_wrappe">
                            <label for="email">Email <span style="color:red;">*</span></label>
                            <input type="email" name="email" id="email" class="input" value="" size="20" />
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1469089860166">
                        <div class="wpb_wrappe">
                            <label for="contact">Phone Number <span style="color:red;">*</span></label>
                            <input type="text" name="contact" id="contact" class="input" value="" size="20" />
                        </div>
                    </div>
                </div>
                @php
                 $get_locations =\DB::table('locations')->select('id','location')->get();
                @endphp
                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1469089860166">
                        <div class="wpb_wrappe">
                            <label for="address">Choose Address <span style="color:red;">*</span></label>
                             <select class="form-control" name="location_id" required>
                             @foreach($get_locations as $locate)
                             <option value="{{$locate->id}}">{{$locate->location}}</option>
                             @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1469089860166">
                        <div class="wpb_wrapper">
                            <label for="town">Town <span style="color:red;">*</span></label>
                            <input type="text" name="town" id="town" class="input" value="" size="20" />
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1469089860166">
                        <div class="wpb_wrapper">
                            <label for="division">Division | Ward <span style="color:red;">*</span></label>
                            <input type="text" name="division" id="division" class="input" value="" size="20" />
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1469089860166">
                        <div class="wpb_wrapper">
                            <label for="street">Street <span style="color:red;">*</span></label>
                            <input type="text" name="street" id="street" class="input" value="" size="20" />
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1469089860166">
                        <div class="wpb_wrapper">
                            <label for="plot_number">Plot Number</label>
                            <input type="text" name="plot_number" id="plot_number" class="input" value="" size="20" />
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1469089860166">
                        <div class="wpb_wrapper">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="input" value="" size="20" />
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1469089860166">
                        <div class="wpb_wrapper">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="input" value="" size="20" />
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary mb-1" style="padding:5px;">Submit</a>
            </div>
        </form>
    </div>
    <!--Content-->
    <div class="entry-footer"></div>
    <!-- .entry-footer -->
</div>