<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller {
    public function showLogin() {
        return view('admin.admin');
    }
}