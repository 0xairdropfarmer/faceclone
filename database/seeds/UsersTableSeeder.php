<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User',5)->create();
        factory('App\Post',20)->create();
        factory('App\Like',50)->create();
        factory('App\Comment',20)->create();
        factory('App\Message',200)->create();
        // factory('App\UserFollow',200)->create();
    }
}
