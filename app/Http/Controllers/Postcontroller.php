<?php

namespace App\Http\Controllers;
use DB;
use App\tweet;
use App\comments;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{

//          public function index(){
//              $tweet = new Tweet;
//              $tweets = $tweet->get();
//
//              $tweetsCollection = array();
//              foreach($tweets as $tweet){
//
//                 $newTweet = $tweet;
//                 $comments = Tweet::find($tweet->id)->comments;
//                 $newTweet['comments']= $comments;
//                 $tweetsCollection[] = $newTweet;
//              }
//              $tweets = $tweetsCollection;
//              return view('posts',compact('tweets'));
//
// }

public function index(){

    $tweet = Tweet::find(30);
    $tweetComments = $tweet ->comments;
    var_dump($tweet ->comments);
    //     // $tweets = \DB::table('tweets')->get();
    //     // $data = array('tweets'=>$tweets);
    //     //
    //     // return view('posts1')->with($data);
    $tweets = Tweet::orderby('created_at','desc')->get();
    return view('posts', compact('tweets','tweetComments'));
}

public function show($id){
   $tweet = tweet::find($id);
   var_dump($id);
   return view('singletweets',compact('tweet'));
}

public function show2(tweets $tweet){
    return $tweet;
}

public function create(Request $request){
    $tweetsmodel = new tweet;
    $tweetsmodel ->user_id = 2;
    $tweetsmodel->tweets= $request ->tweet;
    $tweetsmodel->save();
    $tweets = Tweet::orderby('created_at','desc')->get();
    // $tweets = tweets::get();
    // $tweets = \DB::table('tweets')->get()
    return view('posts',compact('tweets'));
}

public function comment(Request $request){
    $commentsmodel = new comments;
    $commentsmodel ->user_id = $request->user_id;
    // $commentsmodel->post_id = $request ->tweet_id;
    $commentsmodel->tweet_id = $request ->tweet_id;
    $commentsmodel->comments= $request ->comment;
    $commentsmodel->save();
    $tweets = Tweet::orderby('created_at','desc')->get();
    // $tweets = tweets::get();
    // $tweets = \DB::table('tweets')->get();
    return view('posts',compact('tweets','comments'));
}

public function store(){
    return view('posts');
}

public function destroy($id){
    return view('posts');
}

}
