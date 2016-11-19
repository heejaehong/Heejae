<!DOCTYPE html>
<html eng="en">

<head>
	<meta charset="UTF-8">
	<title>Construnction company</title>
	<script src="js/jQuery-1.12.4/jquery-1.12.4.min.js"></script>
	<link href="js/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

<div class="container-fluid nopadding">	
	
@include('layouts.home_header')

@yield('body')

@include('layouts.footer')

</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jQuery-1.12.4/jquery-1.12.4.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>


</body>

</html>
