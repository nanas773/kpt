<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //PK
            $table->integer('id')->autoIncrement();
            $table->primary('id');
            
            //メールアドレス
            $table->string('mail', 100);

            //パスワード
            $table->string('password', 100);

            //表示名
            $table->string('display_name', 20);

            //画像パス
            $table->string('image_path', 100);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
