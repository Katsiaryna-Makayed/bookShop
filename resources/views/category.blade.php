@extends('layouts.app')

@section('content')
<div class="container">
  
<h2>{{$category_one->name}}</h2> <!-- взять из бд-->  

	<div class="row">
	
	@foreach($category as $one)
		<a href="{{url('genre/'.$one->id)}}">
			<img src = "{{asset('/public/uploads'.$one->picture)}}" alt = "{{$one->name}} картинка" width="150"  height="150">
		</a>
		<p>{{$one->name}}</p>
    @endforeach

<!--
	<img src = "public/img/category1.jpg" alt = "Картинка" height="150" width="150">
	<p>Подкатегория1</p>
	
	<img src = "public/img/category1.jpg" alt = "Картинка" height="150" width="150">
	<p>Подкатегория2</p>

	<img src = "public/img/category1.jpg" alt = "Картинка" height="150" width="150">
	<p>Подкатегория1</p>
-->
	<div>
  
        
</div>
@endsection
