<?php

namespace App\Http\Controllers;

use App\Demographic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DemographicController extends Controller {

    public function insert(Request $request) {
        // Validate the request...
        $validator = Validator::make($request->all(), [
                    'first_name' => 'required|max:255',
                    'last_name' => 'required|max:255',
//                    'description' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return back()
                    ->withInput()
                    ->withErrors($validator);
        }

        $patient = new Demographic;

        $patient->First_Name = $request->first_name;
        $patient->Last_Name = $request->last_Name;
        $patient->Date_Birth = $request->birthdate;
        $patient->Age_Years = $request->age;
//        $patient->Age_Months = $request->agemonths;
//        $patient->District = $request->district_id;
//        $patient->Parish = $request->parish_id;
//        $patient->Subcounty = $request->subcounty_id;
//        $patient->Village = $request->village_id;
        $patient->Sex = $request->sex;
        $patient->Marital_Status = $request->maritalstatus;
//        $patient->Occupation = $request->occupation;
        $patient->Next_Kin = $request->nextkin;
        $patient->Relationship_Next_Kin = $request->nextrelation;
        $patient->Mobile_No = $request->mobilenumber;
        $patient->Mobile_Owner = $request->mobileowner;
//        $patient->Insurance_Status = $request->insurance_status;
        $patient->LC1_Contact = $request->chairman_name;
        $patient->Any_Kisiizi_Contact = $request->any_contact;
        $patient->Kisiizi_Contact_Name = $request->kisiizi_contact_name;
//        $patient->Patient_Number = $request->Patient_Number;
//        $patient->Status = $request->status;
//        $patient->County_Id = $request->county_id;
        $patient->National_Id = $request->national_id;
        $patient->Patient_Category = $request->patient_category;
//        $patient->Religion = $request->religion;
//        $patient->Staff_Id = $request->staff_id;
//        $patient->Language = $request->language;
//        $patient->Position = $request->position;
//        $patient->Department = $request->department;

        $patient->save();

        echo "Patient inserted successfully.<br/>";
        echo '<a href="add_patients">Click Here</a> to go back.';
    }

    public function update(Request $request) {
        $patient_id = 11;
        $patient = Demographic::find($patient_id);

        $patient->title = $request->title;
        $patient->url = $request->url;
        $patient->description = $request->description;

        $patient->save();

        echo "Patient updated successfully.<br/>";
        echo '<a href="update_patients">Click Here</a> to go back.';
    }

    public function delete(Request $request) {
        echo "Here!!!";
        $patient_id = $request->Patient_Id;

        $patient = Demographic::find($patient_id);

        $patient->delete($patient_id);

        echo "Patient deleted successfully.<br/>";
        echo '<a href="delete_patients">Click Here</a> to go back.';
    }

    public function add_patients_page() {
        $insurance_members = \App\InsuranceMember::all();
        $patients = \App\Demographic::all();

        return view('patients/patient_registration', [
            'patients' => $patients,
            'insurance_members' => $insurance_members
        ]);
    }

    public function update_patients_page() {
        return view('update_patients');
    }

    public function delete_patients_page() {
        $patients = \App\Demographic::all();
        return view('delete_patients', ['patients' => $patients]);
    }
    
    public function view_patients_page() {
        $patients = \App\Demographic::all();
        return view('patients/view_patients', ['patients' => $patients]);
    }

}
