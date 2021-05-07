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
              @foreach ($posts as $post)
              <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->category}}</td>
                <td>{{$post->user_email}}</td>
                <td>
                  @can('update',$post)
                  <a href="/post/edit/{{$post->id}}" type="button" class="btn btn-primary">Edit</a>
                  @endcan
                  @can('delete', $post)
                  <a href="/post/delete/{{$post->id}}" type="button" class="btn btn-danger">Delete</a>
                  @endcan
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
      <div style="width:100%;display:flex;justify-content: center">
        {{ $posts->links() }}
      </div>
</div>
@endsection