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
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
            $table->string('father_name',25);
            $table->string('first_name',10);
            $table->string('last_name',10);
            $table->string('username',34)->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->integer('nid')->unique();
            $table->string('address',128)->nullable();
            $table->longText('bio',200)->nullable();
            $table->string('image',21)->nullable();
            $table->string('section',10)->nullable();
            $table->float('salary',10,2)->nullable();
            $table->string('ip_address',55);
            $table->string('last_login',55);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->tinyInteger('email_verify')->nullable();
            $table->tinyInteger('phone_verify')->nullable();
            $table->string('sms_token')->nullable();
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
