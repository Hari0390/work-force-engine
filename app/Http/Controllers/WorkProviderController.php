<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\WorkProvider;
use App\Models\Worker;
use App\Models\ReplayRequest;
use App\Models\User;
use Auth;

class WorkProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Auth::user();
        if($users->id == 1)
        {
            $workers =Worker::join('work_providers','work_providers.wp_id','=','workers.wpro_id')
                    ->get();  
        //return $workers;
        return view('workprovider.wprequestview',compact('workers','users'));
        }
        else
        {
        $workers =Worker::join('work_providers','work_providers.wp_id','=','workers.wpro_id')
                    ->where('wp_user_id','=',$users->id)
                    ->get();  
        //return $workers;
        return view('workprovider.wprequestview',compact('workers','users'));
        }
    }

    

    public function remove(string $id)
    {
        //return $id;
        $workproviders = WorkProvider::find($id);
        //return $workproviders;
        $workproviders->delete();
        return redirect()->route('worker.index')->with('delete','Vaccancy Deleted Successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('workprovider.wpvaccancy');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $users= Auth::user();
        $data = new WorkProvider;
        $data->user_id=$users->id;
        $data->company_name=$request->companyname;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->contact_no=$request->contactno;
        $data->job_role=$request->jobrole;
        $data->qualification=$request->qualification;
        $data->salary=$request->salary;
        $data->experience=$request->experience;
        $data->save();
        return redirect()->route('worker.index')->with('message','Vaccancy Added Successfully');

    }

    public function replayview(string $id)
    {
        $workers = Worker::find($id);
        //return $workers;
        return view('workprovider.replayrequest',compact('workers'));
    }

    public function replaystore(Request $request,$id)
    {
        $workers = Worker::find($id);
        //return $workers;
        //$workproviders = WorkProvider::join('workers','workers.wpro_id','=','work_providers.user_id')->find($id);
        //return $request;
        $workers->worker_name=$request->name;
        $workers->worker_email=$request->email;
        $workers->request_status=$request->status;
        $workers->request_review=$request->review;
        $workers->replay='replayed';
        $workers->save();
        return redirect()->route('workprovider.index')->with('message','Repled Successfully');
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
