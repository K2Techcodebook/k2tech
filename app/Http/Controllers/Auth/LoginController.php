<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
    use Illuminate\Http\Request;
    use Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:business')->except('logout');
        $this->middleware('guest:affiliate')->except('logout');
    }

     public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withInput($request->only('email', 'remember'))->withErrors($validator);
    }

    public function showAffiliateLoginForm()
    {
        return view('auth.login', ['url' => 'affiliate']);
    }

    public function affiliateLogin(Request $request)
    {
        $this->validate($request, [
            'aemail'   => 'required|email',
            'apassword' => 'required|min:6'
        ]);

        if (Auth::guard('affiliate')->attempt(['emaila' => $request->aemail, 'password' => $request->apassword], $request->get('remember'))) {

           return redirect()->intended(route('affiliate.dashboard'));
        }
         $message ='Login Details Incorrect Plsease Check Again!';
        return back()->withInput($request->only('aemail', 'remember'))->with('status', $message);
    }

       public function showBusinessLoginForm()
    {
        return view('auth.login', ['url' => 'business']);
    }

    public function businessLogin(Request $request)
    {
        var_dump($request->get('remember'));
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('business')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended(route('business.dashboard'));
        }
          $message ='Login Details Incorrect Plsease Check Again!';
        return back()->withInput($request->only('email', 'remember'))->with('status', $message);
    }
  // public function logout()
  //   {
  //       Auth::guard('admin')->logout();

  //       return redirect('/');
  //   }
        public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }

}
