<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Admin</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<LINK HREF="images/favicon_1.ico" rel="shortcut icon" type="image/x-icon" />
		<link rel="stylesheet" href="{{asset('//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css')}}" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/css/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="{{asset('backend/css/fonts.googleapis.com.css')}}" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{asset('backend/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="{{asset('backend/css/ace-skins.min.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/css/ace-rtl.min.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/css/addmore.css')}}" />
		<!-- getlistvaluebox and checkall function-->
		<script type="text/javascript" src="{{asset('js/common.js')}}"></script>

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="{{asset('backend/js/ace-extra.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('//code.jquery.com/jquery-latest.min.js')}}"></script>
		<!-- <script type="text/javascript" src="{{asset('//code.jquery.com/jquery-1.12.4.js')}}"></script> -->
		<script src="{{asset('//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js')}}"></script>
		<link rel="stylesheet" type="text/css" href="{{asset('css/lightbox.css')}}" media="screen" />
		<script type="text/javascript" src="{{asset('backend/js/lightbox.js')}}"></script>
		<script type="text/javascript" src="{{asset('//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js')}}"></script>
		<script>
		$(document).ready(function() {
			$('#dynamic-table').DataTable( {
			} );
		} );
		</script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default ace-save-state">
	<div class="navbar-container ace-save-state" id="navbar-container">
		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
			<span class="sr-only">Toggle sidebar</span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>
		</button>

		@include('backend.layout.header')
		@include('backend.layout.sidebar')
		<div class="main-content">
			<div class="main-content-inner">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
			@yield('content')
			<!-- /.main-content -->
		<div class="footer">
			@include('backend.layout.footer')
		</div>

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>		
			</div><!-- /.main-container -->
		</div>
		<!-- basic scripts -->

		<!--[if !IE]> -->
		

		<!-- <![endif]-->

		<!--[if IE]>
<script src="js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='backend/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="{{asset('backend/js/ace-elements.min.js')}}"></script>
		<script src="{{asset('backend/js/ace.min.js')}}"></script>

		<!-- inline scripts related to this page -->
	</body>
</html>
