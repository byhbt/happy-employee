<?php

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
        factory(App\User::class, 2)->create();

        // Add demo account
        factory(App\User::class)->create([
            'email' => 'admin@he.com',
            'password' => bcrypt('testtest'),
        ]);
    }
}
