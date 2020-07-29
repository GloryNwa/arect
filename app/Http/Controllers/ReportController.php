<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
   public function manageReport(){
       return view('manageReport');
   }


   public function uploadReport(){
    return view('uploadReport');
}

public function taskboard(){
    return view('taskboard');
  }
}
