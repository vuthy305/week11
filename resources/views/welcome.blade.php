@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <a href="{{route('category')}}" class="btn btn-primary btn-lg active col" role="button" aria-pressed="true">Category</a>
            <a href="{{route('post')}}" class="btn btn-primary btn-lg col" role="button" aria-pressed="true">Post</a>
        </div>
    </div>
@endsection