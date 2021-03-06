<?php namespace App\Http\Controllers;

use App\Newsfeed;
use App\Project;
use App\Video;

class FeedbackController extends Controller
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

    public function handleForm()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::all();

        //Validation rules
        $rules = array (
            'name' => 'required|alpha',
            'message' => 'required|min:25',
            'email' => 'required|email',
            'phone_number'=>'numeric|min:8'

        );

        //Validate data
        $validator = Validator::make ($data, $rules);

        //If everything is correct than run passes.
        if ($validator -> passes()){

        //Send email using Laravel send function
            Mail::send('emails.hello', $data, function($message) use ($data)
            {
        //email 'From' field: Get users email add and name
                $message->from($data['email'] , $data['name']);
        //email 'To' field: cahnge this to emails that you want to be notified.
                $message->to('mirgita.frasheri@gmail.com', 'my name')->cc('mirgita.frasheri@gmail.com')->subject('contact request');

            });

            $news = Newsfeed::paginate(1);;
            $green = Project::all();
            $vids = Video::all();
            return view('home')->with('news', $news)->with('green', $green)->with('vids', $vids);
        }
        else{
        //return contact form with errors
            return Redirect::to('#myModal')->withErrors($validator);
        }


    }

}
