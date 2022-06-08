<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudidaya extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budidaya', function (Blueprint $table) {
            $table->id();
            $table->String('judul', 100)->unique();
            $table->longtext('diskripsi');
            $table->longtext('text1');
            $table->longtext('text1b');
            $table->longtext('text2');
            $table->longtext('text2b');
            $table->longtext('text3');
            $table->longtext('text3b');
            $table->String('image');
            $table->String('slug');
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
        Schema::dropIfExists('budidaya');
    }
}
