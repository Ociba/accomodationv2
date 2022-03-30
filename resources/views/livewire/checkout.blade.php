<div>
    <div class="body-content">
        <!--Content-->
        @include('layouts.messages')
        <p class="message">Create Account Or <a href="/login-now" style="color:blue; font-weight:bold;">Already have an Account Login</a></p>
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
                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1469089860166">
                        <div class="wpb_wrappe">
                            <label for="address">Address <span style="color:red;">*</span></label>
                            <input type="text" name="address" id="address" class="input" value="" size="50" />
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
            <p class="tml-submit-wra">
                <button type="submit" class="btn btn-primary">Submit</a>
            </p>
        </form>
    </div>
    <!--Content-->
    <div class="entry-footer"></div>
    <!-- .entry-footer -->
</div>