<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Clear table data
        DB::table('job_listings')->truncate();
        Schema::table('job_listings', function (Blueprint $table) {
            $table->text('requirements')->nullable()->change();
            $table->text('benefits')->nullable()->change();
            $table->text('address')->nullable()->change();
            $table->text('company_description')->nullable()->change();
            $table->string('tags')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_listings', function (Blueprint $table) {
            $table->text('requirements')->nullable()->change();
            $table->text('benefits')->nullable()->change();
            $table->text('address')->nullable()->change();
            $table->text('company_description')->nullable()->change();
            $table->string('tags')->nullable()->change();
        });
    }
};
