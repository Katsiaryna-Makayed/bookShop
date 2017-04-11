@extends('layouts.app')

@section('content')
<div class="container">
	
	<div align='center'> 
		<h3> {{$cat_number->name}}</h2> 
	</div> 
	<div class="row-fluid col-md-12"> 
		<div class="col-md-4"> 
			
		</div> 
		<div class="col-md-8"> 
			<p>

					здесь будут выводиться книжки красивенько
					для этой одной категории 


			</p> 
		</div> 
	</div> 
	<hr> 

</div>
@endsection
