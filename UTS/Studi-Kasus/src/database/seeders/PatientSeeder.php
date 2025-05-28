<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Patient::firstOrCreate([
            'name' => 'One Piece',
            'jenis_kelamin' => 'laki-laki',
            'nomor_telepon' => '012345678',
            'nomor_identitas' => '3525673788',
            'payment' => '',
        ]);
    }
}
