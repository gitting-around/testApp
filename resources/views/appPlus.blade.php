<html>
  <head>

    <style>
          @import url(//fonts.googleapis.com/css?family=Lato:700);

          body {
              margin:0;
              font-family:'Lato', sans-serif;
              text-align:center;
              color: skyblue;
          }

          .navigation {

              margin:1px;
              font-family:'Lato', sans-serif;
              align-items:right;
              color: #999;

          }

          .container {

              margin:1px;
              font-family:'Lato', sans-serif;
              align:center;
              color: lightcyan;

          }

          a:link, a:visited {

              display: inline-block;
              font-weight: bold;
              font-size: smaller;
              color: white;
              background-color: lightseagreen;
              width: 90px;
              text-align: center;
              padding: 8px;
              margin-top: 10px;
              text-decoration: none;
          }

          a:hover, a:active {
              background-color: lightskyblue;
          }

          ul {
            text-align: right;
          }

          li {
              display: inline;
              margin: 1px;
          }

      </style>

  </head>

  <header>

    <p>some logo bs</p>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

  </header>

  <body>

    <nav class="navigation">
     <!-- <hr style="width: 50%"> -->
     <div class="nav-wrapper">
          @section('navigation')
            <ul id="nav-mobile">
                <li><a id="home1" href="/">Home</a></li>
                <li><a id="works1" href="works">Videos</a></li>
                <li><a id="green1" href="green">Green Ideas</a></li>
                <li><a id="donate1" href="donate">Donate Online</a></li>
                <li><a id="newsfeed1" href="newsfeed">NewsFeed</a></li>
                <li><a id="about1" href="about">About</a></li>
                <li><a id="contact1" href="contact">Contact</a></li>
            </ul>
          <!-- <hr style="width: 50%"> -->
          @show
      </div>
    </nav>

    <div id="container" class="container">
      @yield('content')
    </div>

    <footer>copyright stuff, ©git</footer>

    <!-- smooth scroll between articles in the page -->
    <script type="text/javascript" src="/js/smoothScroll.js"></script>

  </body>

</html>