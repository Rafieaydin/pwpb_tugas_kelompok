<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 20 ; $i++) {
            DB::table('siswa')->insert([
                'nama' => 'dana' .$i,
                'kelas' => 'XI',
                'absen' => $i,
            ]);
        }
    }
}
