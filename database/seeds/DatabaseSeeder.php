<?php

use App\User;
use Illuminate\Database\Seeder;
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
        // $this->call(UsersTableSeeder::class);
    	//admin
        $admin = User::create([
        	'name'=>'admin',
        	'email'=>'admin@admin.com',
        	'password' => Hash::make('password'),
        	'designation' => 'system admin',
        	'role' => 'admin'

        ]);
        //emp
        $user1 = User::create([
        	'name'=>'employee1',
        	'email'=>'employee1@gmail.com',
        	'password' => Hash::make('employee1'),
        	'designation' => 'manager',
        	'role' => 'employee'
        ]);
        $user2 = User::create([
        	'name'=>'employee2',
        	'email'=>'employee2@gmail.com',
        	'password' => Hash::make('employee2'),
        	'designation' => 'developer',
        	'role' => 'employee'
        ]);
        
    }
}
