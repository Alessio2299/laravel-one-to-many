@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>Create Post</h1>
      <form method="POST" action="{{route('admin.posts.store')}}">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" placeholder="Add Title">
        </div>
        <div class="form-group">
          <label for="url">Url</label>
          <input type="text" class="form-control" name="url" placeholder="Add Url Image">
        </div>
        <div class="form-group">
          <label for="slug">Description</label>
          <textarea type="text" class="form-control" name="slug" placeholder="Add Description" rows="6"></textarea>
        </div>
        <button class="btn btn-success" type="submit">Create</button>
      </form> 
    </div>
@endsection