@extends('layouts.app')

@section('content')
<h3>Новые поступления</h3> 
<hr>

					
				@foreach($new_books as $one)										
					<div class="col-sm-3 ">				
						<a  href="{{url('book/'.$one->id)}}">
							<div class="good-ref-big">						
								<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}}" width="160"  height="220">
								<div class = "descr-name">{{$one->name}}</div>
								<div class = "descr-author">{{$one->authors->fio}}</div>
								<div class = "descr-price">{{$one->price}}</div>
						
							</div>
						</a>
					</div>
	      		@endforeach    			
	
	

	

@endsection
