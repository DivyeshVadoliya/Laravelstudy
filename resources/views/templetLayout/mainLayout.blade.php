<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>
	@yield('page_name')
	@yield('Header_name')
	@yield('section1')

	{{--@section('layout_1')
		<hr>
		<h1>main Layout Page Section</h1>
	@show
	--}}
	@section('layout_1')
		<hr>
		<h1>main Layout Page Section</h1>
	@endsection

</body>
</html>