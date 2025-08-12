<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class JobSeeder extends Seeder
{

    public function run(): void
    {
        // Load Job List from job_listings.php
        $jobListings = include database_path('seeders/data/job_listings.php');

        // Get User IDs from User Model
        $userIds = User::pluck('id')->toArray(); // $userIds is array

        // Looping for all job listing with user data
        foreach ($jobListings as &$listing) {
            // Add User Ids to listing
            $listing['user_id'] = $userIds[array_rand($userIds)];

            // Add Timestamp
            $listing['created_at'] = now();
            $listing['updated_at'] = now();
        }

        // Insert Job Listings
        DB::table('job_listings')->insert($jobListings);
        echo "Create Job Listing Successfully";
    }
}
