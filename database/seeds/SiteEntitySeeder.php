<?php

use Illuminate\Database\Seeder;

class SiteEntitySeeder extends Seeder
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
        factory(Site::class, $count)->create();
    }
}
