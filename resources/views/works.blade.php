@extends('appPlus')

    @section('gjera')

    <title>Our Works</title>
    <link href="{{ asset('css/videoLinkStyle6.css') }}" rel="stylesheet" type="text/css" >

    <section class="row text-center">

    <ul class="ch-grid">

            @foreach($vids as $vid)

                <li>
                    <div class="ch-item ch-img-1">

                        <div class="ch-info">
                            <h3>{{$vid->title}}</h3>
                            <p>{{$vid->author}}</p>

                            <p>{!! HTML::link("{{$vid->video_url}}", "View Video")  !!}</p>

                        </div>
                    </div>
                </li>

            @endforeach

    </ul>

    <div>
        {!! $vids->render() !!}
    </div>

    </section>

@stop