<?php

namespace Database\Seeders;

use App\Models\Month;
use Illuminate\Database\Seeder;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $months = [
            ['name' => 'Januari'],
            ['name' => 'Februari'],
            ['name' => 'Maret'],
            ['name' => 'April'],
            ['name' => 'Mei'],
            ['name' => 'Juni'],
            ['name' => 'Juli'],
            ['name' => 'Agustus'],
            ['name' => 'September'],
            ['name' => 'Oktober'],
            ['name' => 'November'],
            ['name' => 'Desember'],
        ];

        foreach ($months as  $value) {
            Month::create($value);
        }
    }
}
