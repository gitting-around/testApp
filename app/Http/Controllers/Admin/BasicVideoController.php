<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Video;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Input;
use Illuminate\Support\Facades\Session;
use Validator;

class BasicVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $vdo = Video::paginate(10);

        return view('admin.basic.indexVideo') -> with('vdo', $vdo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.basic.createVideo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $image = array('image' => Input::file('image'));
        $video = array('video' => Input::file('video'));

        $rules = array(
            'title'       => 'required',
            'description'      => 'required',
            'author' => 'required',
            'image' => 'required',
            'image' => 'required',
            'video' => 'required',
            'format' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('basic/indexVideo/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }

        else{
            if(Input::file('image')->isValid() && Input::file('video')->isValid())
            {
                $iPath = '/css/images/'; // upload path
                $vPath = '/videos/';
                $iExtension = Input::file('image')->getClientOriginalExtension(); // getting image extension
                $vExtension = Input::file('video')->getClientOriginalExtension();
                $iName = $image->getClientOriginalName();
                $vName = $video->getClientOriginalName();
                Input::file('image')->move($iPath, $iName);
                Input::file('video')->move($vPath, $vName);

                // store
                $vd = new Video;
                $vd->title             = Input::get('title');
                $vd->description       = Input::get('description');
                $vd->author            = Input::get('author');
                $vd->image_url         = $iPath + $iName;
                $vd->video_url         = $vPath + $vName;
                $vd->published_at      = Carbon::now();;
                $vd->save();

                $vdo = Video::paginate(10);

                // redirect
                Session::flash('message', 'Successfully uploaded video!');
                return Redirect::to('admin/basic/indexVideo')-> with('vdo', $vdo);
            }

            else{
                // sending back with error message.
                Session::flash('error', 'uploaded file is not valid');
                return Redirect::to('basic/indexVideo/create');
            }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //$sel = Video::find();



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
