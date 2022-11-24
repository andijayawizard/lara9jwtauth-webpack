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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable()->default('name');
            $table->string('email', 100)->nullable()->default('email');
            $table->string('phone', 100)->nullable()->default('phone');
            $table->string('pic', 100)->nullable()->default('pic');
            $table->longText('address')->nullable();
            $table->unsignedBigInteger('user_id')->nullable()->default(12);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('customers');
    }
};