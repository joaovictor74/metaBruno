<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {     
            User::create(     [
            'name' =>'leibe',
            'email' =>'leibe@beibe.com',
            'password' =>bcrypt('123')]);
        }
}
