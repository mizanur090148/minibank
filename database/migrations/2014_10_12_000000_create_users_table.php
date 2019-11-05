<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name', 30);
            $table->string('last_name', 20);
            $table->string('mobile_no', 20);
            $table->string('address', 60);
            $table->string('email', 50)->unique();
            $table->string('personal_code', 30)->nullable();
            $table->string('password');
            $table->smallInteger('status')->default(0)->comment('0=inactive, 1=active, 2=blocked');
            $table->tinyInteger('role_type')->default(0)->comment('0=user, 1=admin, 2=super_admin');
            $table->timestamp('last_login')->nullable();
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
