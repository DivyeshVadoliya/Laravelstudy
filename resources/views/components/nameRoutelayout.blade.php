<!DOCTYPE html>
<html>
<head>
	<title>{{$title}}</title>
</head>
<body>
		<h1>{{$header}}</h1>
		<hr>
		<ul>
			<li><a href="{{route('homeroute')}}">Home</a></li>
			<li><a href="{{route('dashbordroute',['id'=> 3])}}">Dashbord</a></li>
			<li><a href="{{route('adminroute')}}">Admin</a></li>
			<li><a href="{{route('aboutroute')}}">About</a></li>
		</ul>

</body>
</html>