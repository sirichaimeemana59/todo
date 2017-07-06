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
        $user = new \App\User();
        $user->name = "sirichai meemana";
        $user->username = "admin";
        $user->email = "sirichaimeemana20014@gmail.com";
        $user->password = bcrypt('1234');
        $user->save();
        // INSERT INTO users (name,username,email.password)VALUES('sirichai Meemana','admin','sirichaimeemana20014@gmail.com','random_number',1234)
    }
}
