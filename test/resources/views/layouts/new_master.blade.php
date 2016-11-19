<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>todo list</title>

<link rel="stylesheet" href="css/app/css">
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/todo.js"></script>

</head>
<body>
		<div class="header">
			
		</div>	

		<div class="container">


		<div class="left_menu pull-left">
			
			@include('include.left_menu')
		</div>

		<div class="container">
			
			@yield('content')
		</div>

	</div>

	<script>$(todo.init);</script>
	
</body>
</html>