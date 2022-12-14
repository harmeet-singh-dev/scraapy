<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('user_type');
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('mobile');
            $table->string('region');
            $table->string('city');
            $table->string('district');
            $table->string('user_name');
            $table->string('company_name')->nullable();
            $table->string('buyer')->nullable();
            $table->string('landline')->nullable();
            $table->string('company_website')->nullable();
            $table->string('port_of_discharge')->nullable();
            $table->string('country_of_final_destination')->nullable();
            $table->string('terms_of_delivery')->nullable();
            $table->string('payment_terms')->nullable();
            $table->string('currency')->nullable();
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
