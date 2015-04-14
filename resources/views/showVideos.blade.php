@extends('app1')

@section('content')

<div class="videos">

    <video width="120" height="240" controls>
      <source src="videos/{{$videoLink}}" type="video/mp4">
      Your browser does not support the video tag.
    </video>

</div>

@stop