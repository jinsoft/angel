<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('email', 128)->comment("邮箱");
            $table->char('phone', 11)->comment('手机号');
            $table->char('password', 128)->comment('密码');
            $table->string('name', 64)->comment("名称");
            $table->integer('login_times', false, true)->unsigned()->comment('登录次数');
            $table->timestamp('last_login_time')->comment('上次登录时间');
            $table->string('last_login_ip', 15)->comment('上次登录的ip');
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
        Schema::dropIfExists('admins');
    }
}
