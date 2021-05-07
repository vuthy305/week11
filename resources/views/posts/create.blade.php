@extends('layouts.app')

@section('content')
  <div class="container">
    <center><h2>Post Form Submit</h2></center>
    <form action="/posts" method="POST">
       @csrf 
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
        <small style="color: red">@error('title'){{$message}}@enderror</small>
      </div>
      <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" rows="10" cols="30" name="description"></textarea>
          <small style="color: red">@error('description'){{$message}}@enderror</small>
      </div>
      <div class="form-group">
        <label for="category_id">CategoryID</label>
            <select class="form-control" id="category_id" name="category_id">
                <option value="None">None</option>
                @foreach ($category as $item)
                    <option value="{{$item->categoryname}}">{{$item->categoryname}}</option> 
                @endforeach       
            </select>
      </div>
      <div class="form-group">
          <label for="user_email">User Email</label>
          <input type="email" class="form-control" id="user_email" name="user_email" value="{{Auth::user()->name}}" readonly>
          <small style="color: red">@error('user_email'){{$message}}@enderror</small>
      </div>
      <button type="submit" class="btn btn-primary">Upload</button>
    </form>
  </div>
@endsection