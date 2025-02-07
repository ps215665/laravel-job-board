<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);


        \App\Models\User::factory(300)->create();

        $users = \App\Models\User::all()->shuffle();

        for ($i=0; $i < 20; $i++) {
            \App\Models\Employer::factory()->create([
                'user_id' => $users->pop()->id
            ]);
        }

        $employers = \App\Models\Employer::all();

        for ($i=0; $i < 100; $i++) {
            \App\Models\Job::factory()->create([
               'employer_id' => $employers->random()->id
            ]);
        }

     //   Job::factory(100)->create();
    }
}
