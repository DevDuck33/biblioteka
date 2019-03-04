<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // Create first users
        User::Create([
          'name' => 'admin',
          'email' => 'admin@admin.pl',
          'password' => bcrypt('admin')
        ]);
    }
}
