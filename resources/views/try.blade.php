@extends('layouts.app')

@section('content')
<div class="container">
	<h2>{{$book->name}}</h2> <!-- взять из бд-->  

	<div class="row">

		<img src = "{{asset('/public/uploads'.$book->picture)}}" alt = "{{$book->name}} картинка" width="150"  height="150">
		<p>Цена: {{$book->price}}</p>
		<p>Автор: {{$book->author}}</p>


		<p>Описание: {{$book->description}}</p>


	<div>
  
        
</div>
@endsection
