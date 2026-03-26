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
        Schema::table('trains', function (Blueprint $table) {
            $table->renameColumn('delayed', 'is_delayed');
            $table->renameColumn('cancelled', 'is_cancelled');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->renameColumn('is_delayed', 'delayed');
            $table->renameColumn('is_cancelled', 'cancelled');
        });
    }
};
