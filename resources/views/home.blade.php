@extends('app')

    @section('gjera')

            <title>Home Page</title>

            <section class="videos" id="videos">
                <div class="container-fluid">
                     <br><br>
                     <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="section-heading">Videos</h2>
                        </div>
                     </div>
                     <br><br>
                     <div class="row">

                           <ul class="ch-grid-1">
                               <div class="col-md-4">
                                   <li>
                                       <div class="ch-item-1 ch-img">
                                           <div class="ch-info-1"><br><br>
                                               <a href="works">
                                                    <h3>Video te Momentit</h3>
                                               </a>
                                           </div>
                                       </div>
                                   </li>
                               </div>

                               <div class="col-md-4">

                                    <li>
                                       <div class="ch-item-1 ch-img">
                                           <div class="ch-info-1"><br><br>
                                               <h3>Video me Filma</h3>
                                           </div>
                                       </div>
                                   </li>
                               </div>
                               <div class="col-md-4">

                                   <li>
                                      <div class="ch-item-1 ch-img">
                                          <div class="ch-info-1"><br><br>
                                              <h3>Video Konferenca</h3>
                                          </div>
                                      </div>
                                  </li>
                              </div>
                           </ul>

                     </div>

                </div>
            </section>

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                              <article  class="green" id="green">

                                    <h2>Green Ideas</h2>

                              </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="donate" id="donate">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                             <article>

                                <h2 class="section-heading">Donate Online</h2>
                                <h3 class="section-subheading text-muted"> INSERT donation form here</h3>

                             </article>
                        </div>
                     </div>
                 </div>
             </section>

            <section class = 'newsfeed' id="newsfeed">
                <div class="container-fluid">
                    <div class="row text-center"><h2 class="section-heading">Newsfeed</h2></div>
                    <article>
                    <div class="row">

                        <div class="col-md-12 col-md-offset-3">

                              <div id="slider1_container" style="position: relative; width: 600px; height: 600px;">
                                                                          <!-- Slides Container -->
                                  <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width:600px; height:300px; overflow: hidden;">

                                      <!-- Slide -->
                                      @foreach($news as $new)
                                          <div>
                                              <img u="image" src="/css/images/light11.png" />
                                              <div u="caption" t="MCLIP|B" style="position: absolute; top: 0px; left: 0px;
                                                  width: 600px; height: 300px;">
                                                  <div style="position: absolute; top: 0px; left: 0px; width:600px; height: 300px;
                                                      background-color: Black; opacity: 0.5; filter: alpha(opacity=50);">
                                                  </div>
                                                  <div style="position: absolute; top: 0px; left: 0px; width:600px; height: 100px;
                                                      color: White; font-size: 16px; font-weight: bold; line-height: 15px; text-align: center;">
                                                      <h3 class="section-subheading"> {{$new->title}}</h3>
                                                      <h5 class="section-subheading"> {{$new->published_at}}</h5><br><br>
                                                      <div style="font-weight: 9px;">{{$new->content}}</div>
                                                  </div>
                                              </div>
                                          </div>
                                      @endforeach

                                      <div>
                                            <img u="image" src="/css/images/light11.png" />
                                            <div u="caption" t="MCLIP|B" style="position: absolute; top: 0px; left: 0px;
                                                width:600px; height: 50px;">
                                                <div style="position: absolute; top: 100px; left: 0px; width:600px; height: 50px;
                                                    background-color: Transparent;">
                                                </div>
                                                <div style="position: absolute; top: 123px; left: 0px; width:600px; height: 50px;
                                                    color: White; font-size: 16px; font-weight: bold; line-height: 50px; text-align: center;">
                                                    <a href="newsfeed" role="button" class="btn btn-info btn-lg">More</a><br>
                                                </div>
                                            </div>
                                        </div>

                                  </div>
                                  <link href="{{ asset('css/arrowStyle.css') }}" rel="stylesheet" type="text/css" >
                                  <!-- Arrow Left -->
                                  <span u="arrowleft" class="jssora03l" style="top: 220px; left: 8px;">
                                  </span>
                                  <!-- Arrow Right -->
                                  <span u="arrowright" class="jssora03r" style="top: 220px; right: 8px;">
                                  </span>
                                  <!--#endregion Arrow Navigator Skin End -->
                                  <a style="display: none" href="http://www.jssor.com">Carousel Slider</a>
                                </div>



                        </div>
                    </div>
                    </article>
                </div>
            </section>

            <section class="about" id="about">
                <div class="row text-center">
                    <div class="col-md-12">
                      <article>

                           <h1>About Us</h1>
                           <p>Info mbi personelin ketu</p>

                      </article>
                    </div>
                </div>
              </section>

            <section class="contact"  id="contact">
                <div class="container-fluid">
                      <article class = 'contact'>
                            <div class="row text-center">
                                 <h1 class="section-heading">Contact Us</h1>
                            </div>

                            <div class="row text-center">
                                <div class="col-md-6 center-block">
                                    @if(Session::has('message'))
                                        <div class="alert alert-info">
                                          {{Session::get('message')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-md-6 center-block">
                                    {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

                                    <div class="form-group">
                                        {!! Form::label('Your Name') !!}
                                        {!! Form::text('name', null,
                                            array('required',
                                                  'class'=>'form-control',
                                                  'placeholder'=>'Your name')) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('Your E-mail Address') !!}
                                        {!! Form::email('email', null,
                                            array('required',
                                                  'class'=>'form-control',
                                                  'placeholder'=>'Your e-mail address')) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('Your Message') !!}
                                        {!! Form::textarea('message', null,
                                            array('required',
                                                  'class'=>'form-control',
                                                  'placeholder'=>'Your message')) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Contact Us!',
                                          array('class'=>'btn btn-primary')) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>

                            <div class="row text-center">

                                 <div class="col-md-12">

                                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h3 id="myModalLabel">Thank you for the email</h3>
                                          </div>

                                          <div class="modal-body">
                                            We will contact you back as soon as possible
                                          </div>

                                          <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true">Ok</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                 </div>
                            </div>
                      </article>
                </div>
            </section>

@stop