<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',

        // ]);

        User::factory()->create([
            'name' => 'ADMIN',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
        ]);

        \App\Models\Pejabat::create([
            // 'id' => '0',
            // 'tahun_sk' => '2022',
            'tanggal_sk' => '2022-01-3',
            'nomor_sk' => '188/19/114.1/2022',
            'kuasa_pengguna_anggaran' => 'Dra. Ec. NIRMALA DEWI, MM',
            'nip_kuasa_pengguna' => '19650909 199403 2 006',
            'pejabat_pembuatan_komitmen' => 'I WAYAN RUDY ARTHA, S.Kom',
            'nip_pejabat_komitmen' => '19770517 200901 1 005',
            'pejabat_pengadaan' => 'ADI KURNIAWAN.S.Kom.,M.Kom',
            'nip_pejabat_pengadaan' => '19890618 201403 1 002',
            'bpp' => 'SISCA AGUSTIA PUTRI, S.Sos',
            'nip_bpp' => '19850120 201001 2 016',
            'pengurus_barang' => 'AGUS SUNARYO',
            'nip_pengurus_barang' => '19660717 201001 1 003',
        ]);

        // DB::insert([
        // // \App\Models\Triggers::create([
        //     'CREATE TRIGGER `jumlah_harga` AFTER INSERT ON `triggers`
        //     FOR EACH ROW UPDATE barangs SET jumlah_harga = harga_satuan*jumlah_barang',
        // ]);
    }
}
