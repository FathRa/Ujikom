<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listKelas = [
            ['tingkat' => 'X',      'jurusan' => 'RPL'],
            ['tingkat' => 'X',      'jurusan' => 'TKJ'],
            ['tingkat' => 'X',      'jurusan' => 'BNK'],
            ['tingkat' => 'X',      'jurusan' => 'TBG'],
            ['tingkat' => 'X',      'jurusan' => 'APK'],
            ['tingkat' => 'X',      'jurusan' => 'TKR'],
            ['tingkat' => 'X',      'jurusan' => 'TSM'],
            ['tingkat' => 'X',      'jurusan' => 'FMS'],
            ['tingkat' => 'XI',     'jurusan' => 'RPL'],
            ['tingkat' => 'XI',     'jurusan' => 'TKJ'],
            ['tingkat' => 'XI',     'jurusan' => 'APK'],
            ['tingkat' => 'XI',     'jurusan' => 'BNK'],
            ['tingkat' => 'XI',     'jurusan' => 'TBG'],
            ['tingkat' => 'XI',     'jurusan' => 'TKR'],
            ['tingkat' => 'XI',     'jurusan' => 'TSM'],
            ['tingkat' => 'XI',     'jurusan' => 'FMS'],
            ['tingkat' => 'XII',    'jurusan' => 'RPL'],
            ['tingkat' => 'XII',    'jurusan' => 'TKJ'],
            ['tingkat' => 'XII',    'jurusan' => 'APK'],
            ['tingkat' => 'XII',    'jurusan' => 'BNK'],
            ['tingkat' => 'XII',    'jurusan' => 'TBG'],
            ['tingkat' => 'XII',    'jurusan' => 'TKR'],
            ['tingkat' => 'XII',    'jurusan' => 'TSM'],
            ['tingkat' => 'XII',    'jurusan' => 'FMS'],
        ];

        foreach ($listKelas as $kelas) {
            Kelas::create($kelas);
        }
    }
}
