<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [
            'barang_id' => 1,
            'kategori_id' => 1,
            'barang_kode' => 'BR001',
            'barang_nama' => 'Beras',
            'harga_jual' => 15000,
            'harga_beli' => 13000,
        ],
        [
            'barang_id' => 2,
            'kategori_id' => 1,
            'barang_kode' => 'BR002',
            'barang_nama' => 'Minyak',
            'harga_jual' => 15000,
            'harga_beli' => 14000,
        ],
        [
            'barang_id' => 3,
            'kategori_id' => 1,
            'barang_kode' => 'BR003',
            'barang_nama' => 'Telur',
            'harga_jual' => 2500,
            'harga_beli' => 2000,
        ],
        [
            'barang_id' => 4,
            'kategori_id' => 1,
            'barang_kode' => 'BR004',
            'barang_nama' => 'Air',
            'harga_jual' => 6000,
            'harga_beli' => 5000,
        ],
        [
            'barang_id' => 5,
            'kategori_id' => 1,
            'barang_kode' => 'BR005',
            'barang_nama' => 'Kecap',
            'harga_jual' => 3000,
            'harga_beli' => 2000,
        ],
        [
            'barang_id' => 6,
            'kategori_id' => 2,
            'barang_kode' => 'BR006',
            'barang_nama' => 'Teh',
            'harga_jual' => 6000,
            'harga_beli' => 5000,
        ],
        [
            'barang_id' => 7,
            'kategori_id' => 2,
            'barang_kode' => 'BR007',
            'barang_nama' => 'Keripik',
            'harga_jual' => 8000,
            'harga_beli' => 6500,
        ],
        [
            'barang_id' => 8,
            'kategori_id' => 2,
            'barang_kode' => 'BR008',
            'barang_nama' => 'Biskuit',
            'harga_jual' => 9000,
            'harga_beli' => 7500,
        ],
        [
            'barang_id' => 9,
            'kategori_id' => 2,
            'barang_kode' => 'BR009',
            'barang_nama' => 'Buku',
            'harga_jual' => 5000,
            'harga_beli' => 3500,
        ],
        [
            'barang_id' => 10,
            'kategori_id' => 3,
            'barang_kode' => 'BR0010',
            'barang_nama' => 'Pulpen',
            'harga_jual' => 3000,
            'harga_beli' => 2000,
        ],
        [
            'barang_id' => 11,
            'kategori_id' => 3,
            'barang_kode' => 'BR0011',
            'barang_nama' => 'Pensil',
            'harga_jual' => 2500,
            'harga_beli' => 1500,
        ],
        [
            'barang_id' => 12,
            'kategori_id' => 3,
            'barang_kode' => 'BR0012',
            'barang_nama' => 'Permen',
            'harga_jual' => 1000,
            'harga_beli' => 500,
        ],
        [
            'barang_id' => 13,
            'kategori_id' => 4,
            'barang_kode' => 'BR0013',
            'barang_nama' => 'Kopi',
            'harga_jual' => 7000,
            'harga_beli' => 5500,
        ],
        [
            'barang_id' => 14,
            'kategori_id' => 4,
            'barang_kode' => 'BR0014',
            'barang_nama' => 'Gula',
            'harga_jual' => 14000,
            'harga_beli' => 12000,
        ],
        [
            'barang_id' => 15,
            'kategori_id' => 4,
            'barang_kode' => 'BR0015',
            'barang_nama' => 'Susu',
            'harga_jual' => 5000,
            'harga_beli' => 4000,
        ],
    ];
        DB::table('m_barang')->insert($data);
    }
}
