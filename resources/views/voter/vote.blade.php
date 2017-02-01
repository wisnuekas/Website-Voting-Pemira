<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vote</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
  	<link href="/css/prettyPhoto.css" rel="stylesheet">
  	<link href="/css/font-awesome.min.css" rel="stylesheet">
  	<link href="/css/animate.css" rel="stylesheet">
  	<link href="/css/main.css" rel="stylesheet">
  	<link href="/css/responsive.css" rel="stylesheet">
  </head>
  <body>
    {{-- <script type="text/javascript">
      var isAuth = {{ \Auth::check() }};

      if (isAuth) location.href('/home');
      if (isAuth != 1) location.href('/');
    </script> --}}
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
                          <li class="scroll active"><a href="/logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/navbar-->
    </header>
    <div class="col-sm-6 col-sm-offset-3 text-center clearfix ">
      <br><br>
      <div class="title-one">
        @if (\Auth::check())
          Welcome, {{ \Auth::user()->nama }}
        @endif
      </div>
      <br><br>
    </div>

    <form class="" action="/vote" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="voter" value="{{ \Auth::user()->id }}" />
        <div class="container">
            <div id="team-carousel" class="carousel slide" data-interval="false">
                <div class="carousel-inner team-members">
                    <div class="row item active">
                      @foreach ($pemiras as $pemira)
                        <div class="col-sm-4">
                            <div class="single-member">
                                <img src="{{ 'uploads/'.$pemira->gbr_pres_wapres }}" alt="team member" />
                                <h4>{{ $pemira->nama_pres }}</h4>
                                <h5>{{ $pemira->nama_wapres }}</h5>
                                <br/><br>
                                <label class="radio-inline">
                                <input type="radio" name="pilihan" value="{{ $pemira->id }}"  required>Pilih
                              </label>
                            </div>
                        </div>
                      @endforeach
                    </div>
                </div>
                <!--      <a class="member-left" href="#team-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="member-right" href="#team-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  -->
            </div>
        </div>

        <div class="form-group">
            <div class="vote">
                <button type="submit" class="btn btn-default slider-btn animated bounceInUp">Pilih</button>
            </div>
        </div>
    </form>
    <footer class="footer">
      <div id="footer">
        <div class="container">
          <div class="text-center">
            <p>Copyright &copy; 2016 - Wisnu Eka Saputra | Themes by <a href="http://mostafiz.me/">Mostafiz</a> | All Rights Reserved</p>
          </div>
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
