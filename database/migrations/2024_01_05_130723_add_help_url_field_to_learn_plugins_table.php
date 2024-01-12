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
        Schema::table('learn_plugins', function (Blueprint $table) {
            $table->string('help_url')->nullable()->after('status')->comment("Storing discord link");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('learn_plugins', function (Blueprint $table) {
            $table->dropColumn('help_url');
        });
    }
};
