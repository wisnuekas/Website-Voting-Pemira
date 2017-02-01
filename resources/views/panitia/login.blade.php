<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Web Voting Pemira BEM Universitas Dian Nuswantoro</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
  	<link href="/css/prettyPhoto.css" rel="stylesheet">
  	<link href="/css/font-awesome.min.css" rel="stylesheet">
  	<link href="/css/animate.css" rel="stylesheet">
  	<link href="/css/main.css" rel="stylesheet">
  	<link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/ico/favicon.png">
  	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
  	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
  	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
  	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
  </head>
  <body>
    <header id="navigation">
  		<div class="navbar navbar-inverse" role="banner">
  			<div class="container">
  				<div class="navbar-header">
  					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
  					</button>
            <a class="navbar-brand" href="#"><h1><img src="images/bem-logo.jpg" alt="logo"></h1></a>
            <a href="#"><h2>Badan Eksekutif Mahasiswa</h2></a>
  				</div>
  				<div class="collapse navbar-collapse">
  					<ul class="nav navbar-nav navbar-right">
              <li class="scroll active"><a href="#">Panitia</a></li>
  					</ul>
  				</div>
  			</div>
  		</div><!--/navbar-->
  	</header> <!--/#navigation-->

      <div class="text-center">
        <div class="col-sm-8 col-sm-offset-2">
          <h2 class="title-one">Panitia Login</h2>
        </div>
        <div class="col-sm-6 col-sm-offset-3">
          <form id="details-form-section" action="/login" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="text" name="username" class="form-control" required="required" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" required="required" placeholder="Password">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
      </div>

      <script type="text/javascript" src="/js/jquery.js"></script>
      <script type="text/javascript" src="/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="/js/smoothscroll.js"></script>
      <script type="text/javascript" src="/js/jquery.isotope.min.js"></script>
      <script type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
      <script type="text/javascript" src="/js/jquery.parallax.js"></script>
      <script type="text/javascript" src="/js/main.js"></script>

  </body>
</html>
