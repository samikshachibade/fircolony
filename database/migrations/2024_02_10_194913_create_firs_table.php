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
        Schema::create('firs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('complainant_name');
            $table->string('identity_proof')->nullable();
            $table->string('contact_number');
            $table->date('incident_date');
            $table->string('accused_name')->nullable();
            $table->text('incident_location');
            $table->text('incident_description');
            $table->string('payment_id');
            $table->string('order_id');
            $table->decimal('amount', 10, 2);
            $table->string('currency', 3)->default('INR');
            $table->string('receipt');
            $table->string('status')->default('pending');
            $table->string('current_status')->default('Informing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('firs', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
