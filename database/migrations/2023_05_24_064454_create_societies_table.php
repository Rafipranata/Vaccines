<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocietiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societies', function (Blueprint $table) {
            $table->id();
            $table->char('id_card_number',8);
            $table->string('password',255);
            $table->string('name');
            $table->date('born_date');
            $table->enum("gender",['male','female']);
            $table->text('addres');
            $table->bigInteger('regional_id');
            $table->text('login_tokens');
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
        Schema::dropIfExists('societies');
    }
}
