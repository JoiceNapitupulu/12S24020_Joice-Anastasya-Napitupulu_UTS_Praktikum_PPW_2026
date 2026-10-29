<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\equipments;
use App\Models\loan_request;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class EquipmentController extends equipments
{
    
// 1. Tampilkan Semua Equipments (Eager Loading + Pagination)
public function index() {
    $equipments = Equipment::with('category_id')->latest()->paginate(10);
    return view('equipments.index', compact('equipments'));
}

// 2. Simpan Equipments Baru ke Database (Validasi Ketat Sisi Server)
public function store(Request $request) {
    $validated = $request->validate([
        'nim' => 'required|digits:8|unique:mahasiswas,nim',
        'nama' => 'required|string|min:3|max:150',
        'email' => 'required|email|unique:mahasiswas,email',
        'program_studi_id' => 'required|exists:program_studis,id',
        'ipk' => 'required|numeric|between:0.00,4.00',
    ]);

    Mahasiswa::create($validated);
    return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan!');
}

}