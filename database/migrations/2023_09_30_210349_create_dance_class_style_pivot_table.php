<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDanceClassStylePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dance_class_style', function (Blueprint $table) {
            $table->unsignedBigInteger('dance_class_id')->index();
            $table->foreign('dance_class_id')->references('id')->on('dance_classes')->onDelete('cascade');
            $table->unsignedBigInteger('style_id')->index();
            $table->foreign('style_id')->references('id')->on('styles')->onDelete('cascade');
            $table->primary(['dance_class_id', 'style_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dance_class_style');
    }
}
