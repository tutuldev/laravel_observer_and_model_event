<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // method ----> 1
        // collect([
        //     ['name' => 'John Doe', 'email' => 'john@example.com'],
        //     ['name' => 'Jane Smith', 'email' => 'jane@example.com'],
        //     ['name' => 'Robert Brown', 'email' => 'robert@example.com'],
        //     ['name' => 'Emily Davis', 'email' => 'emily@example.com'],
        // ])->each(function ($user) {
        //     DB::table('users')->insert($user);
        // });

        // method --> 2

        $user=collect([
            ['name' => 'John Doe', 'email' => 'john@example.com'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com'],
            ['name' => 'Robert Brown', 'email' => 'robert@example.com'],
            ['name' => 'Emily Davis', 'email' => 'emily@example.com'],
        ]);
        $user->each(function ($user){
            User::insert($user);
        });
    }
}
