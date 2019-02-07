
<!DOCTYPE html>
<html lang="en" data-scribe-reduced-action-queue="true">
  <head>
  <link rel="stylesheet" href="https://abs.twimg.com/a/1548278062/css/t1/twitter_core.bundle.css" class="coreCSSBundles">
  <link rel="stylesheet" class="moreCSS" href="https://abs.twimg.com/a/1548278062/css/t1/twitter_more_1.bundle.css">
  <link rel="stylesheet" class="Bundles" href="https://abs.twimg.com/a/1548278062/css/t1/twitter_more_2.bundle.css">

  <title>Twitter. It&#39;s what&#39;s happening.</title>


   <meta name="msapplication-TileImage" content="//abs.twimg.com/favicons/win8-tile-144.png"/>
   <link rel="mask-icon" sizes="any" href="https://abs.twimg.com/a/1548278062/icons/favicon.svg" color="#1da1f2">
   <link rel="shortcut icon" href="//abs.twimg.com/favicons/favicon.ico" type="image/x-icon">
   <link rel="apple-touch-icon" href="https://abs.twimg.com/icons/apple-touch-icon-192x192.png" sizes="192x192">
   <link rel="alternate" media="handheld, only screen and (max-width: 640px)" href="https://mobile.twitter.com/?prefetchtimestamp=1548567885636">


  </head>
  <body class="three-col logged-out static-logged-out-home-page"data-fouc-class-names="swift-loading no-nav-banners" dir="ltr">

<div class="StaticLoggedOutHomePage" >
  <div class="StaticLoggedOutHomePage-content">

    <div class="StaticLoggedOutHomePage-cell StaticLoggedOutHomePage-utilityBlock" style="max-width:612px;" >
      <div class="StaticLoggedOutHomePage-login">
<!-- <form  action="login" class="LoginForm js-front-signin" method="post" href="login"
  data-component="login_callout" data-element="form">

  <div class="LoginForm-input LoginForm-username">

    <input
      type="text"
      class="text-input email-input js-signin-email"
      name="session[username_or_email]"
      autocomplete="username"
      placeholder="Phone, email, or username"
    />
  </div>

  <div class="LoginForm-input LoginForm-password">
    <input type="password" class="text-input" name="session[password]" placeholder="Password" autocomplete="current-password">
                <div class="LoginForm-staticForgot">
              <a class="forgot" href="/account/begin_password_reset" rel="noopener">Forgot password?</a>
            </div>

  </div>

  <input type="submit" class="EdgeButton EdgeButton--secondary EdgeButton--medium submit js-submit" value="Log in">

    <input type="hidden" name="return_to_ssl" value="true">

  <input type="hidden" name="scribe_log">
  <input type="hidden" name="redirect_after_login" value="/?prefetchTimestamp=1548567885636">
  <input type="hidden" value="b947d42795d285c320efd8a58c53ab27141584d2" name="authenticity_token">
      <input type="hidden" name="ui_metrics" autocomplete="off">
      <script src="/i/js_inst?c_name=ui_metrics" async></script>
</form> -->

<!-- <form action="/login.blade.php">
  <input type="text" placeholder="Username" name="username" style="margin-left: 250px;">
  <input type="text" placeholder="Password" name="psw" style="margin-left: 20px;">
  <button type="submit" class="EdgeButton EdgeButton--secondary EdgeButton--medium" >Login</button>
</form> -->
<div class="TopLogin" style="margin-left: 110px;">
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group row">
        <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

        <div class="col-md-6">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
<!--
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"    name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <button type="submit" class="EdgeButton EdgeButton--secondary EdgeButton--medium"
            class="EdgeButton EdgeButton--secondary EdgeButton--medium submit js-submit">

                {{ __('Login') }}
            </button>
        </div>
    </div>

    <div class="form-group row mb-0" style="margin-left: 250px;">
        <div class="col-md-8 offset-md-4">

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </div>
</form>
</div>
      </div>
      <div class="StaticLoggedOutHomePage-signupBlock">
        <div class="StaticLoggedOutHomePage-signupHeader">
          <span class="Icon Icon--bird"></span>
          <a class="StaticLoggedOutHomePage-input StaticLoggedOutHomePage-narrowLoginButton EdgeButton EdgeButton--secondary EdgeButton--small u-floatRight" href="login">
            Log in
          </a>
        </div>
        <h1 class="StaticLoggedOutHomePage-signupTitle">See what’s happening in the world right now</h1>
          <div class="StaticLoggedOutHomePage-noSignupForm">
            <h2 class="StaticLoggedOutHomePage-signupSubtitle">Join Twitter today.</h2>
            <div class="StaticLoggedOutHomePage-buttons">
              <a class="js-nav EdgeButton EdgeButton--medium EdgeButton--primary StaticLoggedOutHomePage-buttonSignup" href="signup">
                Sign Up
              </a>
              <a class="js-nav EdgeButton EdgeButton--medium EdgeButton--secondary StaticLoggedOutHomePage-buttonLogin" href="login">
                Log in
              </a>
            </div>
          </div>
      </div>
    </div>

        <div class="StaticLoggedOutHomePage-cell StaticLoggedOutHomePage-communicationBlock">


