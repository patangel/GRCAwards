<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Events\VoterRegistered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Voter;
use App\Http\Traits\TokenTrait;
// use App\Models\AwardProgram;
use Vinkla\Hashids\Facades\Hashids;


class VoterRegisterController extends Controller
{
    use TokenTrait;

    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:voter');

    }
    
    public function showRegisterForm()
    {
        return view('contents.voter.register');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $ip_address = $request->getClientIp();
        // dd($mac_address, $ip_address);
        if(Voter::where('ip_address', $ip_address)->exists()){
        $request->session()->flash('danger', 'An account has been created with this device.');
        return redirect()->back();
        }else{
            event(new VoterRegistered($voter = $this->create(['email'=>$request->email, 'i_agree'=>$request->i_agree, 'ip_address' => $ip_address])));
            if ($response = $this->registered($request, $voter)) {
                return $response;
            }
        }
    }
    
    protected function create(array $data)
    {
        // $award_program = AwardProgram::where('status', 1)->latest()->first();

        return Voter::create([
            'email' => $data['email'],
            'token' => $this->getToken(10),
            'ip_address' => $data['ip_address'],
            'agreement' => $data['i_agree'] == '1Xagrzi' ? 1 : 0,
            'award_program_id' => 1
        ]);
    }

    protected function registered(Request $request, $voter)
    {
        $request->session()->flash('success', 'Your Access Token has been sent successfully');
        return redirect()->route('register_success')->with(['email' => $voter->email]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['bail', 'required', 'string', 'email', 'max:255', 'unique:voters'],
        ]);
    }

    public function showPostRegisterForm(){
        return view('contents.voter.register_success');
    }


}
