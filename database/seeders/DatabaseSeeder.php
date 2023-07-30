<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Anak;
use App\Models\Ibu;
use App\Models\Kes_ibu_hamil;
use App\Models\User;
use App\Models\Pasien;
use App\Models\Personal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Bidan Eti Winarsih',
            'email' => Str::random(1).'@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // Pasien::create([
        //     'name' => 'bobby ayu',
        //     'umur' => '21',
        //     'nama_suami' => 'rahman',
        //     'tgl_awal' => '2022-07-14',
        //     'metode' => 'suntik'
        // ]);

        // personal::create([
        //     'pasien_id' => '1',
        //     'tgl_datang' => '2022-07-14',
        //     'berat_badan' => '23',
        //     'tinggi_darah' => '100/32',
        //     'tgl_kembali' => '2022-08-14'
        // ]);

        // Ibu::create([
        //     'name' => 'marsinah',
        //     'tempat_lahir' => 'bogor',
        //     'tanggal_lahir' => '1990-11-28',
        //     'agama_ibu' => 'islam',
        //     'pendidikan' => 'SMP',
        //     'pekerjaan_ibu' => 'pegawai swasta',
        //     'name_suami' => 'ahmad taulabi',
        //     'agama_suami' => 'kristen',
        //     'pekerjaan_suami' => 'guru',
        //     'alamat' => 'lingkungan kayu jati rt 02 rw 03'
        // ]);

        // Anak::create([
        //     'nama_anak' => 'bobby ayu',
        //     'nama_ibu' => 'marsinah',
        //     'tanggal_lahir' => '2022-07-14',
        //     'berat_bayi' => '12',
        //     'tinggi_bayi' => '12',
        //     'keterangan' => 'melakukan kb 3 bulan dengan suntik A'
        // ]);

        // Kes_ibu_hamil::create([
        //     'ibu_id' => '1',
        //     'tanggal' => '1',
        //     'keluhan_sekarang' => '1',
        //     'tekanan_darah' => '1',
        //     'berat_badan' => '1',
        //     'umur_kehamilan' => '1',
        // ]);
    }
}
