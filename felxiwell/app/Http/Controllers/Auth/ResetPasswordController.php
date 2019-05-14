<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
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
    }

    public function showResetForm($token)
    {
        dd($token);
        $user_id = Auth::user()->id;
        // $patients = Patient::whereRaw('doctor_id=?',array($user_id))->get();
        $patients = Patient::whereRaw('doctor_id=?',array($user_id))->orderBy('lastName', 'ASC')->get();
        // dd($patients);
        return view('patient.index')->with('patients', $patients);
    }
    
    public function reset()
    {
        dd("hello");
        $user_id = Auth::user()->id;
        // $patients = Patient::whereRaw('doctor_id=?',array($user_id))->get();
        $patients = Patient::whereRaw('doctor_id=?',array($user_id))->orderBy('lastName', 'ASC')->get();
        // dd($patients);
        return view('patient.index')->with('patients', $patients);
    }
}
