<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sweet Lilia</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<div class="ui centered two columns grid">
		@yield('content')
	</div>
</body>
<script src="{{mix('/js/app.js')}}"></script>
</html>