<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SiteSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // 'slug','namesetting','value','type'
        Schema::create('sitesetting', function (Blueprint $table) {
          $table->increments('id');
          $table->string('slug');
          $table->string('namesetting');
          $table->string('value');
          $table->tinyInteger('type');
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
        Schema::drop('sitesetting');
    }
}
