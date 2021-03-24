<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('employee', function (Blueprint $table) {
            $table->unsignedInteger('id');
    $table->string(' First_name');
     $table->string('Last_name');
     $table->unsignedBigInteger('company_id');
    $table->string('email');
    $table->string('phone');
    $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');


});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
