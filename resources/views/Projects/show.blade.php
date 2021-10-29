@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-left">
                {{-- <h2> {{ $project->name }}</h2> --}}
            </div>
            <div class="text-right">
                <a class="btn btn-primary" href="{{ route('projects.index') }}" title="Go back"> Go back</a>

            </div>
            <br>
            <br>
            <br>
        </div>
    </div>

    <div class="row">
        <div class="card" style="max-width:500px" s>
            <div class="form-group">
                <p> {{$project->Description}}</p>
                <?php $photoPath=URL::asset('/storage/galeryImages/'.$project->photo);  ?>
                <img src="{{$photoPath}}" alt="Post Image" height="300">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created:</strong>
                {{ date_format($project->created_at, 'jS M Y') }}
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('projects.destroy',$project->id) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('projects.edit', $project->id) }}">Edit POST</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Post</button>
            </form>
        </div>
    </div>


    <div>

        <ul style="list-style-type: none;margin-left:-35px;margin-top:60px">
            @foreach ($project->comments as $comment)
            <?php
             $user = DB::table('users')->where('id', $comment->user_id)->first();
             $userPhotoPath=URL::asset('/storage/galeryImages/'.$user->photo);

            ?>

            <li>
                <div>
                    <img src="{{$userPhotoPath}}" width="80" height="80" style="border-radius: 50%;padding-right:15px">
                    {{$user->name}}

                </div>

                          <form action="{{ route('comments.destroy',$comment->id) }}" method="POST">
                            <p style="margin-left: 90px; margin-top: -15px;">
                                {{$comment->Comment}}
                                </p>
                            <a class="btn btn-primary" href="{{ route('comments.edit', $comment->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button class=" btn btn-danger" type="submit">Delete</button>
                            </form>

            </li>
            @endforeach
        </ul>
    </div>
    <footer>
        <form action="{{ route('postComment') }}" method="POST">
            @csrf
            <input type="hidden" name="project_id" value="{{$project->id}}">
            <div>
                <input type="text" name="Comment" placeholder="write your comment here!" class="form-control">
                <br>
                <button type="submit" class="btn btn-info">Add Comment</button>
            </div>
        </form>
    </footer>

</div>
@endsection
