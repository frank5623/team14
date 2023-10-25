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
            $table->string('name')->comment('廠商名');
            $table->string('country')->comment('國籍');
            $table->date('found_date')->comment('成立日期');
            $table->string('founder')->comment('創辦人');
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
