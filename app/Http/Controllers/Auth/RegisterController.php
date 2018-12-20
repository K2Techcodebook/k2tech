<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\user_profiles;
use App\Models\Admin;
use App\Models\Affiliates;
use App\Models\Businesses;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:business');
        $this->middleware('guest:affiliate');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array  $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //           'username' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:6', 'confirmed'],
    //     ]);

    //     // $this->Validator($request, [
    //     //     'namea' => ['required', 'string', 'max:255'],
    //     //       'usernamea' => ['required', 'string', 'max:255'],
    //     //     'emaila' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //     //     'passworda' => ['required', 'string', 'min:6', 'confirmed'],
    //     // ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
//     protected function create(array $data)
//     {


//        $this->Validator::make($data, [
//             'name' => ['required', 'string', 'max:255'],
//               'username' => ['required', 'string', 'max:255'],
//             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//             'password' => ['required', 'string', 'min:6', 'confirmed'],
//         ]);
//       $user_id = mt_rand(13, rand(100, 99999990));
//      $exist =DB::table('users')->where('user_id',$user_id)->first();
//       // $user=User::find($user_id);
//       // if(){

//       // }
//      if(!$exist){
//        user_profiles::create(array(
//                  'user_id' => $user_id,
//                  'email' => $data['email'],
//                   'phone_number' => 0,
//                   'full_name' =>$data['name'],
//                   'address' => 0,
//                   'gender' =>0,
//             ));

//              return   User::create([
//                   'user_id' => $user_id,
//                    'name' => $data['name'],
//                    'username' => $data['username'],
//                    'email' => $data['email'],
//                     'ip_address' =>  request()->ip(),
//                    'password' => Hash::make($data['password']),
//                ]);
// }
// else{
// //  create(array $data);
// return false;
//   }

//     }

        protected function createAdmin(Request $request)
    {
    $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
              'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],

        ]);
      $user_id = mt_rand(13, rand(100, 99999990));
     $exist =DB::table('users')->where('user_id',$user_id)->first();
      // $user=User::find($user_id);
      // if(){

      // }
     if(!$exist){
       user_profiles::create([
                 'user_id' => $user_id,
                 'email' => $request['email'],
                  'phone_number' => 0,
                  'full_name' =>$request['name'],
                  'address' => 0,
                  'gender' =>0,
            ]);
  Admin::create([
                  'user_id' => $user_id,
                   'name' => $request['name'],
                   'username' => $request['username'],
                   'email' => $request['email'],
                    'ip_address' =>  request()->ip(),
                   'password' => Hash::make($request['password']),
               ]);
               return redirect()->intended('login/admin');
}
else{
//  create(array $data);
return false;
  }

    }
        protected function createBusiness(Request $request)
    {

           $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
              'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:businesses'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],

        ]);
      $user_id = mt_rand(13, rand(100, 99999990));
     $exist =DB::table('businesses')->where('user_id',$user_id)->first();
      // $user=User::find($user_id);
      // if(){

      // }
     if(!$exist){
       user_profiles::create([
                 'user_id' => $user_id,
                 'email' => $request['email'],
                  'phone_number' => 0,
                  'full_name' =>$request['name'],
                  'address' => 0,
                  'gender' =>0,
            ]);

              Businesses::create([
                  'user_id' => $user_id,
                   'name' => $request['name'],
                   'username' => $request['username'],
                   'email' => $request['email'],
                    'ip_address' =>  request()->ip(),
                   'password' => Hash::make($request['password']),
               ]);
              return redirect()->intended('login/business');
}
else{
//  create(array $data);
return false;
  }

    }
        protected function createAffiliate(Request $request)
    {
           $this->validate($request, [
            'namea' => ['required', 'string', 'max:255'],
              'usernamea' => ['required', 'string', 'max:255'],
            'emaila' => ['required', 'string', 'email', 'max:255', 'unique:affiliates'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],

        ]);
     // var_dump($request['email']);
     // $this->validator($request->all())->validate();
      $user_id = mt_rand(13, rand(100, 99999990));
     $exist =DB::table('affiliates')->where('user_id',$user_id)->first();
      // $user=User::find($user_id);
      // if(){

      // }
     if(!$exist){
       user_profiles::create([
                 'user_id' => $user_id,
                 'email' => $request['emaila'],
                  'phone_number' => 0,
                  'full_name' =>$request['namea'],
                  'address' => 0,
                  'gender' =>0,
            ]);

          Affiliates::create([
                  'user_id' => $user_id,
                   'name' => $request['namea'],
                   'username' => $request['usernamea'],
                   'emaila' => $request['emaila'],
                    'ip_address' =>  request()->ip(),
                   'password' => Hash::make($request['password']),
               ]);
             return redirect()->intended('login/affiliate');
}
else{
//  create(array $data);
return false;
  }

    }

    public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }

    public function showAffiliateRegisterForm()
    {
        return view('auth.register', ['url' => 'affiliate']);
    }
     public function showBusinessRegisterForm()
    {
        return view('auth.register', ['url' => 'business']);
    }
}
