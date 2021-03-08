 @extends('plantilla')

       @section('t')
       		Productos
       @endsection



       @section('c')
       		@if($producto->count())

       			<p>{{$producto->count()}}</p>
       			
       			@foreach($producto as $p)
       				<p>{{$p->nombre}}</p>
       				<p>{{$p->precio}}</p>
       			@endforeach

       		@endif
       @endsection