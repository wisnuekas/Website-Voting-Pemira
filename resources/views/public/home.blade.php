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
  		<div class="navbar navbar-inverse navbar-fixed-top" role="banner">
  			<div class="container">
  				<div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
  					</button>
            <a class="navbar-brand" href="#"><h1><img src="images/bem-logo.jpg" alt="logo"></h1></a>
            <a href="#"><h2><p>Badan Eksekutif Mahasiswa</p></h2></a>
  				</div>
  				<div class="collapse navbar-collapse">
  					<ul class="nav navbar-nav navbar-right">
  						<li class="scroll active"><a href="#navigation">Home</a></li>
  						<li class="scroll"><a href="#stats">Stats</a></li>
  					  <li class="scroll"><a href="#pemira">Calon Pemira</a></li>
              <li class="scroll"><a href="#contact">Vote !</a></li>
  					</ul>
  				</div>
  			</div>
  		</div>
  	</header>

    <section id="home">
  		<div class="home-pattern"></div>
  		<div id="main-carousel" class="carousel slide" data-ride="carousel">
  			<ol class="carousel-indicators">
  				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
  				<li data-target="#main-carousel" data-slide-to="1"></li>
  				<li data-target="#main-carousel" data-slide-to="2"></li>
  			</ol><!--/.carousel-indicators-->
  			<div class="carousel-inner">
  				<div class="item active" style="background-image: url(images/slider/slide3.jpg)">
  					<div class="carousel-caption">
  						<div>
  							<h2 class="heading animated bounceInDown">Menggunakan Hak pilih itu Keren</h2>
  							<p class="animated bounceInUp">"Untuk Masa depan BEM lebih baik."</p>
  							<a class="btn btn-default slider-btn animated fadeIn" href="#contact">Lets Vote !</a>
  						</div>
  					</div>
  			  </div>
  			  <div class="item" style="background-image: url(images/slider/slide2.jpg)">
  				  <div class="carousel-caption">
              <div>
  		          <h2 class="heading animated bounceInDown">Daftar. Login. Vote.</h2>
			          <p class="animated bounceInUp">"Untuk Masa depan BEM lebih baik."</p>
                <a class="btn btn-default slider-btn animated fadeIn" href="#contact">Lets Vote !</a>
              </div>
            </div>
  			  </div>
  			  <div class="item" style="background-image: url(images/slider/slide1.jpg)">
  				  <div class="carousel-caption">
				      <div>
  					    <h2 class="heading animated bounceInRight">Waktunya Memilih</h2>
  					    <p class="animated bounceInLeft">"Untuk Masa depan BEM lebih baik."</p>
                <a class="btn btn-default slider-btn animated fadeIn" href="#contact">Lets Vote !</a>
  				    </div>
  				  </div>
  			   </div>
  		  </div><!--/.carousel-inner-->

  		  <a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
  		  <a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
  	  </div>

    </section><!--/#home-->

    <section id="stats">
      <div class="container">
        <div class="text-center">
    			<div class="col-sm-8 col-sm-offset-2">
            <br><br>
            <h2 class="title-one">Stats</h2>
    			</div>
    		</div>
        <div class="col-sm-6 col-sm-offset-3 text-center">
          <p>Perolehan suara sementara.</p><h1></h1>
					<div class="skill-bar">
            @foreach ($pemiras as $pemira)
              <div class="skillbar clearfix " data-percent="{{ $pemira->jumlah_vote }}%">
  							<div class="skillbar-title">
  								<span>{{ $pemira->nama_pres }} &amp; {{ $pemira->nama_wapres }}</span>
  							</div>
  							<div class="skillbar-bar"></div>
  							<div class="skill-bar-percent">{{ number_format($pemira->jumlah_vote, 2) }}%</div>
  						</div> <!-- End Skill Bar -->
  						<!-- End Skill Bar -->
            @endforeach
          </div>
				</div>
      </div>
    </section>

    <section id="pemira">
			<div class="container">
				<div class="text-center">
						<h2 class="title-one">Temui Calon Pemira</h2>
				</div>
				<div id="team-carousel" class="carousel slide" data-interval="false">
          <div class="col-sm-12 calon-pemira">
            @foreach ($pemiras as $pemira)
              <div class="col-sm-4">
                <div class="single-member">
                  <img src="{{ '/uploads/'.$pemira->gbr_pres_wapres }}" alt="team member" />
                  <h4>{{ $pemira->nama_pres}}</h4>
                  <h5>{{ $pemira->nama_wapres}}</h5>
                  <p>{{ $pemira->visi }}</p>
                  <br/>
                  <a href="pemira/{{ $pemira->id }}/details">
                    <button type="button" name="details" class="btn btn-warning">READ MORE</button>
                  </a>
                </div>
              </div>
            @endforeach
          </div>
				</div>
<!--      <a class="member-left" href="#team-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="member-right" href="#team-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
-->

			</div>
		</section><!--/#Our-Team-->

    <section id="contact">
      <div class="container">
        <div class="row text-center clearfix">
          <div class="col-sm-8 col-sm-offset-2">
              <h2 class="title-one">Vote</h2>
              <p>Bijak memilih untuk menjadi lebih baik.</p>
          </div>
        </div>
      </div>
      <div class="container">
          <div class="pattern"></div>
          <div class="row text-center clearfix">
            <div class="col-sm-6">
              <div id="contact-form-section">
                <div class="text-center">
                  <h3>Belum mendaftar ?</h3>
                  <h1></h1>
                </div>
                <div class="status alert alert-success" style="display: none"></div>
                <form id="contact-form" class="contact" name="contact-form" method="POST" action="/register">
                  {{ csrf_field() }}

                  <div class="form-group">
                    <input type="text" name="nama" class="form-control" required="required" placeholder="Nama">
                  </div>
                  <div class="form-group">
                    <input type="text" name="progdi" class="form-control" required="required" placeholder="Progdi">
                  </div>
                  <div class="form-group">
                    <input type="text" name="nim" class="form-control name-field" required="required" placeholder="NIM">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control mail-field" required="required" placeholder="Password">
                  </div>
                  <div class="media-body">
                    <p>
                      **NIM dan Password akan digunakan untuk login.
                    </p><h1></h1>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-sm-6">
              <div id="contact-form-section">
                <div class="text-center">
                  <h3>Sudah terdaftar ?</h3>
                  <p>
                    Silahkan masuk dengan menggunakan NIM dan Password untuk bisa memberikan suara.
                  </p>
                </div>
                <form id="contact-form" class="contact" name="contact-form" method="POST" action="/login">
                  {{ csrf_field() }}

                  <div class="form-group">
                    <input type="text" name="nim" class="form-control name-field" required="required" placeholder="NIM">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control mail-field" required="required" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Masuk</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> <!--/#contact-->



    <footer id="footer">
      <div class="container">
        <div class="text-center">
          <p>Copyright &copy; 2016 - Wisnu Eka Saputra | Themes by <a href="http://mostafiz.me/">Mostafiz</a> | All Rights Reserved</p>
        </div>
      </div>
    </footer>


    <!--- Script -->
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/smoothscroll.js"></script>
    <script type="text/javascript" src="/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
  </body>
</html>
