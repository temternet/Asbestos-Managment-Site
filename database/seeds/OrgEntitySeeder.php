<?php

use Illuminate\Database\Seeder;
use App\Organisation;

class OrgEntitySeeder extends Seeder
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
        factory(Organisation::class, $count)->create();
    }
}
