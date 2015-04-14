<?php namespace App\Http\Controllers;

use App\Newsfeed;
use App\Project;
use App\Video;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    public function index()
    {
        $news = Newsfeed::all();
        $green = Project::all();
        return view('home')->with('news', $news)->with('green', $green);
    }

    public function about()
    {
        return view("about");
    }

    public function works()
    {
        $vids = Video::all();
        return view("works")->with('vids', $vids);
    }

    public function contact()
    {
        return view("contact");
    }

    public function donate()
    {
        return view("donate");
    }

    public function newsfeed()
    {
        return view("newsfeed");
    }

    public function green()
    {
        return view("green");
    }
}
