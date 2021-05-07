@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <a href="{{route('category')}}" class="btn btn-primary btn-lg active col" role="button" aria-pressed="true">Category</a>
                            <a href="{{route('post')}}" class="btn btn-primary btn-lg col" role="button" aria-pressed="true">Post</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
