<div>
<div class="body-content">
            <!--Content-->
            <div class="tml tml-login" id="theme-my-login">
			<x-jet-validation-errors class="mb-4" />

			@if (session('status'))
				<div class="mb-4 font-medium text-sm text-green-600">
					{{ session('status') }}
				</div>
			@endif
			<form name="loginform" id="loginform" action="{{ route('login') }}" method="POST">
				@csrf
		<p class="tml-user-login-wrap">
			<label for="user_login"> E-mail</label>
			<input type="email" name="email" :value="old('email')" required autofocus id="email" class="input" size="20" />
		</p>

		<p class="tml-user-pass-wrap">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="input" value="" size="20" aname="password" required autocomplete="current-password" />
		</p>
		<div class="tml-rememberme-submit-wrap">
			<p class="tml-rememberme-wrap">
				<input name="remember" type="checkbox" id="remember_me" />
				<label for="remember_me">Remember Me</label>
			</p>

			<p class="tml-submit-wrap">
				<button type="submit" class="btn btn-primary">Login</button>
			</p>
		</div>
	</form>
	<ul class="tml-action-links">
    {{--<li><a href="/register-now" rel="nofollow">Register</a></li>--}}
<li>
     @if (Route::has('password.request'))
	<a href="{{ route('forget.password.get') }}" rel="nofollow">Lost Password</a>
	 @endif
</li>
</ul>
</div>


			            <!--Content-->
            <div class="entry-footer">
							</div><!-- .entry-footer -->
        </div>
</div>
