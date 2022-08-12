<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('form_type');
            $table->date('effective_date_appointment');
            $table->string('contact_person_1');
            $table->string('id_number_1');
            $table->string('contact_person_2');
            $table->string('id_number_2');
            $table->string('name_of_signatory');
            $table->string('contact_number');
            $table->date('date');
            $table->string('signature_file');
            
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
        Schema::dropIfExists('members');
    }
};
