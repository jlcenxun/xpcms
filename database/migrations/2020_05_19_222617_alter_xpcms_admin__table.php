<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterXpcmsAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('xpcms_admin', function (Blueprint $table) {
            //
            $table->string('activity_token')->comment('激活验证token');
            $table->timestamp('activity_expire')->comment('激活过期时间');
            $table->tinyInteger('is_activity')->default(0)->comment('是否激活1是，0否');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('xpcms_admin', function (Blueprint $table) {
            //
        });
    }
}
