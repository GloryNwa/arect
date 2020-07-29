<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Auth;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){

        return view('admin.dashboard');
      }

      
///////////About Image//////////////////////////
public function uploadAbout(){

    return view('admin.uploadAbout');
  }



  public function aboutpage(Request $request){
                 
    $this->validate($request, [

      'desc' => 'required',
      
    ]);

       $banner = new Banner();
       $banner->desc=  $request->input('desc');

     
       $contact->save();

       return redirect("uploadAbout")->with('response', 'About uploaded successfully');

}
///////////Banner Image//////////////////////////
      public function uploadBannerImage(){

        return view('admin.uploadBannerImage');
      }

      public function banner(Request $request){
                 
        $this->validate($request, [

          'mtitle' => 'required',
          'btitle' => 'required',
          'stitle' => 'required',
          'file' => 'required'
        ]);

           $banner = new Banner();
           $banner->mtitle =  $request->input('mtitle');
           $banner->btitle = $request->input('btitle');
           $banner->stitle = $request->input('stitle');

         
           $contact->save();

           return redirect("uploadBannerImage")->with('response', 'Banner uploaded successfully');

}

///////////////////////////////////uploadPortfolio//////////////////////////////////////////////

     public function uploadPortfolio(){

        return view('admin.uploadBannerImage');
   }


   
   public function portfolio(Request $request){
                 
    $this->validate($request, [

      'intro' => 'required',
      'desc' => 'required',
      'file' => 'required'
    ]);

       $ports = new Portfolio();
       $ports->intro =  $request->input('intro');
       $ports->desc = $request->input('desc');


     
       $contact->save();

       return redirect("uploadPortfolio")->with('response', 'Portfolio uploaded successfully');

}


//////////////////////////////////uploadServices//////////////////////////////////////////////


public function uploadServices(){

    return view('admin.uploadServices');
}



public function services(Request $request){
             
$this->validate($request, [

  'title' => 'required',
  'desc' => 'required'
 
]);

   $services = new Service();
   $services->title =  $request->input('title');
   $services->desc = $request->input('desc');


 
   $contact->save();

   return redirect("uploadSerices")->with('response', 'Services uploaded successfully');

}


//////////////////////////////////uploadServices//////////////////////////////////////////////


public function uploadClient(){

    return view('admin.uploadClient');
}



public function client(Request $request){
             
$this->validate($request, [

  'name' => 'required'

 
]);

   $services = new Service();
   $client->name =  $request->input('name');



 
   $contact->save();

   return redirect("uploadSerices")->with('response', 'Services uploaded successfully');

}



////////////////////////////Todo///////////////////////////////////////////////////////
public function addTodo(){
    return view('add/todo');
}

public function manageTodo(){
    return view('manageTodo');
}

 
 
//////////////////////////////Logout Method//////////////////////////////////////
public function logout(){
    Auth::logout();
    session()->flush();
 return redirect("/login");

   }
   
}
