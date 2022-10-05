<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['nis' => '19390901 194506 1 001',         'name' => 'Admin','role' => 'Admin', 'password' => Hash::make('admin1234'), 'kelas_id' => 0,],
            ['nis' => '19390901 194506 1 002',         'name' => 'Petugas','role' => 'Petugas', 'password' => Hash::make('admin1234'), 'kelas_id' => 0],
            ['nis' => '01182134131', 'name' => 'Adera',            'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134132', 'name' => 'Agus',             'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134134', 'name' => 'Amila',            'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134135', 'name' => 'Anggi',            'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134136', 'name' => 'Ardhiansyah',      'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134137', 'name' => 'Ardi',             'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134138', 'name' => 'Aulia A',          'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134139', 'name' => 'Aulia F',          'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134140', 'name' => 'Dety',             'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134141', 'name' => 'Dias',             'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134142', 'name' => 'Fadhillah',        'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134143', 'name' => 'Falgunadi',        'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134144', 'name' => 'Ferry',            'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134145', 'name' => 'Frizie',           'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134146', 'name' => 'Genta',            'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134147', 'name' => 'Luthfi',           'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134148', 'name' => 'Mario',            'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134149', 'name' => 'M. Rizki',         'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134150', 'name' => 'M. Fathurrabbani', 'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134151', 'name' => 'M. Ilham',         'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134152', 'name' => 'Neneng',           'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134153', 'name' => 'Rafly',            'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134154', 'name' => 'Rafli',            'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134155', 'name' => 'Ranzif',           'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134156', 'name' => 'Rismi',            'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134157', 'name' => 'Rival',            'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134158', 'name' => 'Rizal',            'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134159', 'name' => 'Salsa',            'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134160', 'name' => 'Seli',             'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134161', 'name' => 'Talia',            'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134162', 'name' => 'Triana',           'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134163', 'name' => 'Wulan',            'password' => Hash::make('1234567890'), 'kelas_id' => 17],
            ['nis' => '01182134164', 'name' => 'Zidan',            'password' => Hash::make('1234567890'), 'kelas_id' => 17],
        ];

        foreach ($users as $value) {
            User::create($value);
        }
    }
}
