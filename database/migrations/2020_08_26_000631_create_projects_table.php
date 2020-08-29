<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_client_id')->constrained('users')->onDelete('cascade');
            $table->string('project_id',60)->unique()->nullable();
            $table->string('project_name',89)->nullable();
            $table->string('project_location',200)->nullable();
            $table->float('project_budget',20,2)->nullable();
            $table->string('project_status',30)->nullable();
            $table->longText('project_des')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
