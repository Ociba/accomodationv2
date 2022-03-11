<div>
    <div class="body-content">
        <!--Content-->
        <div role="form" class="" id="" lang="en-US">
            <div class="screen-reader-response"></div>
            <form action="/create-accomodation-account" method="post" class="wpcf7-form" enctype="multipart/form-data">
             @csrf
                <p>Your Name *<br />
                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  required /></span> 
                </p>
				<p>Your Phone Number *<br />
                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="contact" value="" size="40" maxLength="10" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  required /></span> 
                </p>
				<p>Your Location *<br />
                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  required /></span> 
                </p>
				<p>Your Photo *<br />
                    <span class="wpcf7-form-control-wrap your-name"><input type="file" name="profile_photo_path" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  required /></span> 
                </p>
                <p>Your Email *<br />
                    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"  required /></span> 
                </p>
                <p>Your Password<br />
                    <span class="wpcf7-form-control-wrap your-subject"><input type="password" name="password" value="" size="40" class="wpcf7-form-control wpcf7-text" required /></span> 
                </p>
				<p>Confirm Password<br />
                    <span class="wpcf7-form-control-wrap your-subject"><input type="password" name="password_confirmation" value="" size="40" class="wpcf7-form-control wpcf7-text" required /></span> 
                </p>
                <p><button type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit btn-primary">Submit</button>
                <div class="wpcf7-response-output wpcf7-display-none"></div>
				<span style="color:blue;">Have already an account <a href="{{ route('login') }}" style="color:blue;">Login</a></span>
            </form>
        </div>
        <!--Content-->
        <div class="entry-footer">
        </div>
        <!-- .entry-footer -->
    </div>
</div>