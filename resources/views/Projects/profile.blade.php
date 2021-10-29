@extends('layouts.app')
@section('content')
<?php
$photoPath=URL::asset('/storage/galeryImages/background.jpg');

//   $user->id = $request->input('id');
$michaelPhotoPath=URL::asset('/storage/galeryImages/'.$user->photo);?>

<div class="" style='text-align:center;background-image: url({{$photoPath}});height:400px;' id="mainpage"
    align="center">

    <div class="carousel-caption"><img src="{{$michaelPhotoPath}}" class="rounded-circle " alt="profile Image"
            style="height: 250px;"></div>
</div>
<br><br><br><br><br><br><br>

<h2 style="text-align: center;color: rgb(19, 10, 136);">{{$user->name}}</h2>


</div>

<div class="container">
    <form action="{{ route('profile.update',$user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="firstName">First name</label>
                <input type="text" value="{{$user->firstName}}" class="form-control" id="firstName" name="firstName">
            </div>

            <div class="form-group col-md-6 ">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" value="{{$user->lastName}}" id="lastName" name="lastName">
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{$user->email}}" class="form-control" id="email">
            </div>
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" value="{{$user->password}}" id="password" name="password">
            </div>

            <div class="form-group col-md-6 ">
                <label for="photo">Photo</label>
                <input name="photo" class="form-control form-control-lg" type="file">
            </div>
        </div>

        <br>
        <button type="submit" class="btn btn-success">Save Changes</button>
        <a class="btn btn-info" href="{{ route('projects.index') }}" title="Go back">
            <i class="fas fa-backward "></i>Go home</a>
    </form>
</div>
</div>

</div>
</div>
</div>
</div>
</div>


@endsection
