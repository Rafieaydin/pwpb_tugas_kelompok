<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class siswaController extends Controller
{
    public function index()
    {
        // ngambil data siswa
        $siswa = Siswa::all();
        return view('siswa', ['siswa' => $siswa]);
    }
}
