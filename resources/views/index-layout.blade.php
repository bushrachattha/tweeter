<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>home - welcome to tweeter</title>
        <link rel="stylesheet" href="{{ URL::asset('css/tweeter.css') }} ">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
     @yield('content')
    <body>

        <h1> welcome to tweeter</h1>
        <h2> copy of twitter</h2>
        <a href="about">About</a>
        <a href="contact">contact</a>
        <a href="about">About</a>
        <a href="user">profile</a>


    </body>
</html> -->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ URL::asset('css/tweeter.css') }} ">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 1000px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

@yield('content')
<div class="row">
  <div class="column" style="background-color:#38A1F3;">
    <h2>Column 1</h2>
    <p>Follow your interests.</p>
    <p>Hear what people are talking about.</p>
    <p>Join the conversation..</p>
  </div>
  <div class="column" style="background-color:#e6ecf0;">
  <div class="login-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Username" name="username">
      <input type="text" placeholder="Password" name="psw">
      <button type="submit">Login</button>
    </form>
  </div>
    <p>Some text..</p>
  </div>
</div>
<div class="Footer module roaming-module Footer--slim"
  >



			<div class="well well-sm">
				<ul class="list-inline">
					<li>© 2019 Twitter</li>
					<li><a href="#">About</a></li>
					<li><a href="#">Help</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Cookies</a></li>
					<li><a href="#">Ads info</a></li>
					<li><a href="#">Brand</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Status</a></li>
					<li><a href="#">Apps</a></li>
					<li><a href="#">Jobs</a></li>
					<li><a href="#">Advertise</a></li>
					<li><a href="#">Businesses</a></li>
					<li><a href="#">Media</a></li>
					<li><a href="#">Developers</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

</body>
</html>
