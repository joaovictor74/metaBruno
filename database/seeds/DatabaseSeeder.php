<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * User::create(     [
     *       'matricula'=>'2020',
     *       'name' =>'leibe',
     *       'email' =>'leibe@beibe.com',
     *       'password' =>bcrypt('123')]);
     *   }
     * 
     * 
     */
    public function run()
    {     
            
        DB::table('admins')->insert([
            'name' => 'leibe',
            'email' => 'a@a.a',
            'password' => bcrypt('123'),
        ]);
}
}
