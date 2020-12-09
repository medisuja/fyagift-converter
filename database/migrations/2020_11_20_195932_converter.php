<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Converter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('converter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_id', 100);
            $table->string('name', 100);
            $table->string('gender', 10);
            $table->string('father_name', 100);
            $table->string('mother_name', 100);
            $table->text('file_url');
            $table->text('letter');
            $table->string('cover', 250);
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
        Schema::dropIfExists('converter');
    }
}
