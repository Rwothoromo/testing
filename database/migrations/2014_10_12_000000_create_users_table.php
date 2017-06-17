<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('User_Id');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('User_Name')->unique();
            $table->string('Password');
            $table->string('Mobile_Number');
            $table->string('User_Group_Id');
            $table->string('Position');
            $table->string('Photo');
            $table->string('Council_Name');
            $table->string('Registration_Number');
            $table->string('Expiry_Date');
            $table->string('Email')->unique();
            $table->string('Pin');
            $table->smallInteger('Active');
            $table->integer('Staff_Id');
            $table->integer('Blood_Group_Id');
            $table->char('Willing_To_Donate', 1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
