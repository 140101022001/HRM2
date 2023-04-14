<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('hrms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 500);
            $table->string('name_kana', 500);
            $table->boolean('sex');
            $table->date('birthday');
            $table->unsignedInteger('age')->length(10);
            $table->string('country', 500);
            $table->date('first_interv_date');
            $table->string('first_interv_staff', 500);
            $table->boolean('first_interv_result');
            $table->date('sec_interv_date');
            $table->string('sec_interv_staff', 500);
            $table->boolean('sec_interv_result');
            $table->date('hire_date');
            $table->string('intern_department', 500);
            $table->boolean('intern_result');
            $table->string('phone')->unique();
            $table->string('email', 500)->unique();
            $table->unsignedInteger('skill_jlpt')->length(5);
            $table->unsignedInteger('skill_hearing')->length(5);
            $table->unsignedInteger('skill_speaking')->length(5);
            $table->unsignedInteger('skill_reading')->length(5);
            $table->string('skill_se', 500);
            $table->boolean('graduate_4');
            $table->boolean('graduate_2');
            $table->string('graduate_school', 500);
            $table->string('apply_department', 500)->default('勤務地マスタ');
            $table->string('working_place', 500);
            $table->string('current_status', 500);
            $table->string('note', 500);
            // $table->tinyInteger('delete_status')->default(1);
            $table->timestamp('deleted_at')->nullable();
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
        //
        Schema::dropIfExists('hrms');
    }
};
