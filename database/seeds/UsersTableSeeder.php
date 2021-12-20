<?php

use App\User;
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
        // admin
        $ketua = factory(User::class)->create([
            'name'     => 'Admin',
            'email'    => 'admin@avia.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
        ]);

        $ketua->assignRole('admin');

        $this->command->info('>_ Here is your admin details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "laravel"');

        // petugas
        $petugas = factory(User::class)->create([
            'name'     => 'John Doe',
            'email'    => 'johndoe@avia.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
        ]);

        $petugas->assignRole('petugas');

        $this->command->info('>_ Here is your staff details to login:');
        $this->command->warn($petugas->email);
        $this->command->warn('Password is "laravel"');

        $this->command->call('cache:clear');
    }
}
