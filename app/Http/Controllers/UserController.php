<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function select_all()
    {
        $users = DB::select('select * from users');
        return view('projects.users', ['users' => $users]);

        // $users = user::all();
        // return view('projects.users')->$users;
        // foreach ($users as $user) {
        //     echo $user->id . "<br>";
        //     echo  $user->name . "<br>";
        //     echo $user->email . "<br>";
        // }
    }

    public function destroy($id)
    {
        $user = user::find($id);
        $user->delete();
        $users = DB::select('select * from users');
        return view('projects.users', ['users' => $users]);
    }
}
