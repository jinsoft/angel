<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemNodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_nodes', function (Blueprint $table) {
            $table->id();
            $table->integer('pid', false, true)->comment('父节点id');
            $table->string('title',128)->nullable(false)->comment('名称');
            $table->string('icon',128)->comment('icon');
            $table->string('href', 128)->comment('链接');
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
        Schema::dropIfExists('system_nodes');
    }
}
