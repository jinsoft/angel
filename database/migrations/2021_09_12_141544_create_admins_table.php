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
            $table->string('username', 64)->comment("用户名，用于后台登入名");
            $table->char('password', 128)->comment('密码');
            $table->string('avatar', 256)->default('')->comment('头像');
            $table->string('name', 16)->nullable(false)->comment('姓名');
            $table->char('phone', 11)->comment('手机号');
            $table->string('email', 128)->nullable(true)->default('')->comment("邮箱");
            $table->integer('login_times', false, true)->unsigned()->default(0)->comment('登录次数');
            $table->string('last_login_ip', 15)->comment('上次登录的ip');
            $table->timestamp('last_login_time')->nullable()->comment('上次登录时间');
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
