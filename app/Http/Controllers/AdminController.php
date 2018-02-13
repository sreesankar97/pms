<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function index()
    {
        return view('admin');
    }

    public function show_login()
    {
        return view('auth/admin_login');
    }
    

        // public function check_login(Request $request){
        //     if( Auth::attempt(['email' => $request->email]) ) {
        //         return redirect()->route('admin_index');    
        //     }
        //     else{
        //          return redirect()->route('admin_login');
        //      }
        //     }
}

