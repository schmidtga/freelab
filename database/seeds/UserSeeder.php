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
    public function run()
    {
        $schmidtAdminUser   = User::create([
            'name'          => 'Guilherme Schmidt',
            'email'         => 'schmidtga@gmail.com',
            'password'      => bcrypt('river1009'),
        ]);
    }
}
