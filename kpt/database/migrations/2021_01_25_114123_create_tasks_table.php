<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            //PK,タスクID
            $table->integer('id')->autoIncrement();

            //プロジェクトID
            $table->integer('project_id');
            $table->foreign('project_id')->references('id')->on('projects');

            //problem ID
            $table->integer('problem_id');
            $table->foreign('problem_id')->references('id')->on('problems');

            //種類
            $table->string('state', 4);

            //内容
            $table->string('content', 100);

            //作成日時
            $table->dateTime('created_at', 0);

            //更新日時
            $table->dateTime('modified_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
