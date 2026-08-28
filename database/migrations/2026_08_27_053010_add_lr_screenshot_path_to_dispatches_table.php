<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('dispatches', function (Blueprint $table) {
            if (!Schema::hasColumn('dispatches', 'lr_screenshot_path')) {
                $table->string('lr_screenshot_path')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('dispatches', function (Blueprint $table) {
            $table->dropColumn('lr_screenshot_path');
        });
    }
};