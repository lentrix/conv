<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('convention_id')->unsigned();
            $table->bigInteger('member_id')->unsigned();
            $table->string('type')->nullable();
            $table->string('payment_channel')->nullable();
            $table->timestamps();
            $table->foreign('convention_id')->references('id')->on('conventions');
            $table->foreign('member_id')->references('id')->on('members');
            $table->unique(['convention_id','member_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participations');
    }
};
