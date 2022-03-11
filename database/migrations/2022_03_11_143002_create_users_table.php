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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id', 20)->nullable();
            $table->string('role', 10)->nullable();
            $table->string('user_name', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('password', 30)->nullable();
            $table->string('address', 30)->nullable();
            $table->string('phone', 20)->nullable();
            $table->date('joiningDate')->nullable();
            $table->string('photo', 30)->nullable();
            $table->string('status', 10)->nullable();
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
        Schema::dropIfExists('users');
    }
};
