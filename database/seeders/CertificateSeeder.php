<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Certificate::factory(10)->create();
    }
}
