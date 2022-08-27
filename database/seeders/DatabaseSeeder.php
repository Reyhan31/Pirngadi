<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(productSeeder::class);
        $this->call(equipmentDetail::class);
        $this->call(controlPowerDetail::class);
        $this->call(isolationSwitchesDetail::class);
        $this->call(partsDetail::class);
        $this->call(starterDetail::class);
    }
}
