<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccinations', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('dose')->default(4);
            $table->date('date');
            $table->bigInteger('society')->default(20);
            $table->bigInteger('vaccine_id')->default(20);
            $table->bigInteger('doctor_id')->default(20);
            $table->bigInteger('officer_id')->default(20);
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
        Schema::dropIfExists('vaccinations');
    }
}
