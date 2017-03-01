<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->char('gender', 2)->nullable();
            $table->string('nationality')->nullable();
            $table->string('education')->nullable();  // k12 - Bachelor - Master - Phd - None
            $table->string('resident_address')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('email_address')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('id_number')->nullable();
            $table->date('date_of_issue')->nullable();
            $table->string('place_of_issue')->nullable();
            $table->char('marital_status', 2)->nullable(); // single - marriage
            $table->string('tax_code_number')->nullable();
            $table->string('number_of_dependant')->nullable(); // Vietnamese Laws
            $table->string('social_insurance_book_number')->nullable();
            $table->string('labor_book_number')->nullable(); // Vietnamese Laws
            $table->string('hospital_registration')->nullable(); // Vietnamese Laws
            $table->string('bank')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_address')->nullable();
            $table->string('person_contact_emergency')->nullable();
            $table->string('relationship')->nullable();
            $table->string('emergency_phone_number')->nullable();
            $table->string('emergency_contact_address')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('docs_attachment_1')->nullable();
            $table->string('docs_attachment_2')->nullable();
            $table->string('docs_attachment_3')->nullable();
            $table->text('note')->nullable();
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
        Schema::drop('employees');
    }
}
