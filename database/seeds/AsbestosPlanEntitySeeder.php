<?php

use Illuminate\Database\Seeder;
use App\AsbestosPlan;

class AsbestosPlanEntitySeeder extends Seeder
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
        factory(AsbestosPlan::class, $count)->create();
    }
}
