<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //
// 'contact_name','contact_email','contact_subject','contact_message','view','contact_type'
      Schema::create('contact', function (Blueprint $table) {
        $table->increments('id');
        $table->string('contact_name');
        $table->string('contact_email');
        $table->integer('contact_type');
        $table->longText('contact_message');
        $table->tinyInteger('view');
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
      Schema::drop('contact');

    }
}
