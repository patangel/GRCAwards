<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Voter;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Vinkla\Hashids\Facades\Hashids;

class VoterLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:voter')->except('logout');

    }
    /**
     * Show admin login form.
     */
    public function showLoginForm()
    {
        return view('contents.voter.login');
    }


    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        return $this->sendFailedLoginResponse($request);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'accessToken' => 'required|string',
            // 'phone_number' => 'required|string|unique:voters',
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        $voter = Voter::where([['token','=',$request->accessToken],['award_program_id', '=', 1]])->first();
        if($voter != '' && $voter->active == ''){
            Auth::guard('voter')->loginUsingId($voter->id);
            return true;
        }
        return false;
    }

    // protected function credentials(Request $request)
    // {
    //     return $request->only('email');
    // }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        if ($response = $this->authenticated($request, Auth::guard('voter')->user())) {
            return $response;
        }

        return $request->wantsJson() ? new Response('', 204) : redirect()->intended('/');
    }

    protected function authenticated(Request $request, $voter)
    {
        $voter->active = true;
        $voter->email_verified = true;
        $voter->email_verified_at = now();
        $voter->save();

        // if ($user->email_verified == 0){
        //     Auth::guard('voter')->logout();
            
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        //     return redirect()->back()->with('warning', 'Email not verified yet!');
        // }
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'token' => ['Unauthorized. Invalid Token']
        ]);
    }


    public function logout(Request $request)
    {
        $voter_id = Auth::guard('voter')->user()->id;
        $voter = Voter::find($voter_id);
        if ($voter){
            $voter->active = false;
            $voter->save();
            Auth::guard('voter')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return $request->wantsJson() ? new Response('', 204) : redirect()->route('landing.index');
        }
        else{
            return redirect()->back();
        }


    }

    public function voterVerify(Request $request, $id)
    {
        $real_voter_id = Hashids::connection('voter')->decode($id)[0];

        $voter = Voter::where('id', $real_voter_id)->first();

        $voter->email_verified = true;
        $voter->email_verified_at = now();
        $voter->save();
        
        $request->session()->flash('success', 'Email Verified successfully!');
        return redirect()->route('show_login_form');
    }
}
