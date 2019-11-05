<?php

use Illuminate\Database\Seeder;
//use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [ 
        	[ 
        		'first_name' => 'Mr super',
        		'last_name' => 'admin',
                'mobile_no' => '123456789',
                'address' => 'Mirpur, Dhaka',
        		'status' => 1,
        		'role_type' => 2,
        		'personal_code' => 'asghdsjgfds',
        		'email' => 'super@admin.com',
        		'password' => bcrypt(123456)
        	], 
        	[ 
        		'first_name' => 'Mr',
        		'last_name' => 'admin',
                'mobile_no' => '123456789',
                'address' => 'Mirpur, Dhaka',
        		'status' => 1,
        		'role_type' => 1,
        		'personal_code' => 'sddsfghdsjgfds',
        		'email' => 'admin@admin.com',
        		'password' => bcrypt(123456)
        	],        	
        	[   
        		'first_name' => 'Mr',
        		'last_name' => 'user',
                'mobile_no' => '123456789',
                'address' => 'Mirpur, Dhaka',
        		'status' => 1,
        		'role_type' => 0,
        		'personal_code' => 'sddwrhdsjgfds',
        		'email' => 'user@user.com',
        		'password' => bcrypt(123456)
        	]
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('users')->insert($users);

        $this->command->info('Successfully run user table seeder');
    }
}
