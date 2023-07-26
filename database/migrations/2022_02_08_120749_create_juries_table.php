<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professor_id')->constrained();
            $table->unsignedBigInteger('promotionDepartement_id');
            $table->foreign('promotionDepartement_id')->references('id')->on('promotion_departement');
            $table->unsignedBigInteger('promotionOption_id');
            $table->foreign('promotionOption_id')->references('id')->on('promotion_option');
            $table->string('role');
            $table->string('academic_year');
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
        Schema::dropIfExists('juries');
    }
}
