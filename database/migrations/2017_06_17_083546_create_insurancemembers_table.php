<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsurancemembersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('insurance_members', function (Blueprint $table) {
            $table->increments('Insurance_Id');
            $table->string('Photo');
            $table->string('Relationship_To_Head');
            $table->integer('Group_Id');
            $table->integer('Family_Id');
            $table->integer('max_number');
            $table->integer('Patient_Id');
            $table->integer('Status');
            $table->integer('Staff_Incharge');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('insurance_members');
    }

}
