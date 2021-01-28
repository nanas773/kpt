<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePloblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problems', function (Blueprint $table) {
            //PK,問題ID
            $table->integer('id')->autoIncrement();

            //プロジェクトID
            $table->integer('project_id');
            $table->foreign('project_id')->references('id')->on('projects');

            //内容
            $table->string('content', 100);

            //作成日時
            $table->dateTime('created_at', 0);

            //更新日時
            $table->dateTime('modified_at', 0);

            //解決したか否か
            $table->tinyInteger('is_resolved');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problems');
    }
}
