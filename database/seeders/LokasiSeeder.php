<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'SEKRETARIAT OSIS',
                'keterangan' => 'Ruang sekretariat untuk OSIS',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'SEKRETARIAT PRAMUKA',
                'keterangan' => 'Ruang sekretariat untuk Pramuka',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'SEKRETARIAT ROHIS',
                'keterangan' => 'Ruang sekretariat untuk Rohis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'SEKRETARIAT PASKIB',
                'keterangan' => 'Ruang sekretariat untuk Paskibra',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'SEKRETARIAT PMR',
                'keterangan' => 'Ruang sekretariat untuk PMR',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        

        DB::table('lokasi')->insert($data);
    }
}
