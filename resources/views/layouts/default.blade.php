<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body data-smooth-scroll="on">
	<div id="page">

		<!-- Search Form Wrapper -->
		@include('forms.searchForm')

		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<!-- Header -->
			@include('includes.header')

			<!-- Main Content -->
			<div class="content-wrapper">
				@yield('content')
			</div>

			<!-- Footer -->
			<footer>
				@include('includes.footer')
			</footer>

		</div>
	</div>

	<!-- Scripts -->
	<script src="js/vendors/jquery.js"></script>
	<script src="js/vendors/modernizr.js"></script>
	<script src="js/vendors/smooth-scroll.js"></script>
	<script src="js/vendors/slick.js"></script>
	<script src="js/vendors/imagesloaded.js"></script>
	<script src="js/vendors/isotope.js"></script>
	<script src="js/vendors/velocity.js"></script>
	<script src="js/vendors/instagram.js"></script>
	<script src="js/vendors/nouislider.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="js/options.js"></script>

</body>
</html>
