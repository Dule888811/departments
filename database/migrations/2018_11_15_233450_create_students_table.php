<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->char('f_name',20);
            $table->char('l_name',20);
            $table->enum('gender',['male','female']);
            $table->string('featured');
            $table->smallInteger('grade_maths')->unsigned()->nullable();
            $table->smallInteger('grade_literature')->unsigned()->nullable();
            $table->smallInteger('grade_biology')->unsigned()->nullable();
            $table->unsignedInteger('department_id');
            $table->foreign('department_id')
                ->references('id')->on('departments')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
