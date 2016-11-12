<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bd_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fdept_id')->default(0);
            $table->integer('fpost_id')->default(0);
            $table->string('fname');
            $table->string('fnumber')->unique();
            $table->string('fempnum')->default('');
            $table->string('fphone')->default('');
            $table->string('faddress')->default('');
            $table->string('fremark')->default('');
            $table->integer('fphoto')->default('');
            $table->string('femail')->unique();
            $table->string('password')->default('');
            $table->integer('fcreator_id')->default('');
            $table->timestamp('fcreate_date')->nullable();
            $table->integer('fmodify_id')->default('');
            $table->timestamp('fmodify_date')->nullable();
            $table->integer('fauditor_id')->default('');
            $table->timestamp('faudit_date')->nullable();
            $table->integer('fdocument_status')->default(0);
            $table->integer('fforbidder_id')->default('');
            $table->timestamp('fforbid_date')->nullable();
            $table->string('fforbid_status')->default(0);
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('bd_employees');
    }
}
