@extends('layouts.app')

@section('content')
    
    <div class="container">
    <h2>uplode new photos</h2>
    <form method="post" action="{{route('photo-store')}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="album-id" value="{{$albumId}}">
        <div class="form-group">
            <label for="title"> Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="description"> Discription</label>
            <input type="text" name="description" class="form-control" id="description" placeholder="Enter discription">
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" class="form-control"name="photo" id="cover-image">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection

