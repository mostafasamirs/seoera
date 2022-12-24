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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title',255)->default('SeoEra');
            $table->text('description')->nullable();
            $table->string('email',255)->nullable();
            $table->string('phone',50)->nullable();
            $table->string('location',255)->nullable();
            $table->string('logo',255)->nullable();
            $table->string('icon',255)->nullable();
            $table->string('link',255)->nullable();
            $table->string('facebook',255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
