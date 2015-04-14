@extends('app')

    @section('content')

             <title>Home Page</title>

             <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

             <link href="{{ asset('css/homeStyle.css') }}" rel="stylesheet" type="text/css" >

              <article class = 'videos' id = 'videos'>

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

               <style>

                    .home1 a {
                        background-color: transparent;
                        align-self: right;
                        display: inline-block;
                        height: 32px;
                        width: 54px;
                        background-image: url("/css/images/down.png");
                    }

                    .home1 a:hover {
                        background-color: lightcyan;
                        opacity: 0.6;
                    }

                    .home1 ul {
                        display: inline-block;
                        text-align: center;
                        vertical-align: text-bottom;
                    }

                    .home1 li {
                        display: block;
                        margin: 1px;
                    }

               </style>

               <div  class="home1">
                    <ul>
                        <li>
                            <a href="#green"></a>
                        </li>
                    </ul>
               </div>

             </article>

              <article class = 'green' id="green">
                <style>

                                  .home2 a {
                                      background-color: transparent;
                                      align-self: right;
                                      display: inline-block;
                                      height: 32px;
                                      width: 54px;
                                      background-image: url("/css/images/up.png");
                                  }

                                  .home2 a:hover {
                                      background-color: lightcyan;
                                      opacity: 0.6;
                                  }

                                  .home2 ul {
                                      display: inline-block;
                                      text-align: center;
                                      vertical-align: text-bottom;
                                  }

                                  .home2 li {
                                      display: block;
                                      margin: 1px;
                                  }

                             </style>

                <div  class="home2">
                    <ul>
                        <li>
                          <a href="#videos"></a>
                        </li>
                    </ul>
                </div>

                <h1>Green Ideas</h1>
                <p>slideshow goes here</p>

                <style>

                      .home3 a {
                          background-color: transparent;
                          align-self: right;
                          display: inline-block;
                          height: 32px;
                          width: 54px;
                          background-image: url("/css/images/down.png");
                      }

                      .home3 a:hover {
                          background-color: lightcyan;
                          opacity: 0.6;
                      }

                      .home3 ul {
                          display: inline-block;
                          text-align: center;
                          vertical-align: text-bottom;
                      }

                      .home3 li {
                          display: block;
                          margin: 1px;
                      }

                 </style>

                <div  class="home3">
                    <ul>
                        <li>
                          <a href="#donate"></a>
                        </li>
                    </ul>
                </div>

             </article>

              <article class = 'donate' id = 'donate'>

                <style>

                    .home4 a {
                        background-color: transparent;
                        align-self: right;
                        display: inline-block;
                        height: 32px;
                        width: 54px;
                        background-image: url("/css/images/up.png");
                    }

                    .home4 a:hover {
                        background-color: lightcyan;
                        opacity: 0.6;
                    }

                    .home4 ul {
                        display: inline-block;
                        text-align: center;
                        vertical-align: text-bottom;
                    }

                    .home4 li {
                        display: block;
                        margin: 1px;
                    }

                </style>
                <div  class="home4">
                    <ul>
                        <li>
                          <a href="#green"></a>
                        </li>
                    </ul>
                </div>

                <h1>Donate Online</h1>
                <p> Some form for donating here</p>

                <style>

                    .home5 a {
                        background-color: transparent;
                        align-self: right;
                        display: inline-block;
                        height: 32px;
                        width: 54px;
                        background-image: url("/css/images/down.png");
                    }

                    .home5 a:hover {
                        background-color: lightcyan;
                        opacity: 0.6;
                    }

                    .home5 ul {
                        display: inline-block;
                        text-align: center;
                        vertical-align: text-bottom;
                    }

                    .home5 li {
                        display: block;
                        margin: 1px;
                    }

                </style>

                <div  class="home5">
                    <ul>
                        <li>
                          <a href="#newsfeed"></a>
                        </li>
                    </ul>
                </div>
             </article>

              <article class = 'newsfeed' id="newsfeed">

                <style>

                .home6 a {
                  background-color: transparent;
                  align-self: right;
                  display: inline-block;
                  height: 32px;
                  width: 54px;
                  background-image: url("/css/images/up.png");
                }

                .home6 a:hover {
                  background-color: lightcyan;
                  opacity: 0.6;
                }

                .home6 ul {
                  display: inline-block;
                  text-align: center;
                  vertical-align: text-bottom;
                }

                .home6 li {
                  display: block;
                  margin: 1px;
                }

                </style>
                <div  class="home6">
                  <ul>
                      <li>
                        <a href="#donate"></a>
                      </li>
                  </ul>
                </div>

                <h1>NewsFeed</h1>
                <p>implement infinite scrolling here</p>

                <style>

                .home7 a {
                  background-color: transparent;
                  align-self: right;
                  display: inline-block;
                  height: 32px;
                  width: 54px;
                  background-image: url("/css/images/down.png");
                }

                .home7 a:hover {
                  background-color: lightcyan;
                  opacity: 0.6;
                }

                .home7 ul {
                  display: inline-block;
                  text-align: center;
                  vertical-align: text-bottom;
                }

                .home7 li {
                  display: block;
                  margin: 1px;
                }

                </style>
                <div  class="home7">
                  <ul>
                      <li>
                        <a href="#about"></a>
                      </li>
                  </ul>
                </div>

            </article>

              <article class = 'about' id="about">

                    <style>

                        .home8 a {
                        background-color: transparent;
                        align-self: right;
                        display: inline-block;
                        height: 32px;
                        width: 54px;
                        background-image: url("/css/images/up.png");
                        }

                        .home8 a:hover {
                        background-color: lightcyan;
                        opacity: 0.6;
                        }

                        .home8 ul {
                        display: inline-block;
                        text-align: center;
                        vertical-align: text-bottom;
                        }

                        .home8 li {
                        display: block;
                        margin: 1px;
                        }

                    </style>
                    <div  class="home8">
                    <ul>
                        <li>
                          <a href="#newsfeed"></a>
                        </li>
                    </ul>
                    </div>

                   <h1>About Us</h1>
                   <p>Some sort of description of the activity goes here</p>

                <style>

                .home9 a {
                  background-color: transparent;
                  align-self: right;
                  display: inline-block;
                  height: 32px;
                  width: 54px;
                  background-image: url("/css/images/down.png");
                }

                .home9 a:hover {
                  background-color: lightcyan;
                  opacity: 0.6;
                }

                .home9 ul {
                  display: inline-block;
                  text-align: center;
                  vertical-align: text-bottom;
                }

                .home9 li {
                  display: block;
                  margin: 1px;
                }

                </style>
                <div  class="home9">
                  <ul>
                      <li>
                        <a href="#contact"></a>
                      </li>
                  </ul>
                </div>

             </article>

              <article class = 'contact' id = 'contact'>

                    <style>

                        .home10 a {
                            background-color: transparent;
                            align-self: right;
                            display: inline-block;
                            height: 32px;
                            width: 54px;
                            background-image: url("/css/images/up.png");
                        }

                        .home10 a:hover {
                            background-color: lightcyan;
                            opacity: 0.6;
                        }

                        .home10 ul {
                            display: inline-block;
                            text-align: center;
                            vertical-align: text-bottom;
                        }

                        .home10 li {
                            display: block;
                            margin: 1px;
                        }

                    </style>
                    <div  class="home10">
                    <ul>
                        <li>
                          <a href="#about"></a>
                        </li>
                    </ul>
                    </div>

                     <h1>Contact stuff</h1>
                     <p>Contact info, contact form?</p>
             </article>

             @stop