<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ URL::asset('css/profile.css') }} ">

        <title></title>
    </head>
    <body>

<div class="card">
  <img src="https://1.bp.blogspot.com/-D12TaqdjUCQ/V_kN2RwuhcI/AAAAAAAAAxI/E7GLYz71bREh5sy8diU1qnrcXHsYolaNgCLcB/s1600/girl-coffee-mood-wallpaper-44049-45148-hd-wallpapers.jpg" alt="Bushra" style="width:100%">
  <h1>megha</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Edmonton</p>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <p><button>follow</button></p>
</div>

<div class="card">
  <img src="http://www.latestseotutorial.com/wp-content/uploads/2017/04/images-for-free-best-dp.jpg" alt="Bushra" style="width:100%">
  <h1>Jordan</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Edmonton</p>

  <a href="Jordan"><i class="fa fa-twitter"></i></a>

  <p><button>follow</button></p>
</div>

<div class="card">
  <img src="https://1.bp.blogspot.com/-genONCiZwGQ/Wq3WnygwG9I/AAAAAAAAA1k/VOxB51dKhDsjbPVCW6DmQ1qOhofBhdw3QCEwYBhgL/s1600/attitude%2Bboy%2Bdp.jpg" alt="Bushra" style="width:100%">
  <h1>mosa</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Edmonton</p>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <p><button>follow</button></p>
</div>


</body>
</html>


<?php

namespace App\Http\Controllers;
use DB;
use App\tweet;
use App\comments;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{




    public function index(){
               $tweet = new Tweet;
               $tweets = $tweet->get();

               $tweetsCollection = array();
               foreach($tweets as $tweet){

                  $newTweet = $tweet;
                  $comments = Tweet::find($tweet->id)->comments;
                  $newTweet['comments']= $comments;
                  $tweetsCollection[] = $newTweet;
              }
     $tweet = Tweet::find(30);
    $tweetComments = $tweet ->comments;
    // var_dump($tweet ->comments);

    //     // $tweets = \DB::table('tweets')->get();
    //     // $data = array('tweets'=>$tweets);
    //     //
    //     // return view('posts1')->with($data);



    $tweets = Tweet::orderby('created_at','desc')->get();
    return view('posts1', compact('tweets','tweetComments'));
}

public function show($id){
   $tweet = tweet::find($id);
   var_dump($id);
   return view('singletweets',compact('tweet','tweetComments'));
}

public function show2(comment $comments){
    return $comments;
}

public function create(Request $request){
    $tweet = new Tweet;
    $comment = new comments;
    $tweetComments = $comments->get();
    $Comments = $comment->get();
    $tweetsmodel = new tweet;
    $tweetsmodel ->user_id = 2;
    $tweetsmodel->tweets= $request ->tweet;
    $tweetsmodel->save();
    $tweets = Tweet::orderby('created_at','desc')->get();
    // $tweets = tweets::get();
    // $tweets = \DB::table('tweets')->get()
    return view('posts1',compact('tweets','tweetComments'));
}

public function comment(Request $request){
    $tweet = new Tweet;
    $comment = new comments;
    $comments = $comment->get();
    // $tweetComments = $comments->get(3);
    $Comments = $comment->get(3);
    $commentsmodel = new tweet;
    $commentsmodel ->user_id = 2;
    $commentsmodel->tweets= $request ->tweet;
    $commentsmodel->save();
    $comments = Tweet::orderby('created_at','desc')->get();
    // $tweets = tweets::get();
    // $tweets = \DB::table('tweets')->get()
    return view('posts1',compact('comments','tweetComments'));
    }

    // $commentsmodel = new comments;
    // // $comment = new comments;
    // // $comments = $comment->get();
    //
    // // $tweetComments = $comment->get();
    // $commentsmodel = $comment ->get();
    //
    // $commentsmodel ->user_id = $request->user_id;
    // die($request->user_id);
    // // $commentsmodel->post_id = $request ->tweet_id;
    // $commentsmodel->tweet_id = $request ->tweet_id;
    // $commentsmodel->comments= $request ->comment;
    // $commentsmodel->save();
    // $tweets = Tweet::orderby('created_at','desc')->get();
    // // $tweets = tweets::get();
    // // $tweets = \DB::table('tweets')->get();
    // //return view('posts1',compact('tweets'));



public function store(){
    return view('posts');
}

public function destroy($id){
    return view('posts');
}
}