<svg style="background-color: #1da1f2;" class="twitterIcon-bird" viewBox="0 0 1208 982" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    Generator: Sketch 45.2 (43514) - http://www.bohemiancoding.com/sketch

    <title>bird</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Final-Horizon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Artboard" transform="translate(-286.000000, -117.000000)" fill-rule="nonzero" fill="#1B95E0">
            <path d="M1493.75308,233.195911 C1449.31783,252.922544 1401.56126,266.207828 1351.43951,272.19627 C1402.61804,241.549536 1441.92034,192.987798 1460.3889,135.116296 C1412.53168,163.498493 1359.49119,184.130942 1303.02874,195.252335 C1257.88897,147.093181 1193.42514,117 1122.16771,117 C962.190754,117 844.636121,266.258151 880.768067,421.202806 C674.896491,410.886582 492.324484,312.253414 370.089808,162.341063 C305.17308,273.705962 336.423691,419.391176 446.731805,493.16476 C406.171431,491.856361 367.925917,480.734968 334.561738,462.165765 C331.844294,576.95263 414.122472,684.342008 533.287442,708.245454 C498.413572,717.706186 460.218381,719.9204 421.368991,712.47259 C452.871217,810.904465 544.358512,882.514158 652.854997,884.52708 C548.686294,966.201382 417.443793,1002.68559 286,987.186091 C395.653915,1057.48739 525.940278,1098.50067 665.838342,1098.50067 C1125.89162,1098.50067 1385.81015,709.956437 1370.10936,361.469352 C1418.52012,326.494836 1460.53987,282.864756 1493.75308,233.195911 Z" id="bird"></path>
        </g>
    </g>
</svg>

      <div class="StaticLoggedOutHomePage-communicationContent" style="background-color: #1da1f2;">
        <div class="StaticLoggedOutHomePage-communicationItem" >
          <span class="Icon Icon--search"></span> Follow your interests.
        </div>
        <div class="StaticLoggedOutHomePage-communicationItem">
          <span class="Icon Icon--people"></span> Hear what people are talking about.
        </div>
        <div class="StaticLoggedOutHomePage-communicationItem">
          <span class="Icon Icon--reply"></span> Join the conversation.
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="StreamsFooter StreamsFooter--fixed">
  <ul class="StreamsFooter-list u-cf">
    <li class="StreamsFooter-item"><a href="" rel="noopener">About</a></li>
    <li class="StreamsFooter-item"><a href="" rel="noopener">Help Center</a></li>
    <li class="StreamsFooter-item"><a href="" rel="noopener">Blog</a></li>
    <li class="StreamsFooter-item"><a href="" rel="noopener">Status</a></li>
    <li class="StreamsFooter-item"><a href="" rel="noopener">Jobs</a></li>
    <li class="StreamsFooter-item"><a href="Terms" rel="noopener">Terms</a></li>
    <li class="StreamsFooter-item"><a href="" rel="noopener">Privacy Policy</a></li>
    <li class="StreamsFooter-item"><a href="" rel="noopener">Cookies</a></li>
    <li class="StreamsFooter-item"><a href="" rel="noopener">Ads info</a></li>
    <li class="StreamsFooter-item"><a href="" rel="noopener">Brand</a></li>
    <li class="StreamsFooter-item"><a href="" rel="noopener">Apps</a></li>
    <li class="StreamsFooter-item"><a href="" rel="noopener">Advertise</a></li>
    <li class="StreamsFooter-item"><a href="" rel="noopener">Marketing</a></li>
    <li class="StreamsFooter-item"><a href="" rel="noopener">Businesses</a></li>
    <li class="StreamsFooter-item"><a href="" rel="noopener">Developers</a></li>
    <li class="StreamsFooter-item"><a href="profiles" rel="noopener">Directory</a></li>
    <li class="StreamsFooter-item"><a href="/settings/personalization" rel="noopener">Settings</a></li>
    <li class="StreamsFooter-item StreamsFooter-copyright">&copy; 2019 Twitter</li>
  </ul>
   </div>
   <!-- <div class="well well-sm">
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
   </div> -->
  </body>
</html>
