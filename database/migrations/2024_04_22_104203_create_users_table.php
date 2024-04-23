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

            $table->text('full_name')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email')->unique();
            $table->text('home_address')->nullable();
            $table->text('current_address')->nullable();

            $table->string('division')->nullable();
            $table->longText('educational_background')->nullable();
            $table->string('has_pc')->nullable();
            $table->string('has_wifi')->nullable();

            $table->string('has_programming_experience')->nullable();
            $table->longText('programming_experience')->nullable();
            $table->string('programming_experience_rate')->nullable();

            $table->string('has_android_experience')->nullable();
            $table->longText('android_experience')->nullable();
            $table->string('android_experience_rate')->nullable();

            $table->string('allocate_time')->nullable();
            $table->string('bear_cost')->nullable();

            $table->string('user_ip')->nullable();
            $table->string('user_agent')->nullable();
            
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
