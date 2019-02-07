
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>home - welcome to tweeter</title>

        <link rel="stylesheet" href="{{ URL::asset('css/tweeter.css') }} ">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="navbar navbar-default navbar-static-top">
        	<div class="container">
        		<div class="navbar-collapse navbar-collapse-1 collapse" aria-expanded="true">
        			<ul class="nav navbar-nav">
        				<li class="active">
        					<a href="#111"><span class="glyphicon glyphicon-home"></span> Home</a>
        				</li>
        				<li>
        					<a href="#222"><span class="glyphicon glyphicon-bell"></span> Notifications</a>
        				</li>
        				<li>
        					<a href="#333"><span class="glyphicon glyphicon-envelope"></span> Messages</a>
        				</li>
        			</ul>
        			<div class="navbar-form navbar-right">
        				<div class="form-group has-feedback">
        					<input type="text" class="form-control-nav" id="search" aria-describedby="search1">
        					<span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
        				</div>

        				<button class="btn btn-primary" type="submit" aria-label="Left Align">
        					<span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> Tweet
        				</button>

                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                     <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                    <br/>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                        <br/>

        				<!-- <form action="posts" method="post">
        				  <input type="text" placeholder="Username" name="username">
        				  <input type="text" placeholder="Password" name="psw">
        				  <button type="submit">Login</button>
        				</form> -->
        				<!-- <form method="post" action="posts">
        					<textarea class="form-control" name="tweet" placeholder="tweet">tweet</textarea> -->

        			</div>
        		</div>
        	</div>
        </div>
        <div class="container">
        	<div class="row">
        		<div class="col-sm-3">
        			<div class="panel panel-default">
        				<div class="panel-body">
        					<a href="#"><img class="img-responsive" alt="" src="https://images.pexels.com/photos/104827/cat-pet-animal-domestic-104827.jpeg?cs=srgb&dl=animal-animal-photography-cat-104827.jpg&fm=jpg"></a>
        					<div class="row">
        						<div class="col-xs-3">
        							<h5>
        								<small>TWEETS</small>
        								<a href="#">1,545</a>
        							</h5>
        						</div>
        						<div class="col-xs-4">
        							<h5>
        								<small>FOLLOWING</small>
        								<a href="#">251</a>
        							</h5>
        						</div>
        						<div class="col-xs-5">
        							<h5>
        								<small>FOLLOWERS</small>
        								<a href="#">153</a>
        							</h5>
        						</div>
        					</div>
        				</div>
        			</div>

        			<div class="panel panel-default panel-custom">
        				<div class="panel-heading">
        					<h3 class="panel-title">
        						Trends
        						<small><a href="#">ciao</a></small>
        					</h3>
        				</div>

        				<div class="panel-body">
        					<ul class="list-unstyled">
        						<li><a href="#">#hahhaha</a></li>
        						<li><a href="#">#blah blah</a></li>
        						<li><a href="#">#yah yahaa</a></li>
        						<li><a href="#">#bushra is awsome</a></li>
        						<li><a href="#">#hahhaha wah wah</a></li>
        						<li><a href="#">#snow </a></li>
        						<li><a href="#">#cool it is</a></li>
        					</ul>
        				</div>
        			</div>
        		</div>
        		<div class="col-sm-6">
        			<div class="panel panel-info">
        				<div class="panel-heading">
        					<div class="media">
        						<a class="media-left" href="#444">
        							<img alt="" class="media-object img-rounded" src="http://placehold.it/35x35">
        						</a>
        						<div class="media-body">
        							<div class="form-group has-feedback">
        								<label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
        								<input type="text" class="form-control" id="search2" aria-describedby="search">
        								<span class="glyphicon glyphicon-camera form-control-feedback" aria-hidden="true"></span>
        								<span id="search2" class="sr-only">(success)</span>
        							</div>
        						</div>
        						<!-- <form method="post" action="posts">
        							<textarea class="form-control tweet-box" name="tweet" placeholder="Enter tweet here"></textarea>
                                    <button  class="btn btn-success  btn-sm">post</button>
        						</form> -->
                                <div class="row">
                                    <div   class="col-xs-12 col-md-6">
                                        <h2>Tweets</h2>
                                        <form method="post" action="/posts" href="singletweets">
                                            @csrf
                                            <textarea class="form-control tweet-box" name="tweet" placeholder="Enter tweet here" href="singletweets">

                                            </textarea>

                                            <!-- <div class="navbar-collapse navbar-collapse-1 collapse" aria-expanded="true">
                                    			<ul class="nav navbar-nav">
                                    				<li class="active">
                                    					<a href="#111"><span class="glyphicon glyphicon-home"></span> tweet</a>
                                    				</li>

                                    			</ul>
                                            </div> -->
                                            <ul class="nav nav-pills nav-pills-custom">
                								<li><a href="singletweets"><span class="glyphicon glyphicon-share-alt"></span></a></li>
                								<li><a href="singletweets"><span class="glyphicon glyphicon-retweet"></span></a></li>
                								<li><a href="singletweets"><span class="heart" class="glyphicon glyphicon-star"></span></a></li>
                								<li><a href="singletweets"><span class="glyphicon glyphicon-option-horizontal"></span></a></li>
                							</ul>

                                            <button  class="btn btn-success  btn-sm">post</button>
                                         </form>
                                            @foreach ($tweets as $singletweet)

                                            {{ $singletweet->tweets }} -by {{$singletweet ->user_id}}<br>
                                            <a href="posts/{{$singletweet->id}}">view</a>
                                            <br/>
                                            <!-- <div class="row">
                                                <div class="col-xs-6 col-md-6">

                                                    {{$tweetComments}}


                                                </div>
                                            </div> -->
                                            <div class="row">
                                                <div class="col-xs-6 col-md-6">

                                                    <form method="post" action="/comment">
                                                        @csrf
                                                        <textarea class="form-control comment-box" name="comment" placeholder="comment here"></textarea>
                                                        <br/>
                                                        <input type="hidden" name="user_id" value="{{$singletweet->id}}"/>
                                                        <input type="hidden" name="tweet_id" value="{{ $singletweet->id }}"/>

                                                        <button  class="btn btn-success  btn-sm">comment</button>
                                                    </form>
                                                </div>
                                            </div>


                                            @endforeach


                                    </div>
                                </div>
                                <br/>

                                        @foreach ($tweets as $singletweet)

                                                					<div class="media">
                                                						<a class="media-left" href="#666">
                                                							<img alt="" class="media-object img-rounded" src="http://placehold.it/64x64">
                                                						</a>
                                                						<div class="media-body">
                                                							<h4 class="media-heading">$user</h4>
                                                							<p>$tweet</p>
                                                							<ul class="nav nav-pills nav-pills-custom">
                                                								<li><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></li>
                                                								<li><a href="#"><span class="glyphicon glyphicon-retweet"></span></a></li>
                                                								<li><a href="#"><span class="heart" ></span></a></li>
                                                								<li><a href="#"><span class="glyphicon glyphicon-option-horizontal"></span></a></li>
                                                							</ul>
                                                						</div>
                                                @yield('content')

                                                		</div>
                                        <!-- <a href="/posts1 {{ $singletweet->id }}"> {{$singletweet ->tweets}} </a>
                                        - by{{$singletweet->user_id}} -->

                                                					<div class="media">
                                                						<a class="media-left" href="#666">
                                                							<img alt="" class="media-object img-rounded" src="http://placehold.it/64x64">
                                                						</a>
                                                						<div class="media-body">
                                                							<h4 class="media-heading">Ryan Rishaug</h4>
                                                							<p>Peter Chiarelli has been fired by the Oilers.  Done deal</p>
                                                							<ul class="nav nav-pills nav-pills-custom">
                                                								<li><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></li>
                                                								<li><a href="#"><span class="glyphicon glyphicon-retweet"></span></a></li>
                                                								<li><a href="#"><span class="heart"></span></a></li>
                                                								<li><a href="#"><span class="glyphicon glyphicon-option-horizontal"></span></a></li>
                                                							</ul>
                                                						</div>
                                                @yield('content')

                                                		</div>
                                        <br/><br/>commentbox<br/>
                                        <div class="row">
                                            <div class="col-xs-6 col-md-6">

                                                <form method="post" action="/posts">
                                                    @csrf
                                                    <textarea class="form-control comment-box" name="comment" placeholder="comment here"></textarea>
                                                    <br/>
                                                    <input type="hidden" name="user_id" value="{{$singletweet->id}}"/>
                                                    <input type="hidden" name="tweet_id" value="{{ $singletweet->id }}"/>

                                                    <button  class="btn btn-success  btn-sm">post</button>
                                                </form>
                                            </div>
                                        </div>
                                        @endforeach
        					</div>
        				</div>
        				<div class="panel-body">
        					<div class="media">
        						<a class="media-left" href="#555">
        							<img alt="" class="media-object img-rounded" src="http://placehold.it/64x64">
        						</a>
        						<div class="media-body">
        							<h4 class="media-heading">Edmonton</h4>
        							<p>Police called after weekend hockey fight in Mill Woods -
        								https://edmonton.ctvnews.ca/police-called-after-weekend-hockey-fight-in-mill-woods-1.4261845 … #yeg</p>
        							<ul class="nav nav-pills nav-pills-custom">
        								<li><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></li>
        								<li><a href="#"><span class="glyphicon glyphicon-retweet"></span></a></li>
        								<li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
        								<li><a href="#"><span class="glyphicon glyphicon-option-horizontal"></span></a></li>
        							</ul>
        						</div>
        					</div>

        					<div class="media">
        						<a class="media-left" href="#666">
        							<img alt="" class="media-object img-rounded" src="http://placehold.it/64x64">
        						</a>
        						<div class="media-body">
        							<h4 class="media-heading">Ryan Rishaug</h4>
        							<p>Peter Chiarelli has been fired by the Oilers.  Done deal</p>
        							<ul class="nav nav-pills nav-pills-custom">
        								<li><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></li>
        								<li><a href="#"><span class="glyphicon glyphicon-retweet"></span></a></li>
        								<li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
        								<li><a href="#"><span class="glyphicon glyphicon-option-horizontal"></span></a></li>
        							</ul>
        						</div>
        @yield('content')

        		</div>

        					<div class="media">
        						<a class="media-left" href="#999">
        							<img alt="" class="media-object img-rounded" src="http://placehold.it/64x64">
        						</a>
        						<div class="media-body">
        							<h4 class="media-heading">Media heading</h4>
        							<p>blah blah blah hahhaha</p>
        							<ul class="nav nav-pills nav-pills-custom">
        								<li><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></li>
        								<li><a href="#"><span class="glyphicon glyphicon-retweet"></span></a></li>
        								<li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
        								<li><a href="#"><span class="glyphicon glyphicon-option-horizontal"></span></a></li>
        							</ul>
        						</div>
        					</div>

        				</div>
        			</div>

        			<br>
        			<br>
        			<br>

        		</div>

        		<div class="col-sm-3">
        			<div class="panel panel-default panel-custom">
        				<div class="panel-heading">
        					<h3 class="panel-title">
        						Who to follow
        						<small><a href="#">Refresh</a> ● <a href="#">View all</a></small>
        					</h3>
        				</div>
        				<div class="panel-body">
        					<div class="media">
        						<div class="media-left">
        							<img src="http://placehold.it/32x32" alt="" class="media-object img-rounded">
        						</div>
        						<div class="media-body">
        							<h4 class="media-heading">bushra</h4>
        							<a href="bushra" class="btn btn-default btn-xs">
        								+
        								<span class="glyphicon glyphicon-user"></span>
        								Follow
        							</a>
        						</div>
        					</div>
        					<div class="media">
        						<div class="media-left">
        							<img src="http://placehold.it/32x32" alt="" class="media-object img-rounded">
        						</div>
        						<div class="media-body">
        							<h4 class="media-heading">megha</h4>
        							<a href="megha" class="btn btn-default btn-xs">
        								+
        								<span class="glyphicon glyphicon-user"></span>
        								Follow
        							</a>
        						</div>
        					</div>
        					<div class="media">
        						<div class="media-left">
        							<img src="http://placehold.it/32x32" alt="" class="media-object img-rounded">
        						</div>
        						<div class="media-body">
        							<h4 class="media-heading">Brittany</h4>
        							<a href="Brittany" class="btn btn-default btn-xs">
        								+
        								<span class="glyphicon glyphicon-user"></span>
        								Follow
        							</a>
        						</div>
        					</div>
        				</div>
        				<div class="panel-footer">
        					<a href="posts">
        						<span class="glyphicon glyphicon-user"></span>
        						Find people you know
        					</a>
        				</div>
        			</div>
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

        </html>


<!--
<div class="row">
    <div class="col-xs-12 col-md-6">
        <h2>Tweets</h2>
        <form method="post" action="/posts">
            @csrf
            <textarea class="form-control tweet-box" name="tweet" placeholder="Enter tweet here"></textarea>
            <br/>
            <button  class="btn btn-success  btn-sm">post</button>
        </form>
    </div>
</div>
<br/>

        @foreach ($tweets as $singletweet)
        <a href="/posts1 {{ $singletweet->id }}"> {{$singletweet ->tweets}} </a>
        - by{{$singletweet->user_id}}
        <br/>
        @endforeach

        <h1> welcome to tweeter</h1>
        <h2> copy of twitter</h2>
        <a href="about">About</a>
        <a href="contact">contact</a>
        <a href="about">About</a>
        <a href="user">profile</a>

    </body>
</html>




@foreach ($tweets as $singletweet)

{{ $singletweet->tweets }} -by {{$singletweet ->user_id}}
<br/>
@endforeach -->
