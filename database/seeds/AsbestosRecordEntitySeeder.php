<?php

use Illuminate\Database\Seeder;
use App\AsbestosRecord;

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
        factory(AsbestosRecordsFactory::class, $count)->create();
    }
}
