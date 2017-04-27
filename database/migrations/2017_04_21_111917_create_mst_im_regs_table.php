<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstImRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('mst_im_regs', function (Blueprint $table) {
            $table->increments('im_no');
            $table->integer('user_id');
            
            $table->string('im_status')->default('pending');
            $table->text('im_unit_name'); 
            $table->text('im_unit_add');
            $table->string('im_unit_tal');
            $table->string('im_unit_dist');
            $table->string('im_unit_state');
            $table->integer('im_unit_pin');
            $table->string('im_unit_fax');
            $table->string('im_unit_mob');
            $table->string('im_unit_email');    
            $table->string('im_unit_web');
            $table->string('im_unit_ssi');
            $table->string('im_unit_for');
            $table->integer('im_unit_cat');
            $table->string('im_unit_firm');
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
      Schema::drop('mst_im_regs');
    }
}
