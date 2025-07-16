<?php

namespace App\Http\Controllers;

use App\Models\Mkepegawaian;
use Illuminate\Http\Request;

class Ckepegawaian extends Controller
{
    public function index()
    {
        $judul = 'DATA KEPEGAWAIAN';

        // Data dummy tanpa database
        $kepegawaian = [
            ['nama' => 'Andi', 'jabatan' => 'Staf IT'],
            ['nama' => 'Budi', 'jabatan' => 'Keuangan'],
            ['nama' => 'Citra', 'jabatan' => 'HRD'],
        ];

        // Jika ingin menampilkan view:
        return view('kepegawaian.index', compact('kepegawaian', 'judul'));

        // Atau jika ingin API JSON:
        // return response()->json($kepegawaian, 200);
    }
}
