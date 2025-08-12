<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Disable foreign key checks to allow truncation
        Schema::disableForeignKeyConstraints();

        // Truncate Table :: clear
        DB::table('job_listings')->truncate();
        DB::table('users')->truncate();

        // Enable Foreign Key Checks to allow truncation
        Schema::enableForeignKeyConstraints();

        // Data Seeding ** to seed job data to job_listings , we need to seed first USER
        $this->call(RandomUserSeeder::class);
        $this->call(JobSeeder::class);
    }
}
