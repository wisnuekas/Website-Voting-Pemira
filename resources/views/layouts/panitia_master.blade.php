<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
  	<link href="/css/prettyPhoto.css" rel="stylesheet">
  	<link href="/css/font-awesome.min.css" rel="stylesheet">
  	<link href="/css/animate.css" rel="stylesheet">
  	<link href="/css/main.css" rel="stylesheet">
  	<link href="/css/responsive.css" rel="stylesheet">
    <script type="text/javascript">
      function alertMaks(){
        alert('Maksimal Input pemira adalah 3');
      }
    </script>
  </head>
  <body>
    @yield('header')

    @yield('content')


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
