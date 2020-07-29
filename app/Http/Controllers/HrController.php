<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrController extends Controller
{
   public function manageEvent(){

     return view('manageEvent');
   }

   public function allReport(){

    return view('allReport');
  }
  
  public function icmStaffs(){
    return view('icmStaffs');
  }
  
  public function leaveRequest(){
    return view('leaveRequest');
  }
}
