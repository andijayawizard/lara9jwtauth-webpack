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
        Schema::create('site_surveys', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable()->default('name');
            $table->string('tools', 100)->nullable()->default('tools');
            $table->string('access', 100)->nullable()->default('access');
            $table->string('duration', 100)->nullable()->default('duration');
            $table->string('perbaikan', 100)->nullable()->default('perbaikan');
            $table->longText('description')->nullable();
            $table->longText('saran')->nullable();
            $table->date('date')->nullable();
            $table->string('budget', 100)->nullable()->default('budget');
            $table->string('image', 100)->nullable()->default('image');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('customer_id')->nullable()->default(12);
            $table->unsignedBigInteger('user_id')->nullable()->default(12);
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
        Schema::dropIfExists('site_surveys');
    }
};