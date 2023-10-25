<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Developers', function (Blueprint $table) {
            $table->id()->comment('編號(主鍵)');
            $table->string('name',255)->comment('廠商名');
            $table->string('country',50)->comment('國籍')->nullable();
            $table->date('found_date')->comment('成立日期')->nullable();
            $table->string('founder',255)->comment('創辦人')->nullable();
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
        Schema::dropIfExists('Developers');
    }
}
