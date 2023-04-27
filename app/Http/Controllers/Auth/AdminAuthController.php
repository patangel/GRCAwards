<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminAuthController extends Controller
{
    
     /**
     * Show Add admin form.
     */
    public function showAddAdminForm()
    {
        return view('contents.admin.register');
    }

      /**
     * add/register an admin.
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($admin = $this->create($request->all())));

        // $this->guard()->login($user);

        if ($response = $this->registered($request, $admin)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new Response('', 201)
                    : redirect($this->redirectPath());
    }


    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $admin)
    {
        //
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['bail','required', 'string','alpha', 'max:50'],
            'lastname' => ['bail', 'required', 'string', 'max:50'],
            'email' => ['bail', 'required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['bail', 'required', 'string', 'min:8', 'confirmed'],
        ]);
    }



    public function login(Request $request)
    {
        $this->validateLogin($request);

        if (method_exists($this, 'hasTooManyLoginAttempts') && $this->hasTooManyLoginAttempts($request)) 
        {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        return Auth::guard('admin')->attempt(
            $this->credentials($request)
        );
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    protected function sendLoginResponse(Request $request)
    {
        if($this->guard()->user()->verified){
            return $this->authenticated($request, $this->guard()->user());
        }
        $warning = ['unverified_email' => 'please confirm your account. An email has been sent to you'];
        return response()->json(['warning' => $warning]);
    }

    protected function authenticated(Request $request, $user)
    {
        $user->generateToken();

        return response()->json(['data' => $user], 200);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        // throw ValidationException::withMessages([
        //     $this->username() => ['Unauthorized. Invalid email or password']
        // ]);
        $error = ['auth_failed'=>'Unauthorized. Invalid email or password'];
        return response()->json(['error'=> $error]);
    } 
    
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
