<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('profile');
    }
    public function userFollowers(){
        var_dump('userFollowers');
    }

    public function getotherUser($id, $name){
        var_dump('other user'. $id . " ". $name);
    }
}
