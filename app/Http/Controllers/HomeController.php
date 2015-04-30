<?php namespace App\Http\Controllers;

use App\Newsfeed;
use App\Project;
use App\Video;
use App\Http\Requests\ContactFormRequest;


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
        $news = Newsfeed::paginate(10);
        $green = Project::all();
        $vids = Video::all();
        return view('home')->with('news', $news)->with('green', $green)->with('vids', $vids);
    }

    public function about()
    {
        return view("about");
    }

    public function works()
    {
        $vids = Video::paginate(10);
        return view("works")->with('vids', $vids);
    }

    public function contact(ContactFormRequest $request)
    {
        \Mail::send('contact-email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->from('wj@wjgilmore.com');
                $message->to('wj@wjgilmore.com', 'Admin')->subject('TODOParrot Feedback');
            });

        return \Redirect::to('home#contact')
            ->with('message', 'Thanks for contacting us!');

    }

    public function donate()
    {
        return view("donate");
    }

    public function newsfeed()
    {
        $newsfed = Newsfeed::paginate(10);

        return view("newsfeed")->with('newsfed', $newsfed);
    }

    public function green()
    {
        return view("green");
    }
}
