<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals', function (Blueprint $table) {
            //PK,目標ID
            $table->integer('id')->autoIncrement();

            //内容
            $table->string('content',100)->comment('内容');

            //プロジェクトID
            //teamsテーブルの外部キー
            $table->integer('project_id');
            $table->foreign('project_id')->references('id')->on('projects');

            //期限
            $table->date('limit_date')->comment('期限');

            //完了したか否か
            $table->tinyInteger('is_completed')->comment('完了したか否か');

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
        Schema::dropIfExists('goals');
    }
}
