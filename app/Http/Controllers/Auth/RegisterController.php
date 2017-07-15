<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'user_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'First_Name' => $data['first_name'],
            'Last_Name' => $data['last_name'],
            'User_Name' => $data['user_name'],
            'Email' => $data['email'],
            'Mobile_Number' => $data['mobile_number'],
//            'User_Group_Id' => '1',
//            'Position' => '1',
//            'Photo' => '1',
//            'Council_Name' => '1',
//            'Registration_Number' => '1',
//            'Expiry_Date' => '2018-12-31',
//            'Pin' => '12345',
//            'Active' => 1,
//            'Staff_Id' => 1,
//            'Blood_Group_Id' => 1,
//            'Willing_To_Donate' => 'Y',
            'Password' => bcrypt($data['password']),
        ]);
    }
}
