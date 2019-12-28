<?php

use Illuminate\Database\Seeder;
use App\User;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'User1',
        	'email' => 'user@test.app',
        	'address' => 'Sukabumi jawabarat',
        	'born' => '120902',
        	'hobby' => 'no',
        	'phone' => '083815617252',
        	'password' => bcrypt('secret')
        ]);
    }
}
