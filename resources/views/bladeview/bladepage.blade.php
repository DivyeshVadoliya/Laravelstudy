
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Hello this is Blade page</h1>
<hr>
<h1>Time: {{time()}}</h1>
	<h1>SQRT: {{sqrt(49)}}</h1>
<hr>  
   {{--  if-else condition --
	@if($name1=='Divyesh')
		<h1>Hello Divyesh</h1>
	@else
		<h1>Wrong input</h1>
	@endif--}}

	{{-- elseif condition---
	@if($name1=='Divyesh')
		<h1>Hello Divyesh</h1>
	@elseif($name1=='Milan')
		<h1>Hello Milan</h1>
	@else
		<h1>Wrong input</h1>
	@endif --}}
			
	{{-- unless condition ----
	@unless($name1 =='Divyesh')
		<h1>Wrong input</h1>
	@endunless
			--}}
			
	{{-- isset condition---
	@isset($name1)
	<h1>input is {{$name1}}</h1>
	@endisset
		--}}

	{{-- empty condition--
	@empty($name1)
	<h1>{{$name1}}</h1>
	@endempty
		--}}

	{{--Switch Condition--
	@switch('3')
		@case(1)
			<h1>Hello this is 1st</h1>
		@break
		@case(2)
			<h1>Hello this is 2nd</h1>
		@break
		@case(3)
			<h1>Hello this is 3rd</h1>
		@break	
		@defult
			<h1>any value</h1>
		@break
	@endswitch
			--}}

	{{--For loop--
	@for($i =0 ;$i<10 ;$i++)
	@if($i==5)
	@break
	@endif
	<h1>{{$i}}</h1>
	@endfor
		--}}

	
	{{--forelse--
	@forelse($name1 as $name2)
	<h1>{{$name2}}</h1>
	@empty
	<h1>Empty Data</h1>
	@endforelse
			--}}

	{{--foreach--
		@foreach($name1 as $name2)
			{{--@if($name2=='2')
			@continue
			@endif--}}
		{{--	@continue($name2=='3')
			<h1>{{$name2}}</h1>
		@endforeach
			--}}

	{{--once--
	@once
		<h1>hello this is ones code</h1>
	@endonce
			--}}

	{{--PHP--}}
	@php
		$name5='Divyesh';
		echo "hello this is php code ".$name5;
	@endphp
	

</body>
</html>

	





