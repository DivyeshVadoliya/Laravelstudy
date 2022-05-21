
<h1>This is Study Component Page</h1>
<hr>
@php
		$stu='Student Data1';
		$stu1='Student Data2'
@endphp
{{-- Component file----
<x-component-study data1='Divyesh' :student=$stu class='myclass' >
</x-component-study>
--}}
{{--
<x-component-study data1='Divyesh123' :student=$stu1 class='myclass2' />
			--}}

{{--Anooymos component is single component file--
<x-anonymosstudy data5="AnonymosStudy Data" />
			--}}
