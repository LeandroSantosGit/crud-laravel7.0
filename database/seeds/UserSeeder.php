<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(User $user)
    {
        $user->create([
            'name' => 'Pablo dall Oglio',
            'email' => 'pablo@dalloglio.net',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'remember_token' => 123456,
            'created_at' => date('Y-m-d H:i:s'),
            'password' => 123456
        ]);

        $user->create([
            'name' => 'Juliano Niederauer',
            'email' => 'JulianoNiederauer@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'remember_token' => 123456,
            'created_at' => date('Y-m-d H:i:s'),
            'password' => 123456
        ]);

        $user->create([
            'name' => 'Josh Lockhart',
            'email' => 'JoshLockhart@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'remember_token' => 123456,
            'created_at' => date('Y-m-d H:i:s'),
            'password' => 123456
        ]);

        $user->create([
            'name' => 'David Flanagan',
            'email' => 'davidflanagan@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'remember_token' => 123456,
            'created_at' => date('Y-m-d H:i:s'),
            'password' => 123456
        ]);

        $user->create([
            'name' => 'Stoyan Stefanov',
            'email' => 'stoyanstefanov@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'remember_token' => 123456,
            'created_at' => date('Y-m-d H:i:s'),
            'password' => 123456
        ]);

        $user->create([
            'name' => 'Shelley Powers',
            'email' => 'shelleypowers@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'remember_token' => 123456,
            'created_at' => date('Y-m-d H:i:s'),
            'password' => 123456
        ]);

        $user->create([
            'name' => 'Freeman Eric',
            'email' => 'freemaneric@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'remember_token' => 123456,
            'created_at' => date('Y-m-d H:i:s'),
            'password' => 123456
        ]);
    }
}
