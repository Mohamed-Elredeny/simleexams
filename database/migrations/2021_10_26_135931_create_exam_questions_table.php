<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_questions', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('exam_id')->unsigned();
            $table->foreign('exam_id')->references('id')->on('exams');

            $table->bigInteger('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');


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
        Schema::dropIfExists('exam_questions');
    }
}
