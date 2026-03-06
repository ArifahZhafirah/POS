<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [
            'stok_id' => 1,
            'barang_id' => 1,
            'user_id' => 1,
            'stok_tanggal' => '2026-03-05',
            'stok_jumlah' => 50,
        ],
        [
            'stok_id' => 2,
            'barang_id' => 2,
            'user_id' => 1,
            'stok_tanggal' => '2026-03-06',
            'stok_jumlah' => 40,
        ],
        [
            'stok_id' => 3,
            'barang_id' => 3,
            'user_id' => 1,
            'stok_tanggal' => '2026-03-07',
            'stok_jumlah' => 60,
             
        ],
        [
            'stok_id' => 4,
            'barang_id' => 4,
            'user_id' => 2,
            'stok_tanggal' => '2026-03-08',
            'stok_jumlah' => 45,
             
        ],
        [
            'stok_id' => 5,
            'barang_id' => 5,
            'user_id' => 3,
            'stok_tanggal' => '2026-03-09',
            'stok_jumlah' => 35,
             
        ],
        [
            'stok_id' => 6,
            'barang_id' => 6,
            'user_id' => 3,
            'stok_tanggal' => '2026-03-10',
            'stok_jumlah' => 30,
             
        ],
        [
            'stok_id' => 7,
            'barang_id' => 7,
            'user_id' => 1,
            'stok_tanggal' => '2026-03-11',
            'stok_jumlah' => 55,
             
        ],
        [
            'stok_id' => 8,
            'barang_id' => 8,
            'user_id' => 2,
            'stok_tanggal' => '2026-03-12',
            'stok_jumlah' => 25,
             
        ],
        [
            'stok_id' => 9,
            'barang_id' => 9,
            'user_id' => 1,
            'stok_tanggal' => '2026-03-13',
            'stok_jumlah' => 70,
             
        ],
        [
            'stok_id' => 10,
            'barang_id' => 10,
            'user_id' => 1,
            'stok_tanggal' => '2026-03-14',
            'stok_jumlah' => 65,
             
        ],
        [
            'stok_id' => 11,
            'barang_id' => 11,
            'user_id' => 1,
            'stok_tanggal' => '2026-03-15',
            'stok_jumlah' => 20,
             
        ],
        [
            'stok_id' => 12,
            'barang_id' => 12,
            'user_id' => 1,
            'stok_tanggal' => '2026-03-16',
            'stok_jumlah' => 85,
                     ],
        [
            'stok_id' => 13,
            'barang_id' => 13,
            'user_id' => 2,
            'stok_tanggal' => '2026-03-17',
            'stok_jumlah' => 90,
             
        ],
        [
            'stok_id' => 14,
            'barang_id' => 14,
            'user_id' => 3,
            'stok_tanggal' => '2026-03-18',
            'stok_jumlah' => 50,
        ],
        [
            'stok_id' => 15,
            'barang_id' => 15,
            'user_id' => 1,
            'stok_tanggal' => '2026-03-19',
            'stok_jumlah' => 20,
             
        ],
    ];  
        DB::table('t_stok')->insert($data);
    }
}
