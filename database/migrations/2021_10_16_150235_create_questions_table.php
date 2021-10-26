<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();

            $table->text('title_ar');
            $table->text('title_en');

            $table->bigInteger('media_id')->unsigned();
            $table->foreign('media_id')->references('id')->on('media');

            $table->string('answers');
            $table->string('right_answer');

            $table->bigInteger('hint_id')->unsigned();
            $table->foreign('hint_id')->references('id')->on('hints');

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
        Schema::dropIfExists('questions');
    }
}
