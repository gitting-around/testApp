<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/homeStyle.css') }}" rel="stylesheet" type="text/css" >
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
    </style

  </header>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top"  role="navigation">
     <div class="container-fluid">
          @section('navigation')

            <div class="navbar-header page-scroll">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                           data-target=".navbar-collapse">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                  </button>
            </div>

            <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="home">Home</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Language<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">English</a></li>
                        <li><a href="#">Shqip</a></li>
                      </ul>
                    </li>
                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="works">Videos</a></li>
                    <li><a href="green">Green Ideas</a></li>
                    <li><a class="page-scroll" href="donate">Donate Online</a></li>
                    <li><a class="page-scroll" href="newsfeed">Newsfeed</a></li>
                    <li><a class="page-scroll" href="home#about">About</a></li>
                    <li><a class="page-scroll" href="home#contact">Contact</a></li>

                  </ul>
            </div><!-- /.navbar-collapse -->

          @show
      </div>
    </nav>

    <div>
      @yield('gjera')
    </div>

    <footer class="text-center">copyright stuff, ©git</footer>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script>
         //ben collapse e menu toggle button ne mobile view ------->>>  NUK PUNON
         $(document).on('click','.navbar-collapse.in',function(e) {

             if( $(e.target).is('a') && ( $(e.target).attr('class') != 'navbar-toggle' ) ) {
                 $(this).collapse('hide');
             }

         });
    </script>
    <script type="text/javascript" src="/js/jquery.infinitescroll.min.js"></script>
    <script> //ben infinite scroll
        $('#boxes').infinitescroll({

            navSelector  : "div.paginate",
                           // selector for the paged navigation (it will be hidden)
            nextSelector : "div.paginate a:first",
                           // selector for the NEXT link (to page 2)
            itemSelector : "#boxes div.box"
                           // selector for all items you'll retrieve
            //localMode    : true
          });
    </script>

  </body>

</html>