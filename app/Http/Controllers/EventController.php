<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Auth;
use DB;


class EventController extends Controller
{
    public function events(){
        return view('events');
    }


    

    public function addTodo(){
        return view('addTodo');
    }

    public function manageTodo(){
        return view('manageTodo');
    }

    public function leave(){
        return view('leave');
    }
}
