<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemographicsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('demographics', function (Blueprint $table) {
            $table->increments('Patient_Id');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->date('Date_Birth');
            $table->integer('Age_Years');
            $table->integer('Age_Months');
            $table->integer('District');
            $table->integer('Parish');
            $table->integer('Subcounty');
            $table->integer('Village');
            $table->string('Sex');
            $table->string('Marital_Status');
            $table->string('Occupation');
            $table->string('Next_Kin');
            $table->string('Relationship_Next_Kin');
            $table->string('Mobile_No');
            $table->string('Mobile_Owner');
            $table->string('Insurance_Status');
            $table->string('LC1_Contact');
            $table->string('Any_Kisiizi_Contact');
            $table->string('Kisiizi_Contact_Name');
            $table->string('Patient_Number');
//            $table->dateTime('Created_At');
            $table->integer('Status');
            $table->integer('County_Id');
            $table->string('National_Id');
            $table->integer('Patient_Category');
            $table->integer('Religion');
            $table->integer('Staff_Id');
            $table->string('Language');
            $table->string('Position');
            $table->string('Department');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('demographics');
    }

}
