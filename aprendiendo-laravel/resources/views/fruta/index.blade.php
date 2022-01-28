<h1>Listado de frutas</h1>
<a href="{{action('FrutaController@create')}}" ><h3>Crear Frutas</h3></a>
@if(session('status'))
<p style="background: green; color: white;">
    {{session('status')}}
</p>
@endif
<ul>
    @foreach($frutas as $fruta)
    <li>
        <a href="{{action('FrutaController@detail',['id'=>$fruta->id])}}">{{$fruta->nombre}}</a>    
    </li>
    @endforeach
</ul>