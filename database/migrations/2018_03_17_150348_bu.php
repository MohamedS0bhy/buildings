<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // 'bu_name', 'bu_price', 'bu_type', 'bu_rent', 'bu_squar', 'bu_small_dis', 'bu_meta', 'bu_langitude', 'bu_latitude',
      //  'bu_larg_dis', 'bu_status','user_id','rooms','image','month','year'
      Schema::create('bu', function (Blueprint $table) {
        $table->increments('id');
        $table->string('bu_name');
        $table->double('bu_price')->unsigned();
        $table->tinyInteger('bu_type')->unsigned();
        $table->tinyInteger('bu_rent')->unsigned();
        $table->integer('bu_squar')->unsigned();
        $table->string('bu_small_dis');
        $table->string('bu_meta');
        $table->double('bu_langitude');
        $table->double('bu_latitude');
        $table->longText('bu_larg_dis');
        $table->tinyInteger('bu_status')->unsigned();
        $table->integer('user_id')->unsigned();
        $table->integer('rooms')->unsigned();
        $table->string('image');
        $table->date('month');
        $table->date('year');
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
            Schema::drop('bu');
    }
}
