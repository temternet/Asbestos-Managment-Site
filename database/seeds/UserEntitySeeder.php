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
        User::create ([
            'userID'  =>    str_random(100000),
            'email'  =>    'tem@temter.net',
            'type'  =>  1,
            'foreName'  =>    'Temmie',
            'surName'  =>    'Clarkson',
            'dob'  =>    '1999-02-15',
            'password'  =>    Hash::make('password'),
            'certDate'  =>    date('Y-m-d'),
            'certExpiry'  =>  date('Y-m-d', strtotime('+5 years')),
            'orgName'  =>    'temternet',
        ]);
    }
}
