<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('computerModel');
            $table->LONGTEXT('descriptionOfTheFault');
            $table->string('status');
            $table->string('customerFirstName');
            $table->string('customerLastName');
            $table->string('customerPhoneNumber');
            $table->string('customerEmail');
            $table->LONGTEXT('comment');
            $table->integer('employee_id')->unsigned();
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
        Schema::dropIfExists('repairs');
    }
}
