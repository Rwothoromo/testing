<?php

namespace App\Http\Controllers;

use App\Demographic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DemographicController extends Controller
{
    public function insert(Request $request)
    {
        // Validate the request...
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'url' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }

        $patient = new Demographic;

        $patient->title = $request->title;
        $patient->url = $request->url;
        $patient->description = $request->description;
        
        $patient->save();
        
        echo "Patient inserted successfully.<br/>";
        echo '<a href="add_patients">Click Here</a> to go back.';
    }
    
    public function update(Request $request)
    {
        $patient_id = 11;
        $patient = Demographic::find($patient_id);

        $patient->title = $request->title;
        $patient->url = $request->url;
        $patient->description = $request->description;
        
        $patient->save();
        
        echo "Demographic updated successfully.<br/>";
        echo '<a href="update_patients">Click Here</a> to go back.';
    }
    
    public function delete(Request $request)
    {
        echo "Here!!!";
        $patient_id = $request->Patient_Id;
        
        $patient = Demographic::find($patient_id);
        
        $patient->delete($patient_id);
        
        echo "Demographic deleted successfully.<br/>";
        echo '<a href="delete_patients">Click Here</a> to go back.';
    }
    
    public function add_patients_page()
    {
        return view('patients/patient_registration');
    }
    
    public function update_patients_page()
    {
        return view('update_patients');
    }
    
    public function delete_patients_page()
    {
        $patients = \App\Demographic::all();
        return view('delete_patients', ['patients' => $patients]);
    }
    
}
