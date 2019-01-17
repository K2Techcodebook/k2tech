<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user_profiles;
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
    $post = user_profiles::where('user_id', '=',$r->user_id)->get();

    return view('pages.affiliate.profile',compact('post',$post)); 
    }

public function Update_profile(Request $request)
{

  $this->validate($request, [
               'name' => 'required|string|max:255',
            'username' => 'required|string|max:40',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255',
        ]);

       // $request->avatar->storeAs('avatars',$avatarName);

     
        $user = Auth::user();
 if(Input::file('image')){
       $avatarName = $user->id.''.$request['username'].'.'.request()->image->getClientOriginalExtension();
     }

        $old_name = $user->username;
        $user->name = $request['name'];
        $user->username = $request['username'];
        $user->phone = $request['phone'];
        $user->email = $request['email'];
     if(isset($avatarName)) { 
      $user->avatar =    env('APP_URL').'/img/'.$avatarName;
    }

        $user->update();


        $file = $request->file('image');
     if(isset($avatarName)) {      $filename = $avatarName;
         $old_filename= $avatarName;
      //  $filename = $request['username'] . '-' . $user->id . '.jpg';
       // $old_filename = $old_name . '-' . $user->id . '.jpg';
        $update = false;
        if (Storage::disk('uploads')->has($old_filename)) {
            $old_file = Storage::disk('uploads')->get($old_filename);
            Storage::disk('uploads')->put($filename, $old_file);
            $update = true;
        }
        if ($file) {
            Storage::disk('uploads')->put($filename, File::get($file));
        }
        if ($update && $old_filename !== $filename) {
            Storage::delete($old_filename);
        }

         }
    $message ='Account has been successfully updated!';
  return redirect()->back()->with('status', $message);
}


}
