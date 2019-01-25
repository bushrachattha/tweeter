<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>login- welcome to tweeter</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('css/tweeter.css') }} ">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>
    </head>
    <body>
        



        <h1> welcome to tweeter</h1>
        <h2> post</h2>


        <form action="/action_page.php">
          <input type="text" placeholder="Username" name="username">
          <input type="text" placeholder="Password" name="psw">
          <button type="submit">Login</button>
        </form>

        <a href="about">About</a>
        <a href="contact">contact</a>
        <a href="about">About</a>
        <a href="user">profile</a>

    </body>
</html>
