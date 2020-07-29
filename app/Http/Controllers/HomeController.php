<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Auth;
use DB;
use App\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }


    public function portfolio()
    {
        return view('portfolio');
    }

    
    public function services()
    {
        return view('services');
    }

    public function clients()
    {
        return view('clients');
    }

    public function contactus()
    {
        return view('contactus');
    }

    
    public function contact(Request $request){
                 
        $this->validate($request, [

          'name' => 'required',
          'email' => 'required',
          'phone' => 'required',
          'message' => 'required'
        ]);

           $contact = new Contact();
           $contact->name =  $request->input('name');
           $contact->email = $request->input('email');
           $contact->phone = $request->input('phone');
           $contact->message = $request->input('message');
           $contact->save();

           return redirect("/contact/arects")->with('response', 'Thank you for contacting us, we will get back to you shortly');

}

}
