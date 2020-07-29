<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
use DB;


class ProfileController extends Controller
{
    public function profile(){
        return view('profile');

    }
}
