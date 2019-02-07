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


Route::get('about', 'pagescontroller@about');
Route::get('contact', 'pagescontroller@contact');
Route::get('terms', 'pagescontroller@terms');
Route::get('profile', 'pagescontroller@profile');

Route::get('bushra', 'pagescontroller@bushra');

Route::get('Rachel', 'pagescontroller@Rachel');

Route::get('mosa', 'pagescontroller@mosa');

Route::get('megha', 'pagescontroller@megha');

Route::get('jordan', 'pagescontroller@jordan');

Route::get('Brittany', 'pagescontroller@Brittany');

Route::get('/tweet',function(){

$tweets = DB::table('tweets')->latest()->get();
$tweets = App\tweets::all();

return view('posts',compact('tweets'));
return view('posts',compact('comment'));

});



Route::get('posts', 'Postcontroller@index');
Route::get('posts/{tweet}', 'Postcontroller@show');
Route::post('posts', 'Postcontroller@create');


Route::post('comment', 'Postcontroller@comment');
Route::get('posts/{commentbox}', 'Postcontroller@show');

Route::post('Posts/store', 'Postscontroller@store');
Route::post('Posts/delete/1', 'Postscontroller@destroy');

// Route::get('singletweets', 'Postcontroller@index');
// Route::get('singletweets/{tweet}', 'Postcontroller@show');
// Route::post('singletweets', 'Postcontroller@create');
// Route::post('comment', 'Postcontroller@comment');
//
// Route::post('singletweets/store', 'Postscontroller@store');
// Route::post('singletweets/delete/1', 'Postscontroller@destroy');

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

Route::get('/singletweets', function () {
    return view('singletweets');
});

Route::get('/massages', function () {
    return view('massages');
});

Route::get('login', function () {
    return view('login');
});



Route::get('/posts', function () {
    return view('Posts');
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


Route::get('users', 'HomeController@users')->name('users');
Route::get('user/{id}', 'HomeController@user')->name('user.view');
Route::post('ajaxRequest', 'HomeController@ajaxRequest')->name('ajaxRequest');

// Route::get('posts', function () {
//     return view('posts');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
