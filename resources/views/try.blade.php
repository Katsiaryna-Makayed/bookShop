@extends('layouts.app')

@section('content')
<div class="container">
	<h2>{{$book->name}}</h2> <!-- взять из бд-->  

	<div class="row">

		<img src = "{{asset('/public/uploads'.$book->picture)}}" alt = "{{$book->name}} картинка" width="150"  height="150">
		<p>Цена: {{$book->price}}</p>
		<p>Автор: {{$book->author}}</p>


		<p>Описание: {{$book->description}}</p>


	

  
        
</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Другие книги автора </h3>
			</div>
			<div class="panel-body">
				<div class="row">
				@foreach($author_books as $one)
					<img src = "{{asset('/public/uploads'.$one->picture)}}" alt = "{{$one->name}}" width="150"  height="150">
      			@endforeach
				</div>
			</div>
		</div>
</div>

@endsection
