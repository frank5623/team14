<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Game', function (Blueprint $table) {
            $table->id()->comment('編號(主鍵)')->unasigned();
            $table->string('Name',255)->comment('遊戲名稱');
            $table->string('Publisher',255)->comment('發行商');
            $table->integer('d_id')->comment('開發商id(外部鍵)')->unasigned()->references('developers')->on('id');
            $table->date('Release_Date')->comment('發行時間');
            $table->float('Price')->comment('價格')->nullable();
            $table->integer('Peak_Player')->comment('歷史尖峰人數')->nullable()->unasigned();
            $table->string('GameType')->comment('遊戲類型')->nullable();
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
        Schema::dropIfExists('Game');
    }
}
