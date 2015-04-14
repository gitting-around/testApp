<html>
  <head>
  <style>
          @import url(//fonts.googleapis.com/css?family=Lato:700);

          body {
              margin:0;
              font-family:'Lato', sans-serif;
              text-align:center;
              color: #999;
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
              color: #799;

          }

          a:link, a:visited {

              display: inline-block;
              font-weight: bold;
              color: white;
              background-color: lightseagreen;
              width: 120px;
              text-align: center;
              padding: 8px;
              margin-top: 10px;
              text-decoration: none;
          }

          a:hover, a:active {
              background-color: lightskyblue;
          }

      </style>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

  </head>

  <header>

  </header>

  <body>

    <nav class="navigation">
     <!-- <hr style="width: 50%"> -->
      @section('navigation')
        <a id="home1" href="/">Home</a>
        <a id="works1" href="#works">Our Works</a>
        <a id="about1" href="#about">About</a>
        <a id="contact1" href="#contact">Contact</a>
      <!-- <hr style="width: 50%"> -->
      @show
    </nav>

    <div id="container" class="container" data-ui="jscroll-default">
      @yield('content')
    </div>

    	<script type="text/javascript" src="/js/smoothScroll.js"></script>
    	<script type="text/javascript" src="/js/jquery.jscroll.js"> $('.container').jscroll();
    	 autoTriggerUntil: 3</script>

  </body>
</html>
