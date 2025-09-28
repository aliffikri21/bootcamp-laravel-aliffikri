<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Mahasiswa';
        $data['mahasiswa'] = Mahasiswa::paginate(10);
        return view('mahasiswa.index', $data);
    }

    public function create()
    {
        $data['title'] = 'Form Tambah Data Mahasiswa';
        return view('mahasiswa.create', $data);
    }

    public function store(Request $request)
    {
        Mahasiswa::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'kelamin' => $request->kelamin,
            'alamat' => $request->alamat,
        ]);

        return redirect('/mahasiswa/create')->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $data['title'] = 'Form Edit Data Mahasiswa';
        $data['mahasiswa'] = $mahasiswa;
        return view('mahasiswa.edit', $data);
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'kelamin' => $request->kelamin,
            'alamat' => $request->alamat,
        ]);

        return redirect('/mahasiswa/' . $mahasiswa->id . '/edit')->with('success', 'Data mahasiswa berhasil diperbaharui!');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
