<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursePromotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_promotion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('promotionDepartement_id')->nullable();
            $table->foreign('promotionDepartement_id')->references('id')->on('promotion_departement');
            $table->unsignedBigInteger('promotionOption_id')->nullable();
            $table->foreign('promotionOption_id')->references('id')->on('promotion_option');
            $table->string('annee_academique');
            $table->string('course');
            $table->foreignId('professor_id')->constrained();
            $table->integer('ponderation');
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
        Schema::dropIfExists('course_promotion');
    }
}
