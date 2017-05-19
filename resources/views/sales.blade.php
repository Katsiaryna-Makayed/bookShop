@extends('layouts.app')

@section('content')
<div class="container">
<h2>Акции</h2> 
<div class="row" id = "row0">
	
		<a  class="good-ref">  
		
		<img src = "{{asset('public/img/sale.jpg')}}"  >
	
		</a>
		<a  class="good-ref">  
		
		<img src = "{{asset('public/img/sale2.png')}}"  width = "300" height="150">
	
		</a>
		
			<!-- 
   				переменные со скидками 5, 10, 15    $sale_5 $sale_10 $sale_15
    -->
</div>
</div>
@endsection
