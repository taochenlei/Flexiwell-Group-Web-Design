<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\User;
use Auth;
use DateTime;

class PatientController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        // $patients = Patient::whereRaw('doctor_id=?',array($user_id))->get();
        $patients = Patient::whereRaw('doctor_id=?',array($user_id))->orderBy('lastName', 'ASC')->get();
        // dd($patients);
        return view('patient.index')->with('patients', $patients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = User::whereRaw('type=?','doctor')->get();
        // dd($doctors);
        return view('patient.create_form')->with('doctors', $doctors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'dateOfBirth' => 'required|date',
            'dateOfInjury' => 'required|date',
            'dateOfAssessment' => 'required|date',
            'height' => 'numeric|min:1',
            'weight' => 'numeric|min:1',
            'bloodPressureS' => 'numeric|min:1',
            'bloodPressureD' => 'numeric|min:1',
            'heartRate' => 'numeric|min:1',
            'neckFlexion' => 'numeric|min:1',
            'neckExtension' => 'numeric|min:1',
            'elbowFlexion' => 'numeric|min:1',
            'elbowExtension' => 'numeric|min:0',            
            'gripStrengthL1' => 'numeric|min:1',
            'gripStrengthL2' => 'numeric|min:1',
            'gripStrengthL3' => 'numeric|min:1',
            'gripStrengthR1' => 'numeric|min:1',
            'gripStrengthR2' => 'numeric|min:1',
            'gripStrengthR3' => 'numeric|min:1'
        ]);
        $doctor_id = Auth::user()->id;
        if (Auth::user()->type == 'manager') {
            $doctor_id = $request->doctor_id;
        }
        $patient = new Patient();
        $patient->firstName = $request->firstName;
        $patient->lastName = $request->lastName;
        $patient->dateOfBirth = $request->dateOfBirth;
        $patient->dateOfInjury = $request->dateOfInjury;
        $patient->dateOfAssessment = $request->dateOfAssessment;
        $patient->gender = $request->gender;
        $patient->phone = $request->phone;
        $patient->height = $request->height;
        $patient->weight = $request->weight;
        $patient->bloodPressureS = $request->bloodPressureS;
        $patient->bloodPressureD = $request->bloodPressureD;
        $patient->heartRate = $request->heartRate;
        $patient->neckFlexion = $request->neckFlexion;
        $patient->neckExtension = $request->neckExtension;
        $patient->elbowFlexion = $request->elbowFlexion;
        $patient->elbowExtension = $request->elbowExtension;
        $patient->gripStrengthL1 = $request->gripStrengthL1;
        $patient->gripStrengthL2 = $request->gripStrengthL2;
        $patient->gripStrengthL3 = $request->gripStrengthL3;
        $patient->gripStrengthR1 = $request->gripStrengthR1;
        $patient->gripStrengthR2 = $request->gripStrengthR2;
        $patient->gripStrengthR3 = $request->gripStrengthR3;
        $patient->doctor_id = $doctor_id;
        // dd($patient);
        $patient->save();
        return redirect("/patient/$patient->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        // $now = new DateTime("+10 hours");
        // $age = date('Y', time()) - date('Y', strtotime($dob)) - 1; 
        // dd($age);
        // dd($now);
        // dd($patient);
        return view('patient.show')->with('patient',$patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('patient.edit_form')->with('patient',$patient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'dateOfBirth' => 'required|date',
            'dateOfInjury' => 'required|date',
            'dateOfAssessment' => 'required|date',
            'height' => 'numeric|min:1',
            'weight' => 'numeric|min:1',
            'bloodPressureS' => 'numeric|min:1',
            'bloodPressureD' => 'numeric|min:1',
            'heartRate' => 'numeric|min:1',
            'neckFlexion' => 'numeric|min:1',
            'neckExtension' => 'numeric|min:1',
            'elbowFlexion' => 'numeric|min:1',
            'elbowExtension' => 'numeric|min:0',
            'gripStrengthL1' => 'numeric|min:1',
            'gripStrengthL2' => 'numeric|min:1',
            'gripStrengthL3' => 'numeric|min:1',
            'gripStrengthR1' => 'numeric|min:1',
            'gripStrengthR2' => 'numeric|min:1',
            'gripStrengthR3' => 'numeric|min:1'
        ]);
        $patient = Patient::find($id);
        $patient->firstName = $request->firstName;
        $patient->lastName = $request->lastName;
        $patient->dateOfBirth = $request->dateOfBirth;
        $patient->dateOfInjury = $request->dateOfInjury;
        $patient->dateOfAssessment = $request->dateOfAssessment;
        $patient->gender = $request->gender;
        $patient->phone = $request->phone;
        $patient->height = $request->height;
        $patient->weight = $request->weight;
        $patient->bloodPressureS = $request->bloodPressureS;
        $patient->bloodPressureD = $request->bloodPressureD;
        $patient->heartRate = $request->heartRate;
        $patient->neckFlexion = $request->neckFlexion;
        $patient->neckExtension = $request->neckExtension;
        $patient->elbowFlexion = $request->elbowFlexion;
        $patient->elbowExtension = $request->elbowExtension;
        $patient->gripStrengthL1 = $request->gripStrengthL1;
        $patient->gripStrengthL2 = $request->gripStrengthL2;
        $patient->gripStrengthL3 = $request->gripStrengthL3;
        $patient->gripStrengthR1 = $request->gripStrengthR1;
        $patient->gripStrengthR2 = $request->gripStrengthR2;
        $patient->gripStrengthR3 = $request->gripStrengthR3;
        $patient->save();
        return redirect("/patient/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $doctor_id = $patient->doctor_id;
        $patient->delete();
        if (Auth::user()->type == 'doctor') {
            return redirect("/patient");
        }else {
            return redirect("/patientsForDoctor/$doctor_id");
        }
    }
}
