<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\model\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ////////// UserSeeder::table('users')->insert([
         ////////   'name' => Str::random(10),
         //////   'email' => Str::random(10).'@gmail.com',
          ////  'password' => Hash::make('password'),
        //]);
        $params = ["name"=>'rakishy',"email"=>'rakishy6@gmail.com',"password"=>'test12345'];
        UserSeeder::create($params);

        $this->call([
        UserSeeder::class,
        PostSeeder::class,
        CommentSeeder::class,
    ]);
    }
}
