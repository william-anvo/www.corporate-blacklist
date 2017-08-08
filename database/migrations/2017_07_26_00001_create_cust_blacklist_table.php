<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustBlacklistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cust_blacklist', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('bankcard_no')->index();

            $table->string('bank_name');
            $table->string('card_area')->nullable();
            $table->string('card_type')->nullable();
            $table->string('holder_name')->nullable();
            $table->boolean('deleted')->default(0);
            
//            $table->boolean('acc_status')->default(0);  // active = 1 , non-active = 0 
//            $table->boolean('is_admin')->default(0);
            
            $table->string('division');			
            $table->string('creator');
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('cust_blacklist');
    }
}
