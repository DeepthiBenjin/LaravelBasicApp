<!DOCTYPE html>
<html>
<head>
	<title>Basic Website</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
@include('inc.navbar')	
<div class="container">
	@if(Request::is('/'))
	@include('inc.showcase')
	@endif
	<div class="row">
	<div class="col-md-8 col-lg-8">
	@include('inc.message')
    @yield ('content')
	</div>
	<div class="col-md-4 col-lg-4">
    @section('sidebar')
<div class="well">
	<h3>this is a sidebar</h3>
	@show
</div>
	</div>
</div>
</div>

<footer id="footer" class="text-center">
	<p>copyright 2019</p>
</footer>

</body>
</html>