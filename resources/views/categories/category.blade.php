@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card" style="width: 100%">
            <div class="card-header">
                <h6 class="float-left">Category</h6>
                <a href="" type="button" class="btn btn-primary float-right">Add Category</a>
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
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td><a href="" type="button" class="btn btn-primary">Edit</a><a href="" type="button" class="btn btn-danger">Delete</a></td>
                  </tr>
                </tbody>
              </table>
          </div>
    </div>
@endsection