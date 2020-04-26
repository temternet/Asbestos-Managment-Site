<?php

use Illuminate\Database\Seeder;

class PremisesEntitySeeder extends Seeder
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
        factory(Premises::class, $count)->create();
    }
}
