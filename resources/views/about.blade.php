@extends('app1')

@section('content')

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.jscroll.min.js"></script>

<style>
    .about{
        background-image: url("/css/images/about.png");
        background-size: cover;
        height: 100%;
        width: 100%;
        background-repeat: no-repeat;

    }
</style>

<title>About Page</title>

<div class='about'>
    <h1>About stuff</h1>
    <p> a lot of stuff going on here
    <br> blah blah blah</p>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
    <a href="contact" class="nextPageLoad"></a>
</div>

<script>
    $('.about').jscroll({
        loadingHtml: '<img src="/css/images/loader.gif" alt="Loading" />',
        padding: 20,
        nextSelector: '.nextPageLoad'
    });
</script>
@stop