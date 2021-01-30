<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_users', function (Blueprint $table) {
            //ユーザID
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            //チームID
            $table->unsignedBigInteger('team_id');
            $table->foreign('team_id')->references('id')->on('teams');

            //複合PK
            $table->primary(['user_id','team_id']);
            
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
        Schema::dropIfExists('team_users');
    }
}
