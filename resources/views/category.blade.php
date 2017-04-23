@extends('layouts.app')

@section('content')
<div class="container">
  
<h2>{{$category_one->name}}</h2> <!-- взять из бд-->  

	<div class="row">
	
	@foreach($category as $one)
		<a href="{{url('genre/'.$one->parent_id.'/'.$one->id)}}">
			<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}} картинка" width="150"  height="150">
		</a>
		<p>{{$one->name}}</p>
    @endforeach
</div>
</div>

<!--
	<img src = "public/img/category1.jpg" alt = "Картинка" height="150" width="150">
	<p>Подкатегория1</p>
	
	<img src = "public/img/category1.jpg" alt = "Картинка" height="150" width="150">
	<p>Подкатегория2</p>

	<img src = "public/img/category1.jpg" alt = "Картинка" height="150" width="150">
	<p>Подкатегория1</p>
-->

@endsection
