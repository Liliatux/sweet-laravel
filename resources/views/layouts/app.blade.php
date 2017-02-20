<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="csrf-token" content="{{csrf_token() }}">
	<title>Sweet Lilia</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	@yield('content')
</body>
<script src="{{mix('/js/app.js')}}"></script>
</html>