<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Projex</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Generate favicons from http://realfavicongenerator.net/ -->
	<link rel="shortcut icon" href="public/ico/favicon.ico">

	<!-- Styles -->
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<style>
		.list-enter-active, .list-leave-active {
			transition: all 1s;
		}
		.list-enter, .list-leave-active {
			opacity: 0;
			transform: translateY(30px);
		}
	</style>

	<!--[if lt IE 9]>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->

	<script>
		window.Laravel = <?php echo json_encode([
				'csrfToken' => csrf_token(),
		]); ?>
	</script>

	<!-- Page specific scripts -->
	@yield('page_scripts')
</head>

<body>
	<div class="wrapper">
