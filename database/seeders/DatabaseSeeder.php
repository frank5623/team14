<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->password = Hash::make('1234');
        $user->email = 'admin@example.com';
        $user->name ='admin';
        $user->role = User::ROLE_ADMIN;
        $user->save();

        $user = new User();
        $user->password = Hash::make('1234');
        $user->email = 'mod@example.com';
        $user->name ='MOD';
        $user->role = User::ROLE_MOD;
        $user->save();

        $user = new User();
        $user->password = Hash::make('1234');
        $user->email = 'user@example.com';
        $user->name ='user';
        $user->role = User::ROLE_USER;
        $user->save();

        $this->call(GamesTableSeeder::class);
        $this->call(DevelopersTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
