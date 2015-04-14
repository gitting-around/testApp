@extends('app1')

@section('content')

<style>
    .home{
        background-image: url("/css/images/light11.png");
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;

    }

    .about{
        background-image: url("/css/images/about.png");
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;

    }

    .contact{
        background-image: url("/css/images/photography.png");
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;
    }
</style>

<title>Home Page</title>

 <article class = 'works' id = 'works'>
  <link href="{{ asset('css/videoLinkStyle2.css') }}" rel="stylesheet" type="text/css" >

  <ul class="ch-grid">
      <li>
          <div class="ch-item ch-img-1">
              <div class="ch-info">
                  <h3>To Have and Have Not </h3>
                  <p>by E. Hemingway</p>
                  <hr style="width: 40%">
                  <p>{!! HTML::link("videos/vid1.mp4", "View Video")  !!}</p>

              </div>
          </div>
      </li>
      <li>
          <div class="ch-item ch-img-2">
              <div class="ch-info">
                  <h3>Got the Blues</h3>
                  <p>by Harper Lee</p>
                  <hr style="width: 40%">
                  <p><a href="/videos/vid2.mp4">View Video</a></p>
              </div>
          </div>
      </li>
      <li>
          <div class="ch-item ch-img-3">
              <div class="ch-info">
                  <h3>Death on the Nile</h3>
                  <hr style="width: 40%">
                  <p>by A. Christie <a href="/videos/vid3.mp4">View Video</a></p>
              </div>
          </div>
      </li>
  </ul>
</article>

 <article class = 'home' id="home">
  <h1>Google Chrome</h1>
  <p>Google Chrome is a free, open-source web browser developed by Google, released in 2008.</p>
</article>

 <article class = 'about' id = 'about'>
    <div class='about'>
        <h1>About stuff</h1>
        <p> a lot of stuff going on here
        <br> blah blah blah</p>
    </div>
</article>

 <article class = 'contact' id = 'contact'>
    <div class='contact'>
        <h1>Contact stuff</h1>
    </div>
</article>


@stop