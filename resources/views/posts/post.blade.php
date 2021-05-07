@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card" style="width: 100%">
        <div class="card-header">
            <h6 class="float-left">Post</h6>
            <a href="{{route('createpost')}}" type="button" class="btn btn-primary float-right">Add Post</a>
        </div>
        <table class="table table-striped" style="width:100%;">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">CategoryType</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>This is me</td>
                <td>This is me This is me This is meThis is meThis is meThis is meThis is meThis is meThis is me meThis is meThis is memeThis is meThis is memeThis is meThis is memeThis is meThis is memeThis is meThis is memeThis is meThis is memeThis is meThis is memeThis is meThis is memeThis is meThis is memeThis is meThis is memeThis is meThis is memeThis is meThis is memeThis is meThis is me </td>
                <td>Sports</td>
                <td>Visal</td>
                <td><a href="" type="button" class="btn btn-primary">Edit</a><a href="" type="button" class="btn btn-danger">Delete</a></td>
              </tr>
            </tbody>
          </table>
      </div>
</div>
@endsection