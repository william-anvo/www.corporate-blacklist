<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlackListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blacklist', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->integer('bankcard_no')->unique()->index();

            $table->string('bank_name');
            $table->string('province');
            $table->string('city');
            $table->string('holder_name');
            $table->boolean('deleted')->default(0);
            
//            $table->boolean('acc_status')->default(0);  // active = 1 , non-active = 0 
//            $table->boolean('is_admin')->default(0);			
            $table->string('division')->default(0);			

            $table->string('creator');
            $table->string('remark');
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
        Schema::dropIfExists('blacklist');
    }
}
