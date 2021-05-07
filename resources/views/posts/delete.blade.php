@extends('layouts.app')

@section('content')
  <div class="container">
    <center><h2>Post Form Delete</h2></center>
    <form action="/posts/{{$data->id}}" method="POST">
      @method('DELETE') 
      @csrf 
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="{{$data->title}}" readonly>
        <small style="color: red">@error('title'){{$message}}@enderror</small>
      </div>
      <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" rows="10" cols="30" name="description" readonly>{{$data->description}}</textarea>
          <small style="color: red">@error('description'){{$message}}@enderror</small>
      </div>
      <div class="form-group">
          <label for="category">Category</label>
          <input type="text" class="form-control" id="category" name="category" value="{{$data->category}}" readonly>
          <small style="color: red">@error('category'){{$message}}@enderror</small>
      </div>
      <div class="form-group">
          <label for="user_email">User Email</label>
          <input type="email" class="form-control" id="user_email" name="user_email" value="{{$data->user_email}}" readonly>
          <small style="color: red">@error('user_email'){{$message}}@enderror</small>
      </div>
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
  </div>
@endsection