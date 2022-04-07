@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>Edit Post</h1>
      <form method="POST" action="°">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" placeholder="Add Title" value="{{old('title', $post->title)}}">
        </div>
        <div class="form-group">
          <label for="url">Url</label>
          <input type="text" class="form-control" name="url" placeholder="Add Url Image" value="{{old('title', $post->url)}}">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea type="text" class="form-control" name="description" placeholder="Add Description" rows="6">{{old('title', $post->description)}}</textarea>
        </div>
        <button class="btn btn-success" type="submit">Create</button>
      </form> 
    </div>
@endsection