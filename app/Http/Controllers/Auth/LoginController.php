<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

<<<<<<< HEAD
    protected $maxAttempts = 3;
    protected $decayMinutes = 10;
=======
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
<<<<<<< HEAD
        $this->middleware('auth')->only('logout');
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
=======

    }
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866

    protected function attemptLogin(Request $request)
    {
        $user = User::where('email', '=', $request->post('username'))
            ->orWhere('username', '=', $request->post('username'))
            ->first();

<<<<<<< HEAD
        if (!$user || !Hash::check($request->post('password'), $user->password)) {
=======
        if(!$user || !Hash::check($request->post('password'), $user->password)) {
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
            return false;
        }

        $this->guard()->login($user, $request->filled('remember'));
<<<<<<< HEAD
=======

>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
        return true;
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'username';
    }
<<<<<<< HEAD

=======
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
}
