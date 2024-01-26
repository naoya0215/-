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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            //ユーザーidを外部キー制約　更新時に動機をとる
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
            //イベントidを外部キー制約
            $table->foreignId('event_id')->constrained()->onUpdate('cascade');
            //予約人数
            $table->integer('number_of_people');
            //キャンセル
            $table->datetime('canceled_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};