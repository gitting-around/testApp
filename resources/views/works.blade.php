@extends('appPlus')

@section('content')

<style>



</style>

<title>Our Works</title>
<link href="{{ asset('css/videoLinkStyle2.css') }}" rel="stylesheet" type="text/css" >

<ul class="ch-grid">

    @foreach($vids as $vid)

        <li>
            <div class="ch-item ch-img-1">

                <div class="ch-info">
                    <h3>{{$vid->title}}</h3>
                    <p>{{$vid->author}}</p>

                    <hr style="width: 20%">

                    <p>{!! HTML::link("{{$vid->image_url}}", "View Video")  !!}</p>

                </div>
            </div>
        </li>

    @endforeach

</ul>

@stop