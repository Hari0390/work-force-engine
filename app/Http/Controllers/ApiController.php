<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ApiController extends Controller
{
    public function vendoraddform()
    {
        return view('vendor');
    }
    public function vendorcreate()
    {
        $response = Http::post('http://primetransports.in/paint_shop/paint_shop/public/api/vendor_store', [
            'name' => 'ramanan',
            'address' => 'palakkad',
            'contact' => '1231231231',
            'gstin' => '0',
        ]);
        return redirect()->route('vendor_addform')->with('message','Added vendor Successfully!');
    }
    
}
