<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller {
    public function login() {
        // Getting all post data
        $data = Input::all();
        // Applying validation rules.
        $rules = array(
            'email' => 'required|email',
            'password' => 'required|min:3',
        );
        $validator = Validator::make($data, $rules);
        if ($validator->fails()){
            // If validation fails redirect back to login.
            return Redirect::to('admin')->withInput(Input::except('password'))->withErrors($validator);
        }
        else {
            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );
            // doing login.
            if (Auth::validate($userdata)) {
                if (Auth::attempt($userdata)) {
                    return Redirect::intended('edit');
                }
            }
            else {
                // if any error send back with message.
                Session::flash('error', 'Something went wrong');
                return Redirect::to('admin');
            }
        }
    }

    public function logout() {
        Auth::logout(); // logout user
        return Redirect::to('admin'); //redirect back to login
    }
}