<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

class AffiliateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:affiliate');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Maffiliates');
    }
    public function Affilatebox()
    {

    }
    public function profile()
    {
         $r= Auth::user();
        // dd($r);
  // $post = comments::find(1);
    return view('pages.profile',compact('r',$r)); 
    }
}
