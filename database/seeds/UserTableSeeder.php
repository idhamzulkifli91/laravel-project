<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*factory(App\User::class,5)->create()->each(function($u){
            $u->book()->save(factory(App\Book::class)->make());
        });*/
    }
}
