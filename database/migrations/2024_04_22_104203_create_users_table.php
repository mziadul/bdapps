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

            $table->string('full_name')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email')->unique();
            $table->string('home_address')->nullable();
            $table->string('current_address')->nullable();

            $table->string('division')->nullable();
            $table->string('educational_background')->nullable();
            $table->string('has_pc')->nullable();
            $table->string('has_wifi')->nullable();

            $table->string('has_programming_experience')->nullable();
            $table->string('programming_experience')->nullable();
            $table->string('programming_experience_rate')->nullable();

            $table->string('has_android_experience')->nullable();
            $table->string('android_experience')->nullable();
            $table->string('android_experience_rate')->nullable();

            $table->string('allocate_time')->nullable();
            $table->string('bear_cost')->nullable();

            $table->date('date')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->tinyInteger('mail_status')->default(0); // 1=>mail sent, 0=>pending, -1=>failed

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
