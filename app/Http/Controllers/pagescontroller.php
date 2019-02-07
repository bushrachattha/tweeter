<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('validate_user_agent');
    // }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function terms(){

        return view('terms');
    }

    public function profile(){

        return view('profile');
    }
    public function bushra(){

        return view('bushra');
    }
    public function megha(){

        return view('megha');
    }
    public function jordan(){

        return view('jordan');
    }
    public function Brittany(){

        return view('Brittany');
    }
    public function Rachel(){

        return view('Rachel');
    }
    public function mosa(){

        return view('mosa');
    }

}
