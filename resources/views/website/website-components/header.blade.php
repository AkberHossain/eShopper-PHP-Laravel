<div class="header" id="home">
	<div class="container">
		<ul>
			@if(Session::get('user_name'))
				<!-- Go to profile page -->
				<li><a href="{{ route('user.profile') }}" ><i class="fa fa-unlock-alt" aria-hidden="true"></i> Hello , {{Session::get('user_name')}}  </a></li>
				<li><a href="{{ route('user.logout') }}" ><i class="fa fa-unlock-alt" aria-hidden="true"></i> LogOut  </a></li>
			@else
				<!-- Go to Sign in -->
				<li><a href="{{ route('user.showsignin') }}"   ><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
				<!-- Go to Sign up -->
				<li><a href="{{ route('user.showsignup') }}" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
			@endif
			
			
			<li><i class="fa fa-phone" aria-hidden="true"></i> Call : +880 1950082890</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">eshopper@gmail.com</a></li>
		</ul>
	</div>
</div>