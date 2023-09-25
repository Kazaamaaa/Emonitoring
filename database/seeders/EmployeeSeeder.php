<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'Kegiatan' => 'Bowling',
            'Uraian' => 'apaaja',
            'Rkap' => 'Sawit',
            'Januari' => '100000',
            'Febuari' => '100000',
            'Maret' => '100000',
            'April' => '100000',
            'Mei' => '100000',
            'Juni' => '100000',
            'Juli' => '100000',
            'Agustus' => '100000',
            'September' => '100000',
            'Oktober' => '100000',
            'November' => '100000',
            'Desember' => '100000',

        ]);
    }
}