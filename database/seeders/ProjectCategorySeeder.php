<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('project_category')->insert([
            [
                'category_name' => 'Hacker',
                'description' => 'Keahlian di bidang teknologi dalam mengakses dan mencari celah keamanan sebuah sistem.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_name' => 'Hipster',
                'description' => 'Keahlian di bidang teknologi dalam menyusun user interface yang menarik dan kreatif.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_name' => 'Hustler',
                'description' => 'Keahlian di bidang digital marketing dalam menetapkan tujuan dan strategi bisnis dengan berpikir kritis.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_name' => 'IoT Engineer',
                'description' => 'Keahlian di bidang teknologi dalam mengembangkan perangkat pintar yang saling terhubung kapan saja.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_name' => 'Cloud Engineer',
                'description' => 'Keahlian di bidang teknologi dalam menyimpan, mengelola, dan mengakses data tanpa perlu server sendiri.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_name' => 'Graphic Designer',
                'description' => 'Keahlian di bidang teknologi dalam desain grafis branding produk yang eye-catching.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_name' => 'Network Engineer',
                'description' => 'Keahlian di bidang teknologi dalam merancang dan mengelola jaringan agar koneksi tetap lancar.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_name' => 'Fiber Optic Engineer',
                'description' => 'Keahlian di bidang teknologi dalam mengirimkan data dengan cepat dan jarak jauh menggunakan cahaya.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_name' => 'System Administrator',
                'description' => 'Keahlian di bidang teknologi dalam mengelola database  dan sistem secara efisien.',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
