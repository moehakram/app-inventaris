<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Lemari Arsip OSIS',
                'kondisi' => 'Baik',
                'keterangan' => 'Lemari arsip untuk menyimpan dokumen OSIS',
                'stok' => '5',
                'lokasi_id' => 1, // SEKRETARIAT OSIS
                'foto' => 'lemari_arsip_osis.jpg',
                // 'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Papan Tulis Pramuka',
                'kondisi' => 'Baik',
                'keterangan' => 'Papan tulis untuk kegiatan Pramuka',
                'stok' => '10',
                'lokasi_id' => 2, // SEKRETARIAT PRAMUKA
                'foto' => 'papan_tulis_pramuka.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Sound System Rohis',
                'kondisi' => 'Baik',
                'keterangan' => 'Sound system untuk acara Rohis',
                'stok' => '3',
                'lokasi_id' => 3, // SEKRETARIAT ROHIS
                'foto' => 'sound_system_rohis.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Alat Pertolongan Pertama PMR',
                'kondisi' => 'Baik',
                'keterangan' => 'Kit pertolongan pertama untuk kegiatan PMR',
                'stok' => '20',
                'lokasi_id' => 4, // SEKRETARIAT PMR
                'foto' => 'kit_pmr.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Bendera Paskibra',
                'kondisi' => 'Baik',
                'keterangan' => 'Bendera untuk kegiatan Paskibra',
                'stok' => '30',
                'lokasi_id' => 2, // SEKRETARIAT PASKIB
                'foto' => 'bendera_paskibra.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Komputer OSIS',
                'kondisi' => 'Baik',
                'keterangan' => 'Komputer untuk administrasi OSIS',
                'stok' => '7',
                'lokasi_id' => 1, // SEKRETARIAT OSIS
                'foto' => 'komputer_osis.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'LCD Pramuka',
                'kondisi' => 'Baik',
                'keterangan' => 'LCD untuk presentasi Pramuka',
                'stok' => '4',
                'lokasi_id' => 2, // SEKRETARIAT PRAMUKA
                'foto' => 'lcd_pramuka.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        
        DB::table('inventaris')->insert($data);
    }
}
