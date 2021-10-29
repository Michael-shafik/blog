@extends('layouts.app')
@section('content')
<?php
$photoPath=URL::asset('/storage/galeryImages/background.jpg');
$user = Auth::user();
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
    <div class="main-body">
        <div class="row gutters-sm" style="margin-top: 50px">
            <div class="col-md-4 mb-3">
                <div class="card" style="border-top-left-radius: 40%">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{$michaelPhotoPath}}" alt="Admin" width="150" style="border-radius: 50%" /><br />
                            <div class="mt-3">
                                {{-- <h4>{{$profile->name}}</h4> --}}
                                <p class="text-secondary mb-1">Full Stack Developer</p>
                                <p class="text-muted font-size-sm"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
                                    <path
                                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                    </path>
                                </svg><a href="https://www.github.com" target="_blank">Github</a>
                            </h6>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-instagram mr-2 icon-inline text-danger">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg><a href="https://www.instagram.com" target="_blank">Instagram</a>
                            </h6>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-facebook mr-2 icon-inline text-primary">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg><a href="https://www.facebook.com" target="_blank">Facebook</a>
                            </h6>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-8" ba>
                <div class="card mb-3">
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="firstName">First name</label>
                                <input type="text" readonly value="{{$user->firstName}}" class="form-control"
                                    id="firstName" name="firstName">
                            </div>

                            <div class="form-group">
                                <label for="lastName">Last name</label>
                                <input type="text" readonly class="form-control" value="{{$user->lastName}}"
                                    id="lastName" name="lastName">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" readonly value="{{$user->email}}" class="form-control"
                                    id="email">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" readonly value="{{$user->password}}" class="form-control"
                                    id="password" name="password">
                            </div>
                    </div>
                    <hr />
                    <a class="btn btn-info" href="{{ route('projects.index') }}" title="Go back">
                        <i class="fas fa-backward "></i>Go home</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
