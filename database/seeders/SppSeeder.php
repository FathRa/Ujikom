<?php

namespace Database\Seeders;

use App\Models\Spp;
use Illuminate\Database\Seeder;

class SppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spps = [
            ['tahun' => '2021', 'nominal' => '200000'],
            ['tahun' => '2021', 'nominal' => '250000'],
            ['tahun' => '2021', 'nominal' => '300000'],
            ['tahun' => '2021', 'nominal' => '350000'],
        ];

        foreach ($spps as $spps) {
            Spp::create($spps);
        }
    }
}
