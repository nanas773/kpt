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
            $table->integer('problem_id')->nullable($value = true);
            $table->foreign('problem_id')->references('id')->on('problems');

            //種類
            $table->string('state', 4)->comment('keep,try,doneの区別');

            //内容
            $table->string('content', 100)->comment('内容');

            //作成日時、更新日時
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
        Schema::dropIfExists('tasks');
    }
}
