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
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('father_name',60)->nullable();
            $table->string('mother_name',60)->nullable();
            $table->string('username',60)->unique()->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('can_login')->default(false);
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('section')->nullable();
            $table->float('salary',10,2)->nullable();
            $table->longText('bio')->nullable();
            $table->string('ip_address',100);
            $table->string('last_login',100);
            $table->string('nid',50)->unique();
            $table->json('image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
