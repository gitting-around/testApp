@extends('app')

    @section('gjera')

            <title>Home Page</title>

            <section class="videos" id="videos">
                <div class="container-fluid">

                     <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="section-heading">Videos</h2>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col-md-12">
                              <article>

                                           <ul class="ch-grid-1">
                                               <li>
                                                   <div class="ch-item-1 ch-img">
                                                       <div class="ch-info-1">
                                                           <h3>Video te Momentit</h3>
                                                           <a href="works"><span class="glyphicon glyphicon-play-circle img-circle"></span></a>
                                                       </div>
                                                   </div>
                                               </li>

                                                <li>
                                                   <div class="ch-item-1 ch-img">
                                                       <div class="ch-info-1">
                                                           <h3>Video me Filma</h3>
                                                       </div>
                                                   </div>
                                               </li>

                                               <li>
                                                  <div class="ch-item-1 ch-img">
                                                      <div class="ch-info-1">
                                                          <h3>Video Konferenca</h3>
                                                      </div>
                                                  </div>
                                              </li>
                                           </ul>

                              </article>
                          </div>
                     </div>

                </div>
            </section>

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                              <article  class="green" id="green">

                                    <div id="slider1_container" style="position: relative; width: 600px; height: 600px;">
                                            <!-- Slides Container -->
                                            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width:600px; height:300px; overflow: hidden;">

                                                <!-- Slide -->
                                                @foreach($green as $greenP)
                                                    <div>
                                                        <img u="image" src="{{$greenP->image_url}}" />
                                                        <div u="caption" t="MCLIP|B" style="position: absolute; top: 0px; left: 0px;
                                                            width:600px; height: 50px;">
                                                            <div style="position: absolute; top: 0px; left: 0px; width:600px; height: 50px;
                                                                background-color: Transparent;">
                                                            </div>
                                                            <div style="position: absolute; top: 0px; left: 0px; width:600px; height: 50px;
                                                                color: White; font-size: 16px; font-weight: bold; line-height: 50px; text-align: center;">
                                                                <h2 class="section-heading">Green Ideas</h2>
                                                            </div>
                                                        </div>
                                                        <div u="caption" t="MCLIP|B" style="position: absolute; top: 250px; left: 0px;
                                                            width: 600px; height: 50px;">
                                                            <div style="position: absolute; top: 0px; left: 0px; width:600px; height: 50px;
                                                                background-color: Black; opacity: 0.5; filter: alpha(opacity=50);">
                                                            </div>
                                                            <div style="position: absolute; top: 0px; left: 0px; width:600px; height: 50px;
                                                                color: White; font-size: 16px; font-weight: bold; line-height: 50px; text-align: center;">
                                                                {{$greenP->description}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                            <link href="{{ asset('css/arrowStyle.css') }}" rel="stylesheet" type="text/css" >
                                            <!-- Arrow Left -->
                                            <span u="arrowleft" class="jssora03l" style="top: 123px; left: 8px;">
                                            </span>
                                            <!-- Arrow Right -->
                                            <span u="arrowright" class="jssora03r" style="top: 123px; right: 8px;">
                                            </span>
                                            <!--#endregion Arrow Navigator Skin End -->
                                            <a style="display: none" href="http://www.jssor.com">Carousel Slider</a>
                                    </div>

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

            <section  class = 'pre-scrollable newsfeed' id="newsfeed" style="max-height: 500px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">

                              <article>

                                <h2 class="section-heading">Newsfeed</h2>

                                <div id="boxes">
                                    @foreach($news as $new)

                                        <h3 class="section-subheading"> {{$new->title}}</h3>
                                        <h5 class="section-subheading"> {{$new->published_at}}</h5>
                                        <div class="box">{{$new->content}}</div>

                                    @endforeach

                                </div>

                                <a href="newsfeed" role="button" class="btn btn-info btn-lg">More</a><br>

                              </article>

                        </div>
                    </div>
                </div>
            </section>

            <section class="about" id="about">
                <div class="row text-center">
                    <div class="col-md-12">
                      <article>

                           <h1>About Us</h1>
                           <p>Some sort of description of the activity goes here</p>

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