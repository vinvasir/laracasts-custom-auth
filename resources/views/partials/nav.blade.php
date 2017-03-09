<div class="blog-masthead">
		<div class="container">
				<nav class="nav blog-nav">
						<a class="nav-link" href="#">Home</a>
						<a class="nav-link" href="#">Home</a>
						<a class="nav-link ml-autho" href="/logout">Log out</a>
						@if ( auth()->user() )
						<a class="nav-link ml-auto" href="#">{{ auth()->user()->name }}</a>
						@endif
				</nav>
		</div>
</div>