@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('partials.sidenavbar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">All Posts
                    </h1>
                    <a href="{{ route('create_post') }}" class="btn btn-primary float-right">Add Post</a>
                </div>
            </main>
        </div>
    </div>
@endsection
