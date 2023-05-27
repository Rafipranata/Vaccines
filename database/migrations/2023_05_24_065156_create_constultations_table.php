<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constultations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('society_id')->default(12);
            $table->bigInteger('doctor_id')->default(12);
            $table->enum('status',['accepted','declined','pending']);
            $table->text('disaese_history');
            $table->text('current_symptoms');
            $table->text('doctor_notes');

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
        Schema::dropIfExists('constultations');
    }
}
