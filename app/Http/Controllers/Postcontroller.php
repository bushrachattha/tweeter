<?php

namespace App\Http\Controllers;
use DB;
use App\tweets;
use App\comment;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function index(){

        // $tweets = \DB::table('tweets')->get();
        // $data = array('tweets'=>$tweets);
        //
        // return view('posts1')->with($data);


        $tweets = Tweets::orderby('created_at','desc')->get();
        return view('posts1', compact('tweets'));
    }




       public function show($id){
           $tweet = tweets::find($id);

           return view('single-tweet',compact('tweet'));
       }
public function show2(tweets $tweet){
return $tweet;

}


    public function create(Request $request){
$tweetsmodel = new tweets;
$tweetsmodel ->user_id = 2;
$tweetsmodel->tweets= $request ->tweet;
$tweetsmodel->save();

    $tweets = Tweets::orderby('created_at','desc')->get();
// $tweets = tweets::get();

        //
        // $tweets = \DB::table('tweets')->get();
        return view('posts1',compact('tweets'));
    }
    public function comment(Request $request){
$commentsmodel = new comments;
$commentsmodel ->user_id = $request->user_id;
$commentsmodel->post_id = $request ->tweet_id;
$commentsmodel->comments= $request ->comment;
$commentsmodel->save();

    $tweets = Tweets::orderby('created_at','desc')->get();
// $tweets = tweets::get();

        //
        // $tweets = \DB::table('tweets')->get();
        return view('posts1',compact('tweets'));
    }
    public function store(){
        return view('posts');
    }
    public function destroy($id){
        return view('posts');
    }
}
