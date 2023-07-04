<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id');
            $table->string('title', 100);
            $table->text('content');
            $table->boolean('seen');
            $table->timestamp('created_at')->default(\Illuminate\Support\Facades\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('receive_time')->default(\Illuminate\Support\Facades\DB::raw('CURRENT_TIMESTAMP'));
            $table->date('notification_expiry_date');

            $table->foreign('account_id')->references('id')->on('staff_accounts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
