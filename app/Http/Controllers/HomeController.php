<?php

namespace App\Http\Controllers;

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
         $this->middleware('guest:admin');
        $this->middleware('guest:business');
        $this->middleware('guest:affiliate');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
             
    }
    // public function affiliate()
    // {
    //     return view('business');
    // }
    public function admin(Request $req){
return view('admin')->withMessage('Admin');
}
public function business(Request $req){
return view('business')->withMessage('Business Member');
}
public function affiliate(Request $req){
return view('affiliates')->withMessage('Affiliate Member');
}
}
