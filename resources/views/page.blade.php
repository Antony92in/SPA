<!DOCTYPE html>
<html>
<head>
	<title>SPA</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</script>
</head>
<body>
	<div id="app">
		@auth
		<maincom userid="{{ Auth::user()->id }}"></maincom>
		<a class="logout" href="{{ route('logout') }}"
		onclick="event.preventDefault();
		document.getElementById('logout-form').submit();">
		{{ __('Logout') }}
	</a>

	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		@csrf
	</form>
	@endauth
</div>
<script type="text/javascript" src="js/app.js"></script>
<style type="text/css">
	.logout{
		margin-left: 50%;
		margin-top: 50px;
	}
</style>
</body>
</html>