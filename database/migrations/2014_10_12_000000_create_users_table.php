<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('first_name',155)->nullable();
            $table->string('last_name',155)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
	        $table->string('phone')->nullable();
	        $table->text('address')->nullable();
	        $table->string('city')->nullable();
	        $table->string('state')->nullable();
	        $table->string('zip',155)->nullable();
	        $table->string('role',155)->nullable();
	        $table->boolean('is_admin')->default(0);
	        $table->boolean('is_active')->default(0);
	        $table->rememberToken();
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
