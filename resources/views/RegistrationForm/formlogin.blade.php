<!DOCTYPE html>
<html>
<head>
	<title>LoginForm</title>
</head>
<body>

	<center>
		<h1>Login Form</h1>
		<hr>
		{{--<form action="" method="post">
			@csrf
			Name: <input type="taxt" name="name" id="name">
			<br><br>
			Email: <input type="email" name="email" id="email">
			<br><br>
			Password: <input type="password" name="password" id="password">
			<br><br>
			<input type="submit" value="Submit">
		</form>--}}

		
		<form action="" method="post">
			@csrf
			Name: <input type="taxt" name="name" id="name" value="{{old('name')}}">
			<br><br>
			Email: <input type="email" name="email" id="email" value="{{old('email')}}">
			<br><br>
			Password: <input type="password" name="password" id="password" value="{{old('password')}}">
			<br><br>
			<input type="submit" value="Submit">
		</form>
	</center>

</body>
</html>