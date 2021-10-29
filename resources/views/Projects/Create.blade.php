@extends('layouts.app')

@section('content')

<div class="container">
    <div class="text-center">
        {{-- <h1 style="color: rgb(77, 78, 77); text-align: center;"> Create a New Post </h1> --}}
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row">
        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <h1 style="color: rgb(93, 93, 97)"> <strong>Whats on your mind?</strong></h1>
                        <textarea class="form-control" style="height:150px" rows="9" name="Description"
                            placeholder="Whats on your mind?"></textarea>
                    </div>
                    <div class="form-group">
                        <input name="photo" class="form-control form-control-lg" type="file">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success pull-left">Submit</button>
                    <a class="btn btn-primary" href="{{ route('projects.index') }}" title="Go back">
                        <i class="fas fa-backward "></i>Go back </a>
                </div>
            </div>
        </form>
    </div>
    @endsection
