<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::firstOrCreate(
            ['id' => 1],
            [
                'tipe' => 'sejarah',
                'judul' => 'Sejarah Dinas',
                'isi' => 'Ini adalah isi sejarah dinas yang akan diisi dengan informasi lengkap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );

        Profile::firstOrCreate(
            ['id' => 2],
            [
                'tipe' => 'struktur',
                'judul' => 'Struktur Organisasi',
                'isi' => 'Ini adalah isi struktur organisasi dinas yang akan diisi dengan informasi lengkap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );

        Profile::firstOrCreate(
            ['id' => 3],
            [
                'tipe' => 'visi-misi',
                'judul' => 'Visi & Misi',
                'isi' => 'Ini adalah isi visi dan misi dinas yang akan diisi dengan informasi lengkap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
    }
}
