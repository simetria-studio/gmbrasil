<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Felipe',
            'email'     => 'felipephplow@gmail.com',
            'password'  => bcrypt('powerfull'),
        ]);
    }
}
