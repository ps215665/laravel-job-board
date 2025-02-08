<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\JobApplication;
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

        User::factory()->create([
            'name' => 'Prakul Sharma',
            'email' => 'pks@gmail.com',
        ]);
        \App\Models\User::factory(300)->create();

        $users = \App\Models\User::all()->shuffle();

        for ($i = 0; $i < 20; $i++) {
            \App\Models\Employer::factory()->create([
                'user_id' => $users->pop()->id
            ]);
        }

        $employers = \App\Models\Employer::all();

        for ($i = 0; $i < 100; $i++) {
            \App\Models\Job::factory()->create([
                'employer_id' => $employers->random()->id
            ]);
        }

        foreach ($users as $user) {
            $jobs = \App\Models\Job::inRandomOrder()->take(rand(0, 4))->get();

            foreach ($jobs as $job) {
                \App\Models\JobApplication::factory()->create([
                    'job_id' => $job->id,
                    'user_id' => $user->id
                ]);
            }
        }

//        \App\Models\User::factory(300)->create();
////
//        $users = \App\Models\User::all()->shuffle();
//
//        for ($i=0; $i < 20; $i++) {
//            \App\Models\Employer::factory()->create([
//                'user_id' => $users->pop()->id
//            ]);
//        }
//
//        $employers = \App\Models\Employer::all();
//
//        for ($i=0; $i < 100; $i++) {
//            \App\Models\Job::factory()->create([
//               'employer_id' => $employers->random()->id
//            ]);
//        }
////
//        Job::factory(100)->create();
//
//        foreach ($users as $user) {
//            $jobs = Job::inRandomOrder()->take(rand(0,4))->get();
//
//            foreach ($jobs as $job) {
//                JobApplication::factory()->create([
//                    'job_id' => $job->id,
//                    'user_id' => $user->id
//                ]);
//            }
//        }
    }
}
