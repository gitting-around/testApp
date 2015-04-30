<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/videoLinkStyle5.css') }}" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

  </head>

  <header>
    <p></p>
    <!-- rregullo pozicionin e header te section qe te mos bjere nen navbar -->
    <style>
        body {
          padding-top: 60px;
        }
        @media (max-width: 979px) {
          body {
            padding-top: 20px;
          }
        }
    </style>
    <!-- rregullo pozicionin e Logos, BRAND -->
    <style>
    .navbar-inner{
        position:relative;
        padding-left:70px;
    }
    .navbar-brand {
        position: absolute;
        left: 0px;
        top: 0px;
        margin-left: 30px;
        margin-top: 10px;
        padding-top: 0px;
    }
    </style>

  </header>

  <body>

    @section('navigation')
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse"  role="navigation">
         <div class="container-fluid">

                <div class="navbar-header page-scroll">
                      <button type="button" class="navbar-toggle" data-toggle="collapse"
                               data-target=".navbar-collapse">
                               <span class="sr-only">Toggle navigation</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand page-scroll" href="/"><img alt="logo" src="/css/images/doodle1.png"></a>
                </div>

                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">

                      <ul class="nav navbar-nav navbar-left">
                        <li><a href="indexVideo">Videos</a></li>
                        <li><a href="editProjects">Green Ideas</a></li>
                        <li><a class="page-scroll" href="editNewsfeed">Newsfeed</a></li>
                        <li><a class="page-scroll" href="">About</a></li>
                        <li><a class="page-scroll" href="">Contact</a></li>
                        <li><a class="page-scroll" href="">Donate Online</a></li>
                      </ul>

                      <ul class="nav navbar-nav navbar-right">
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Language<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">English</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Shqip</a></li>
                            </ul>
                          </li>
                          <li><a href="{{ URL::to('logout') }}">Admin Credentials</a></li>
                          <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                      </ul>
                </div><!-- /.navbar-collapse -->

          </div>
        </nav>
    @show

    <div>
      @yield('gjera')
    </div>

    <footer class="text-center">copyright stuff, ©git</footer>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="/js/smoothScroll.js"></script>
    <script>
         //ben collapse e menu toggle button ne mobile view ------->>>  NUK PUNON
         $(document).on('click','.navbar-collapse.in',function(e) {

             if( $(e.target).is('a') && ( $(e.target).attr('class') != 'navbar-toggle' ) ) {
                 $(this).collapse('hide');
             }

         });
    </script>

  </body>

</html>