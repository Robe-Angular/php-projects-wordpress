<h1>{{$titulo}}</h1>
<p>Acción index del controlador PeliculasController</p>
@if(isset($pagina))
<h3>La página es {{$pagina}}</h3>
@endif
<a href="{{route('detalle.pelicula', ['id' => 12])}}">Ir al detalle</a>