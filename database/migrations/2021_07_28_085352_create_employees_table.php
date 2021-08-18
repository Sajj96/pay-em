<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('FirstName');
            $table->string('MiddleName')->nullable();
            $table->string('LastName');
            $table->string('Gender');
            $table->string('Address')->nullable();
            $table->string('City')->nullable();
            $table->bigInteger('Department')->unsigned()->nullable()->index();
            $table->string('JobTitle')->nullable();
            $table->double('BasicSalary')->nullable();
            $table->string('PayFrequency')->nullable();
            $table->string('PayMethod')->nullable();
            $table->string('PayCurrency')->nullable();
            $table->string('BankDetails')->nullable();
            $table->string('SSN', 30)->nullable();
            $table->string('Status')->nullable();
            $table->date('JoinDate');
            $table->date('EndDate')->nullable();
            $table->string('Allowances')->nullable();
            $table->string('Photo', 100)->nullable();
            $table->string('EmploymentType');
            $table->string('MaritalStatus')->nullable();
            $table->string('Nationality');
            $table->string('Phone', 15);
            $table->string('Email');
            $table->date('BirthDate');
            $table->timestamps();
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('Department')->references('id')->on('departments')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
