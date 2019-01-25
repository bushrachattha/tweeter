<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Route::get('/about', function () {
//     return view('about');
// });


Route::get('about', 'Postcontroller@about');
Route::get('contact', 'Postcontroller@contact');
Route::get('terms', 'Postcontroller@terms');

Route::get('/tweet',function(){

$tweets = DB::table('tweets')->latest()->get();
$tweets = App\tweets::all();

return view('posts',compact('tweetss'));

});



Route::get('posts', 'Postcontroller@index');
Route::get('Posts/{tweet}', 'Postscontroller@show');
Route::post('posts', 'Postcontroller@create');
Route::post('comment', 'Postcontroller@comment');

Route::post('Posts/store', 'Postscontroller@store');
Route::post('Posts/delete/1', 'Postscontroller@destroy');

// Route::get('tweets', 'Postcontroller@index');
// Route::get('Posts/create', 'Postscontroller@create');

Route::get('user', 'userscontroller@index');
Route::get('user/{user-id}', 'userscontroller@getotherUser');
Route::get('user-followers', 'userscontroller@userFollowers');

Route::get('home', function () {
    return view('home');
});

Route::get('signup', function () {
    return view('signup');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('/massages', function () {
    return view('massages');
});

Route::get('login', function () {
    return view('login');
});


// Route::get('posts', function () {
//     return view('posts');
// });
