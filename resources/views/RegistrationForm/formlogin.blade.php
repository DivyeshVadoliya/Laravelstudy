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
			@error('name')
				<span>{{$message}}</span>
			@enderror
			<br><br>
			Email: <input type="email" name="email" id="email" value="{{old('email')}}">
			@error('email')
				<span>{{$message}}</span>
			@enderror
			<br><br>
			Password: <input type="password" name="password" id="password" value="{{old('password')}}">
			@error('password')
				<span>{{$message}}</span>
			@enderror
			<br><br>
			<input type="submit" value="Submit">
		</form>


		{{--@if($errors->any())
		<h1>{{$errors}}</h1>
		@endif--}}


		@if(isset($data))
			@foreach($data as $item)
				<h1>{{$item}}</h1>
			@endforeach
		@endif

	</center>

</body>
</html>