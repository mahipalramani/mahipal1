@extends('layouts.app')


@section('content')

    <div class="container"></div>
        <h3>{{$photo->title}}</h3>
        <p>{{$photo->description}}</p>
        <form action="{{route('photo-destroy',$photo->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" name="button" class="btn btn-danger float-right">Delete</button>
        </form>

        <a href="{{route('album-show',$photo->album->id)}}" class="btn btn-info">Go Back</a>
        <hr>
        <img src="/public/albums/{{$photo->album_id}}/{{$photo->photo}}" alt=" {{$photo->photo}}">      
        <small>Size:{{$photo->size}}</small>     
    </div>

@endsection