<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrnAttachmentsDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('trn_attachments_details', function (Blueprint $table) {
           
            $table->increments('inprinc_no');
            $table->string('im_no');
            $table->integer('user_id'); 
            $table->string('attachment');
            $table->string('sub_model');
            $table->integer('quant');
            $table->integer('rate_unit');
            $table->integer('total_cost');
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
        Schema::drop('trn_attachments_details');
    }
}
