

@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            @if(count($likes) == 0)
            <h2>No has dado ningún Like</h2>
            @else
            <h1>Listado de Likes</h1>
            <hr>
            @foreach($likes as $like)
            
                @include('includes.image',['image' => $like->image])
            @endforeach
            @endif
        </div>
    </div>
    
    <div class="clearfix"></div>
            {{$likes->links()}}
</div>
@endsection
