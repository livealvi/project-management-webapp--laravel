<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks__users', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('task_id')->nullable()->constrained("tasks")->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('team_id')->nullable()->constrained("teams")->cascadeOnUpdate()->nullOnDelete();
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
        Schema::dropIfExists('tasks__users');
    }
};
