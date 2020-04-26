<?php

use Illuminate\Database\Seeder;

class AsbestosRecordEntitySeeder extends Seeder
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
        factory(AsbestosRecordSeeder::class, $count)->create();
    }
}
