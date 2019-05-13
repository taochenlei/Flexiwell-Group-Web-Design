<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\User;
use Auth;

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
        $patients = Patient::whereRaw('doctor_id=?',array($user_id))->get();
        return view('patient.index')->with('patients', $patients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.create_form');
        // return view('patient.create_form')->with('manufacturers', Manufacturer::all());
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
            'name' => 'required|max:255',
            'dateOfBirth' => 'required|date',
            'height' => 'numeric',
            'weight' => 'numeric'
        ]);
        $user_id = Auth::user()->id;
        $patient = new Patient();
        $patient->name = $request->name;
        $patient->dateOfBirth = $request->dateOfBirth;
        $patient->gender = $request->gender;
        $patient->phone = $request->phone;
        $patient->height = $request->height;
        $patient->weight = $request->weight;
        $patient->name = $request->name;
        $patient->doctor_id = $user_id;
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
            'name' => 'required|max:255',
            'dateOfBirth' => 'required|date',
            'height' => 'numeric',
            'weight' => 'numeric'
        ]);
        $patient = Patient::find($id);
        $patient->name = $request->name;
        $patient->dateOfBirth = $request->dateOfBirth;
        $patient->gender = $request->gender;
        $patient->phone = $request->phone;
        $patient->height = $request->height;
        $patient->weight = $request->weight;
        $patient->name = $request->name;
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
        $patient->delete();
        return redirect("/patient");
    }
}
