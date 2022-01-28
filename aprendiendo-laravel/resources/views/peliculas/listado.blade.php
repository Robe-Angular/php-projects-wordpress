@include('includes.header')
@include('includes.header')
@include('includes.header')
<!--Imprimir por pantalla-->
<h1>{{$titulo}}</h1>
<h2>{{$listado[2]}}</h2>
<p>{{date('Y')}}</p>
<!--Comentarios-->
<!--Esto es un comentario-->
<?php
//Esto es un comentario
?>

{{--Esto es un comentario blade--}}

<!--Mostrar si existe-->
<!--<?= isset($director) ? $director : 'no hay director'; ?>-->
{{$director ?? 'No hay ningún director'}}

<!--Condicionales-->
@if($titulo && count($listado) >=2)
    <h1>El titulo existe y es este: {{$titulo}}, el listado es mayor a 2</h1>
@elseif($titulo)
    <h1>El titulo existe, el listado no es mayor a 5</h1>
@else
    <h1>El título no existe</h1>
@endif

@for($i =0; $i<= 20; $i++)
    El número es: {{$i}}<br>
@endfor
<hr>
<?php $contador= 1;?>
@while($contador < 50)
    @if($contador % 2 ==0)
    Número par: {{$contador}}<br>
    @endif
    
    <?php $contador++; ?>
@endwhile

@foreach($listado as $pelicula)
<p>{{$pelicula}}</p>
@endforeach

@include('includes.footer')
