<h1>Hello this is Include page 1</h1>
<h1>Data is {{$data1}}</h1>
<hr>
{{--@include('IncludeView.IncludeView2',['data2'=>'Milan']);--}}

{{--Inculdeif when view2 is not define then not exclude--
@includeif('IncludeView.IncludeView3',['data2'=>'Milan']);
			--}}

{{--includeWhen is boolan express when $data1 is true then excude and $data flase then not excude--
@includeWhen($data1,'IncludeView.IncludeView2',['data2'=>'Milan'])
			--}}

{{--includeUnless is boolan express when $data1 is true then not excude and $data flase then excude--
@includeUnless($data1,'IncludeView.IncludeView2',['data2'=>'Milan'])
			--}}

@each('IncludeView.IncludeView2',$studentData1,'studentData2','IncludeView.Nostudent');