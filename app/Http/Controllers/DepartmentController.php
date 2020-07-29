<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use\App\Department;



class DepartmentController extends Controller
{
    public function subDept(){
    return view('subDept');
  }

  public function hr(){
    return view('hr');
  }


}