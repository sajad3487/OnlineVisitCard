<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('tel');
            $table->string('email');
            $table->string('position')->nullable();
            $table->string('company_name')->nullable();
            $table->string('logo')->nullable();
            $table->string('color')->default('#d2dddc');
            $table->boolean('status')->default(0);
            $table->boolean('type');

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
        Schema::dropIfExists('cards');
    }
}
