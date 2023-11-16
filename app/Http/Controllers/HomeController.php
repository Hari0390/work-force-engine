<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        return view('home');
    }

    public function profile()
    {
        $users = Auth::User();
        return view('profile',compact('users'));
    }

   

    public function store(Request $request)
    {
        $data = Auth::user();
        if($request->hasfile('image'))
        {

            $file=$request->file('image');
            //$val=;
            if($request->hasfile('image'))
            {        
                $request->validate(['image'=> 'mimes:jpeg,jpg,png,gif|max:10']);
                $extension = $file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $request->image->move(public_path('uploads'), $filename);                
                //return $file;
                $data->image=$filename;
            }
            else
            {
                //return $request;
                alert('file must maximum 10Mb and in the format jpg/jpeg/png/gif');
                //$message = "file must maximum 10Mb and in the format jpg/jpeg/png/gif";
                return $message;
            }
        }
        
        $data->name=$request->name;
        $data->email=$request->email;
        $data->contact_no=$request->contactno;
        $data->address=$request->address;
        $data->roll=$request->status;
        $data->details=$request->details;
        $data->save();
        return redirect()->route('profile')->with('message','Profile Edit Successfully');

    }
}
