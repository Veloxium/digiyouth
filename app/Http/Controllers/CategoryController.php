<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(string $cat): View
    {
        $descriptions = [
            [
                'cat' => 'cloud-engineer',
                'title' => 'Cloud Engineer',
                'desc' => 'Keahlian di bidang teknologi dalam menyimpan, mengelola, dan mengakses data tanpa perlu server sendiri.',
            ],
            [
                'cat' => 'fiber-optic-engineer',
                'title' => 'Fiber Optic',
                'desc' => 'Keahlian di bidang teknologi dalam mengirimkan data dengan cepat dan jarak jauh menggunakan cahaya.',
            ],
            [
                'cat' => 'hacker',
                'title' => 'Hacker',
                'desc' => 'Keahlian di bidang teknologi dalam mengakses dan mencari celah keamanan sebuah sistem.',
            ],
            [
                'cat' => 'hustler',
                'title' => 'Hustler',
                'desc' => 'Keahlian di bidang digital marketing dalam menetapkan tujuan dan strategi bisnis dengan berpikir kritis.',
            ],
            [
                'cat' => 'iot-engineer',
                'title' => 'IoT Engineer',
                'desc' => 'Keahlian di bidang teknologi dalam mengembangkan perangkat pintar yang saling terhubung kapan saja.',
            ],
            [
                'cat' => 'network-engineer',
                'title' => 'Network Engineer',
                'desc' => 'Keahlian di bidang teknologi dalam merancang dan mengelola jaringan agar koneksi tetap lancar.',
            ],
            [
                'cat' => 'system-administrator',
                'title' => 'System Administrator',
                'desc' => 'Keahlian di bidang teknologi dalam mengelola database  dan sistem secara efisien.',
            ],
            [
                'cat' => 'graphic-designer',
                'title' => 'Graphic Designer',
                'desc' => 'Keahlian di bidang teknologi dalam desain grafis branding produk yang eye-catching.',
            ],
            [
                'cat' => 'hipster',
                'title' => 'Hipster',
                'desc' => 'Keahlian di bidang teknologi dalam menyusun user interface yang menarik dan kreatif.',
            ]
        ];
        $item = collect($descriptions)->firstWhere('cat', $cat);
        if (!$item) {
            abort(404);
        }
        return view('guest.category.index', [
            'cat' => $cat,
            'item' => $item,
        ]);
    }

    public function detail(string $id): View
    {
        return view('guest.category.detail');
    }
}
