<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstImRegs extends Migration
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
            
            $table->string('im_reg_auth');
            $table->string('im_prems');
            
            $table->string('im_bank_name');
            $table->string('im_bank_branch');
            $table->string('im__bank_add');
            $table->string('im_bank_pin');
            $table->string('im_bank_mob');
            $table->string('im_bank_acc');
            
            $table->string('im_bank_ifsc');
            
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
