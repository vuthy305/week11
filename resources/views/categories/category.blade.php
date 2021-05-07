@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card" style="width: 100%">
            <div class="card-header">
                <h6 class="float-left">Category</h6>
                <a href="{{route('createcategory')}}" type="button" class="btn btn-primary float-right">Add Category</a>
            </div>
            <table class="table table-striped" style="width:100%;">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">CategoryName</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($category as $item)
                    <tr>
                      <th scope="row">{{$item->id}}</th>
                      <td>{{$item->categoryname}}</td>
                      <td><a href="/category/edit/{{$item->id}}" type="button" class="btn btn-primary">Edit</a><a href="/category/delete/{{$item->id}}" type="button" class="btn btn-danger">Delete</a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
    </div>
@endsection