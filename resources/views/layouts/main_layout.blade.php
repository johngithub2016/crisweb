<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cris Web</title>

	<!--Bootstrap-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--Larave toquen-->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script>window.laravel = {csrfToken : '{{ csrf_token() }}'} </script>

	<!--Add compilated file app.css-->
	<link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>

	@yield('content')

	<!--Add compilated file app.js-->
	<script src="{{asset('js/app.js')}}"></script>

</body>
</html>