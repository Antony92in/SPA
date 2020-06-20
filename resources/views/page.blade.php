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
		<maincom login="{{ Auth::user()->name }}"></maincom>
	    @endauth

</div>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>