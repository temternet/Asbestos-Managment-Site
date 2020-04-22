<?php

use Illuminate\Database\Seeder;
use App\User;

class UserEntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $count = 10;
        factory(User::class, $count)->create();
    }
}
