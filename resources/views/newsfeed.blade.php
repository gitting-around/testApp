@extends('appPlus')

@section('gjera')

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">

                  <article>

                    <h2 class="section-heading">Newsfeed</h2><br>

                    <div id="boxes">
                        @foreach($newsfed as $newly)

                            <div class="box ">
                                <h3 class="section-subheading"> {{$newly->title}}</h3>
                                <h5 class="section-subheading"> {{$newly->published_at}}</h5>
                                <div>{{$newly->content}}</div>
                            </div>
                        @endforeach


                    <!--krijo links te navigimit midis faqeve -->
                        <div class="paginate">
                            {!! $newsfed->render() !!}
                        </div>

                    </div>

                  </article>

            </div>
        </div>
    </div>
</section>



@stop