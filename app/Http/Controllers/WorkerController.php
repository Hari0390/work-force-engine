<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\WorkProvider;
use App\Models\Worker;
use App\Models\User;

use Auth;


class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = Auth::user();
        $workers = Worker::all();
        if($users->roll == 2)
        {
            $workproviders = WorkProvider::where('user_id','=',$users->id)->get();
            foreach($workproviders as $workprovider)
            {

                $array[] = [
                        'wp_id' => $workprovider->wp_id,
                        'name' => $workprovider->company_name,
                        'email'=>$workprovider->email,
                        'address'=>$workprovider->address,
                        'contactno'=>$workprovider->contact_no,
                        'job_role'=>$workprovider->job_role,
                        'qualification'=>$workprovider->qualification,
                        'salary'=>$workprovider->salary,
                        'experience'=>$workprovider->experience
                ];
            }
            //return $array;
            return view('worker.wavailablejob',compact('array','users'));
        }
        else
        {
            $array = [];
            $users = Auth::user();
           
            $workproviders = WorkProvider::all();
            foreach($workproviders as $workprovider)
            {
                $workers = Worker::where('wpro_id','=',$workprovider->wp_id)->where('w_user_id','=',$users->id)->count();

                //return $workers;
                $array[] = [
                        'wp_id' => $workprovider->wp_id,
                        'name' => $workprovider->company_name,
                        'email'=>$workprovider->email,
                        'address'=>$workprovider->address,
                        'contactno'=>$workprovider->contact_no,
                        'job_role'=>$workprovider->job_role,
                        'qualification'=>$workprovider->qualification,
                        'salary'=>$workprovider->salary,
                        'experience'=>$workprovider->experience,
                        'status'=>$workers 
                ];
            }
           // return $array;
            //return $workproviders;
            return view('worker.wavailablejob',compact('array','users'));
            
        }
        

    }

    /**
     * Show the form for creating a new resource.
     */

    public function display_requestform(string $id)
    {
        $user_id = $id;
        //return  $user_id;
        $users = Auth::user();
        return view('worker.requestform',compact('users','user_id'));
    }

    
    public function create()
    {
        //$users = Auth::user();
        //return view('worker.requestform',compact('users'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_requestform(Request $request,$id)
    {
        $users = Auth::user();
        $workproviders = WorkProvider::find($id);
        //return $workproviders;
        $data = new Worker;
        $data->w_user_id=$users->id;
        $data->wpro_id=$workproviders->wp_id;
        $data->wp_user_id=$workproviders->user_id;
        $data->worker_name=$request->name;
        $data->worker_email=$request->email;
        $data->worker_address=$request->address;
        $data->worker_contact_no=$request->contactno;
        $data->worker_qualification=$request->qualification;
        $data->worker_experience=$request->experience;
        $data->worker_cv=$request->cv;
        $data->worker_request='requested';
        $data->save();
        return redirect()->route('worker.index')->with('message','Requested Successfully');
    }

    public function viewreplay()
    {
        $users = Auth::user();
        if($users->id == 1)
        {
            $workprovider = WorkProvider::all();
            $workers = Worker::join('work_providers','work_providers.wp_id','=','workers.wpro_id')
                ->get();
        //return $workers;
            return view('worker.viewreplayrequest',compact('workers'));
        }
        else
        {
            $workprovider = WorkProvider::all();
            $workers = Worker::join('work_providers','work_providers.wp_id','=','workers.wpro_id')
                ->where('w_user_id','=',$users->id)
                ->get();
        //return $workers;
        return view('worker.viewreplayrequest',compact('workers'));
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
