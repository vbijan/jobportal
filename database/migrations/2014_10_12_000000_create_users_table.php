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
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('marital_status', array('0', '1','2'))->default('0');
            $table->string('dob')->nullable();
            $table->string('company_name')->nullable();
            $table->string('home_address')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('home_number')->nullable();
            $table->string('office_number')->nullable();
            $table->string('mobile')->nullable();
            $table->string('pager')->nullable();
            $table->string('home_url')->nullable();
            $table->enum('role',array('0','1','2'))->default('0');
            $table->string('company_address')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->string('ownership')->nullable();
            $table->string('employee_type')->nullable();
            $table->string('no_of_employees')->nullable();
            $table->text('company_benefits')->nullable();
            $table->string('location')->nullable();
            $table->text('logo')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
