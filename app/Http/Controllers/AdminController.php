<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkProvider;
use App\Models\Worker;
use App\Models\User;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('roll','=',3)->get();
        return view('admin.adminworkersview',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users  = User::where('roll','=',2)->get();
        return view('admin.adminworkproviders',compact('users'));
    }

    public function workerlist()
    {
        $users = User::where('roll','=',3)->get();
        //return $users;
        return view('admin.workerlist',compact('users'));
    }

    public function workersort(Request $request)
    {
        $user = User::find($request->id);
        return $user;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
