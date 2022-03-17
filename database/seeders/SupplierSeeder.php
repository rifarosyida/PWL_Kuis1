<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier')->insert(
            [
                [
                    'nama' => 'GAP',
                    'deskripsi' => 'The Gap adalah sebuah perusahaan publik asal Amerika Serikat yang bergerak di industri retail.',
                    'gambar' => 'asset/images/supplier-1.png'
                ],
                [
                    'nama' => 'H&M',
                    'deskripsi' => 'H&M yang juga dikenal sebagai Hennes & Mauritz merupakan sebuah brand fashion retail asal Swedia.',
                    'gambar' => 'asset/images/supplier-2.png'
                ],
                [
                    'nama' => 'ZARA',
                    'deskripsi' => 'Zara adalah salah satu perusahaan mode internasional terbesar. Perusahaan ini dimiliki oleh Inditex.',
                    'gambar' => 'asset/images/supplier-3.png'
                ],
                [
                    'nama' => 'Bershka',
                    'deskripsi' => 'Bershka adalah rantai ritel terbesar kedua berdasarkan jumlah toko di seluruh operasi Inditex.',
                    'gambar' => 'asset/images/supplier-4.png'
                ],
                [
                    'nama' => 'UNIQLO',
                    'deskripsi' => 'UNIQLO adalah perusahaan Jepang yang menyediakan pakaian kasual untuk semua orang.',
                    'gambar' => 'asset/images/supplier-5.png'
                ]
            ]
        );
    }
}
