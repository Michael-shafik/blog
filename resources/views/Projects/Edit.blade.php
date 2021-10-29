@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-left">
                <h1>Edit Post</h1>
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

    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <textarea class="form-control" style="height:150px" name="Description"
                            placeholder="Detail"> {{$project->Description}}</textarea>
                            <div style="padding: 15px">
                                <?php $photoPath=URL::asset('/storage/galeryImages/'.$project->photo);  ?>
                                <img src="{{$photoPath}}" alt="Post Image"  height="300"width="450">
                            </div>
                            <div class="form-group">
                                <input name="photo" class="form-control form-control-lg" type="file">
                            </div>
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
