<?php

namespace App\Http\Controllers;

use App\InsuranceMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class InsuranceMemberController extends Controller {

    public function insert(Request $request) {
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

        $insurance_member = new Insurance_Member;

        $insurance_member->Photo = $request->photo;
        $insurance_member->Relationship_To_Head = $request->Relationship_To_Head;
        $insurance_member->Group_Id = $request->Group_Id;
        $insurance_member->Family_Id = $request->Family_Id;
        $insurance_member->max_number = $request->max_number;
        $insurance_member->Patient_Id = $request->Patient_Id;
        $insurance_member->Status = $request->Status;
        $insurance_member->Staff_Incharge = $request->Staff_Incharge;

        $insurance_member->save();

        echo "Insurance member inserted successfully.<br/>";
        echo '<a href="add_insurance_members">Click Here</a> to go back.';
    }

    public function update(Request $request) {
        $insurance_member_id = 11;
        $insurance_member = Insurance_Member::find($insurance_member_id);

        $insurance_member->title = $request->title;
        $insurance_member->url = $request->url;
        $insurance_member->description = $request->description;

        $insurance_member->save();

        echo "Insurance member updated successfully.<br/>";
        echo '<a href="update_insurance_members">Click Here</a> to go back.';
    }

    public function delete(Request $request) {
        echo "Here!!!";
        $insurance_member_id = $request->Patient_Id;

        $insurance_member = Insurance_Member::find($insurance_member_id);

        $insurance_member->delete($insurance_member_id);

        echo "Insurance member deleted successfully.<br/>";
        echo '<a href="delete_insurance_members">Click Here</a> to go back.';
    }

    public function add_insurance_members_page() {
        return view('insurance_members/insurance_member_registration');
    }

    public function update_insurance_members_page() {
        return view('update_insurance_members');
    }

    public function delete_insurance_members_page() {
        $insurance_members = \App\InsuranceMember::all();
        return view('delete_insurance_members', ['insurance_members' => $insurance_members]);
    }

}
