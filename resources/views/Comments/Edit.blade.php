@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-left">
                <h1>Edit Comment</h1>
            </div>
            <div class="text-right">
                <h3>
                    <a class="btn btn-success" href="{{ route('projects.index') }}"> <i
                            class="fas fa-plus-circle"></i>Go Back
                    </a></h3>
            </div>
        </div>
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

    <form action="{{ route('comments.update', $comment->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Comment:</strong>
                        <input name="project_id" type="hidden" value="{{$comment->project_id}}">
                        <textarea class="form-control" style="height:150px" name="Comment"
                            placeholder="Detail"> {{$comment->Comment}}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
