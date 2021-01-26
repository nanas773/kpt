<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            //PK,プロジェクトID
            $table->integer('id')->autoIncrement();
            $table->primary('id');

            //プロジェクトの説明
            $table->string('description',1000);

            //所有チームID
            //teamsテーブルの外部キー
            $table->integer('team_id');
            $table->foreign('team_id')->references('id')->on('teams');

            //作成日時
            $table->date('created_at');

            //更新日時
            $table->date('modified_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
