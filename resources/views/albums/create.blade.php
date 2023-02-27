@extends('layouts.app')

@section('content')
    
    <div class="container">
    <h2>create a new albums</h2>
    <form method="post" action="{{route('album-store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name"> Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="description"> Discription</label>
            <input type="text" name="description" class="form-control" id="description" placeholder="Enter discription">
        </div>
        <div class="form-group">
            <label for="cover-image"> Cover image</label>
            <input type="file" name="cover-image" class="form-control" id="cover-image">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection

