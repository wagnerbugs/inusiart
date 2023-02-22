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
        Schema::table('admins', function (Blueprint $table) {
            $table->boolean('active')->after('remember_token');
            $table->boolean('online')->after('active');
            $table->string('image')->after('email')->nullable();
            $table->string('style')->nullable()->after('online');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn('active');
            $table->dropColumn('online');
            $table->dropColumn('image');
            $table->dropColumn('style');
        });
    }
};
