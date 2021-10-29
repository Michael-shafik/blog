@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <table class="table table-bordered table-responsive-lg">
            <tr>
                <th>no</th>
                <th>Full Name</th>
                <th>email</th>
                <th>Actions</th>

            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->firstName.' '.$user->lastName}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('profile', $user->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
