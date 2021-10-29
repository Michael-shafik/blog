@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">


            <div class="col-lg-12 margin-tb">

                <div class="text-left">
                    <h2>All Posts</h2>
                </div>
                <div class="text-right">
                    <h1>
                        <a class="btn btn-success" href="{{ route('projects.create') }}" title="Create a project"> <i
                                class="fas fa-plus-circle"></i> Create Post
                        </a>
                    </h1>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @foreach ($projects as $project)

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card" style="max-width:500px">
                            <?php
                            $photoPath = URL::asset('/storage/galeryImages/' . $project->photo);
                            ?>
                            <div class="card-text">
                                <div style="padding: 20px">
                                    <p>{{ $project->Description }}</p>
                                    <img src="{{ $photoPath }}" alt="Post Image" height="300" width="400">
                                </div>

                            </div>

                            <div class="card-body">
                                <a class="btn btn-primary" href="{{ route('projects.show', $project->id) }}">View Post</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
    </div>
    </div>
    @endforeach

@endsection
