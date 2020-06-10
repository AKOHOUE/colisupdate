<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	    <title>Globally Express</title>

		<!-- Favicon -->
	    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/back/img/favicon.png') }}">

		<!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="{{ asset('assets/back/css/bootstrap.min.css') }}">

		<!-- Fontawesome CSS -->
	    <link rel="stylesheet" href="{{ asset('assets/back/css/font-awesome.min.css') }}">

		<!-- Feathericon CSS -->
	    <link rel="stylesheet" href="{{ asset('assets/back/css/feathericon.min.css') }}">

		<!-- Datatables CSS -->
		<link rel="stylesheet" href="{{ asset('assets/back/plugins/datatables/datatables.min.css') }}">

		<!-- Main CSS -->
	    <link rel="stylesheet" href="{{ asset('assets/back/css/style.css') }}">

	    @yield('stylesheets')
	</head>

	<body>
	    <div class="main-wrapper">
	    	@if($auth == false)
				@include('back.layouts.header')
				@include('back.layouts.menu')
			@endif

			<!-- Page Wrapper -->
	        <div class="page-wrapper">
	            @yield('content')
			</div>
	    </div>

	    <script src="{{ asset('assets/back/js/jquery-3.2.1.min.js') }}"></script>

		<!-- Bootstrap Core JS -->
	    <script src="{{ asset('assets/back/js/popper.min.js') }}"></script>
	    <script src="{{ asset('assets/back/js/bootstrap.min.js') }}"></script>

		<!-- Slimscroll JS -->
	    <script src="{{ asset('assets/back/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

		<!-- Datatables JS -->
		<script src="{{ asset('assets/back/plugins/datatables/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/back/plugins/datatables/datatables.min.js') }}"></script>

		<!-- Custom JS -->
		<script  src="{{ asset('assets/back/js/script.js') }}"></script>
	    @yield('scripts')
	</body>
</html>
