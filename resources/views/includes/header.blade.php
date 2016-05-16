<header class="main-header">
	<!-- Mobile Brand -->
	<a href="index.html" class="mobile-brand">
		<img src="img/brand.png" alt="site identity" />
	</a>

	<nav>
		<!-- Menu Items -->
		<ul>
			<li><a href="{{route('menu.index')}}">Menu</a></li>
			<li><a href="{{route('memberships.index')}}">Membership</a></li>
			<li class="brand-holder">
				<a href="{{route('home.index')}}">
					<img src="img/brand.png" alt="Celfie The Salon" />
				</a>
			</li>
			<li><a href="{{route('gallery.index')}}">Gallery</a></li>
			<li><a href="{{route('contact.index')}}">Contact</a></li>
		</ul>

		<!-- Mobile Nav Toggle -->
		<span class="mobile-navigation-toggle">
			<span class="icon">
				<i class="line"></i>
				<i class="line"></i>
				<i class="line"></i>
			</span>

			<span class="menu-toggle-title">Menu</span>
		</span>

		<!-- Search Toggle -->
		<span class="search-toggle">
			<i class="icon-envelope-o"></i>
		</span>

	</nav>
</header>
