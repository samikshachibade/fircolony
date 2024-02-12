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
        Schema::table('users', function (Blueprint $table) {
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('surname');
            $table->text('address');
            $table->string('aadhaar_number')->unique();
            $table->string('pancard_number')->unique();
            $table->string('mobile_number');
            $table->string('city');
            $table->string('state');
            $table->string('admin')->default(false);
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
