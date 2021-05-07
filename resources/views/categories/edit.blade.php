@extends('layouts.app')

@section('content')
  <div class="container">
        <center><h2>Categories Form Update</h2></center>
        <form action="/category/{{$data->id}}" method="POST">
        @method('PUT') 
        @csrf 
        <div class="form-group">
            <label for="categoryname">Catgory Name</label>
            <input type="text" class="form-control" id="categoryname" placeholder="Input Update Category Name" name="categoryname" value="{{$data->categoryname}}">
            <small style="color: red">@error('name'){{$message}}@enderror</small>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
  </div>
@endsection