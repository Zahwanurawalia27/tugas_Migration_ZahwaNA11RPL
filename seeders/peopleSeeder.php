<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\people;

class peopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        people::insert([
            'nama'=>"jungkook",
            'alamat'=>"jakarta",
            'umur'=>"17",
            'status_pekerjaan'=>"siswa SMA",
        ]);
        people::insert([
            'nama'=>"taehyung",
            'alamat'=>"surabaya",
            'umur'=>"20",
            'status_pekerjaan'=>"Mahasiswa",
        ]);
        people::insert([
            'nama'=>"jimin",
            'alamat'=>"bandung",
            'umur'=>"20",
            'status_pekerjaan'=>"Mahasiswa",
        ]);
        people::insert([
            'nama'=>"minggyu",
            'alamat'=>"jakarta",
            'umur'=>"17",
            'status_pekerjaan'=>"siswa SMA",
        ]);
        people::insert([
            'nama'=>"namjoon",
            'alamat'=>"malang",
            'umur'=>"25",
            'status_pekerjaan'=>"dosen",
        ]);
        
    }
}
