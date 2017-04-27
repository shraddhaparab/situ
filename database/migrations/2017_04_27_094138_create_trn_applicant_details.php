<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrnApplicantDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('trn_applicant_details', function (Blueprint $table) {
            $table->increments('app_id');
            $table->string('im_no');
            $table->string('app_name');
            $table->string('app_gen');
            $table->string('app_rel');
            $table->string('app_cat');
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
       Schema::drop('trn_applicant_details');
    }
}
