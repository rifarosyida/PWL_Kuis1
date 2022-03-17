<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert(
            [
                [
                    'nama' => "Zalfa' Putri Nabilah",
                    'jabatan' => 'CEO',
                    'foto' => 'asset/images/pegawai-1.png'
                ],
                [
                    'nama' => 'Dina Rifa Rosyida',
                    'jabatan' => 'CEO',
                    'foto' => 'asset/images/pegawai-2.png'
                ],
                [
                    'nama' => 'Shenina Sahab',
                    'jabatan' => 'Finance Manager',
                    'foto' => 'asset/images/pegawai-3.png'
                ],
                [
                    'nama' => 'Jamal Abdul Qadir',
                    'jabatan' => 'Business Development',
                    'foto' => 'asset/images/pegawai-4.png'
                ],
                [
                    'nama' => 'Jepri Salahudin',
                    'jabatan' => 'Technical Architect',
                    'foto' => 'asset/images/pegawai-5.png'
                ],
                [
                    'nama' => 'Gorya Teresia',
                    'jabatan' => 'Advertising Manager',
                    'foto' => 'asset/images/pegawai-6.png'
                ],
                [
                    'nama' => 'Manurios',
                    'jabatan' => 'Mobile Planning',
                    'foto' => 'asset/images/pegawai-7.png'
                ],
                [
                    'nama' => 'Pradikta Wicaksono',
                    'jabatan' => 'Operational Manager',
                    'foto' => 'asset/images/pegawai-8.png'
                ],
                [
                    'nama' => 'Nam Do San',
                    'jabatan' => 'Software Engineer',
                    'foto' => 'asset/images/pegawai-9.png'
                ]
            ]
        );

    }
}
