<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id()->comment('編號(主鍵)')->unasigned();
            $table->string('name',255)->comment('遊戲名稱');
            $table->string('publisher',255)->comment('發行商');
            $table->foreignid('d_id')->comment('開發商id(外部鍵)')->unasigned()->references('developers')->on('id');
            $table->date('release_date')->comment('發行時間');
            $table->float('price')->comment('價格')->nullable();
            $table->integer('peak_player')->comment('歷史尖峰人數')->nullable()->unasigned();
            $table->string('gametype')->comment('遊戲類型')->nullable();
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
        Schema::dropIfExists('Games');
    }
}
