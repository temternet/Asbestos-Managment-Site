<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserEntitySeeder::class);
        $this->call(SiteEntitySeeder::class);
        $this->call(PremisesEntitySeeder::class);
        $this->call(OrgEntitySeeder::class);
        $this->call(AsbestosPlanEntitySeeder::class);
        $this->call(AsbestosRecordEntitySeeder::class);
    }
}
