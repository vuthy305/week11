@extends('layouts.app')

@section('content')
  <div class="container">
    <center><h2>Categories Form Delete</h2></center>
        <form action="/category/{{$data->id}}" method="POST">
            @method('DELETE') 
            @csrf 
            <div class="form-group">
                <label for="categoryname">Catgory Name</label>
                <input type="text" class="form-control" id="categoryname" placeholder="Input Update Category Name" name="categoryname" value="{{$data->categoryname}}" readonly >
                <small style="color: red">@error('categoryname'){{$message}}@enderror</small>
            </div>
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
  </div>
@endsection