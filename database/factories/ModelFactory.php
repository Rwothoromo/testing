<?php

/*
  |--------------------------------------------------------------------------
  | Model Factories
  |--------------------------------------------------------------------------
  |
  | Here you may define all of your model factories. Model factories give
  | you a convenient way to create models for testing and seeding your
  | database. Just tell the factory how a default model should look.
  |
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Link::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'url' => $faker->url,
        'description' => $faker->paragraph,
    ];
});

$factory->define(App\Demographic::class, function (Faker\Generator $faker) {
    return [
        'Patient_Id' => $faker->Patient_Id,
        'First_Name' => $faker->First_Name,
        'Last_Name' => $faker->Last_Name,
        'Date_Birth' => $faker->Date_Birth,
        'Age_Years' => $faker->Age_Years,
        'Age_Months' => $faker->Age_Months,
        'District' => $faker->District,
        'Parish' => $faker->Parish,
        'Subcounty' => $faker->Subcounty,
        'Village' => $faker->Village,
        'Sex' => $faker->Sex,
        'Marital_Status' => $faker->Marital_Status,
        'Occupation' => $faker->Occupation,
        'Next_Kin' => $faker->Next_Kin,
        'Relationship_Next_Kin' => $faker->Relationship_Next_Kin,
        'Mobile_No' => $faker->Mobile_No,
        'Mobile_Owner' => $faker->Mobile_Owner,
        'Insurance_Status' => $faker->Insurance_Status,
        'LC1_Contact' => $faker->LC1_Contact,
        'Any_Kisiizi_Contact' => $faker->Any_Kisiizi_Contact,
        'Kisiizi_Contact_Name' => $faker->Kisiizi_Contact_Name,
        'Patient_Number' => $faker->Patient_Number,
        'Status' => $faker->Status,
        'County_Id' => $faker->County_Id,
        'National_Id' => $faker->National_Id,
        'Patient_Category' => $faker->Patient_Category,
        'Religion' => $faker->Religion,
        'Staff_Id' => $faker->Staff_Id,
        'Language' => $faker->Language,
        'Position' => $faker->Position,
        'Department' => $faker->Department
    ];
});

$factory->define(App\InsuranceMember::class, function (Faker\Generator $faker) {
    return [
        'Insurance_Id' => $faker->Insurance_Id,
        'Photo' => $faker->Photo,
        'Relationship_To_Head' => $faker->Relationship_To_Head,
        'Group_Id' => $faker->Group_Id,
        'Family_Id' => $faker->Family_Id,
        'max_number' => $faker->max_number,
        'Patient_Id' => $faker->Patient_Id,
        'Status' => $faker->Status,
        'Staff_Incharge' => $faker->Staff_Incharge
    ];
});
