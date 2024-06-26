<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandingLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('landing_id');
            $table->integer('click')->default(0);
            $table->integer('download')->default(0);
            $table->integer('facebook')->default(0);
            $table->integer('twitter')->default(0);
            $table->integer('linkedin')->default(0);
            $table->integer('skype')->default(0);
            $table->integer('whatsapp')->default(0);
            $table->integer('instagram')->default(0);
            $table->integer('personal_website')->default(0);
            $table->integer('work_website')->default(0);

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
        Schema::dropIfExists('landing_logs');
    }
}
