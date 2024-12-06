<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::with('dosen')->get(); 
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        $dosens = Dosen::all();
        return view('mahasiswa.create', compact('dosens'));
    }

    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'nim' => 'required|string|max:15|unique:mahasiswas,nim',
            'nama_mahasiswa' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswas,email',
            'jurusan' => 'required|string|max:100',
            'dosen_id' => 'required|exists:dosens,id', 
        ]);

      
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
            'dosen_id' => $request->dosen_id, 
        ]);

        return redirect()->route('mahasiswa.index');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $dosens = Dosen::all(); 
        return view('mahasiswa.edit', compact('mahasiswa', 'dosens'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
      
        $validated = $request->validate([
            'nim' => 'required|string|max:15|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama_mahasiswa' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswas,email,' . $mahasiswa->id,
            'jurusan' => 'required|string|max:100',
            'dosen_id' => 'required|exists:dosens,id', 
        ]);

        
        $mahasiswa->update([
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa, 
            'email' => $request->email,
            'jurusan' => $request->jurusan,
            'dosen_id' => $request->dosen_id, 
        ]);

        return redirect()->route('mahasiswa.index');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }
}
