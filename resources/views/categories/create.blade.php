@extends('layouts.app')

@section('content')
  <div class="container">
    <center><h2>Categories Form Submit</h2></center>
    <form action="/category" method="POST">
        @csrf 
        <div class="form-group">
        <label for="categoryname">Catgory Name</label>
        <input type="text" class="form-control" id="categoryname" placeholder="Enter Category Name" name="categoryname">
        <small style="color: red">@error('name'){{$message}}@enderror</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection