<?php namespace App\Http\Controllers;

class VideosController extends Controller {

    public function show($videoLink){

        return view("videos") -> with ("videoLink", $videoLink);

    }


}
