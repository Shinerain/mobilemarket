<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEngShift extends Migration
{
    /**
     * 班制
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('eng_shift', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fnumber')->default('')->comment('编号');
            $table->string('fname')->default('')->comment('名称');
            $table->decimal('fall_hours')->default(4)->comment('工作时间');
            $table->char('fis_private', 1)->fdefault('0')->comment('是否私有');
            $table->timestamp('fexpire_date')->nullable()->comment('失效时间');
            $table->timestamp('feffect_date')->nullable()->comment('生效时间');
            $table->string('fis_system_set')->default('')->comment('是否系统设置');
            $table->integer('forg_id')->default(0)->comment('组织id');
            $table->integer('fcreator_id')->default(0)->comment('创建人');
            $table->timestamp('fcreate_date')->nullable()->comment('创建时间');
            $table->integer('fmodify_id')->default(0)->comment('修改人');
            $table->timestamp('fmodify_date')->nullable()->comment('修改时间');
            $table->string('fdocument_status')->default('A')->comment('审核状态');

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
        Schema::create('eng_shift');
    }
}
