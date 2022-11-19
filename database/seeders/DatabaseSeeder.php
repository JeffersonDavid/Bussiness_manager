<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();

         \App\Models\Company::factory(100)->create();

         \App\Models\User::factory()->create([
             'name' => 'Root user',
             'email' => 'jeffersondvid@hotmail.com',
             'password' => '$2a$12$ujk8Cj5kO.xqbp0UVTVQsueLBFpr2VVVQXcwfsfMSoqTq8Jr9ZgTO',
             'active' => 1,
         ]);
    }
}
