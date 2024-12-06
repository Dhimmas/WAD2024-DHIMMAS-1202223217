<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'kode_dosen' => 'required|string|max:10|unique:dosens,kode_dosen',
            'nama_dosen' => 'required|string|max:255',
            'nip' => 'required|string|max:20|unique:dosens,nip',
            'email' => 'required|email|unique:dosens,email',
            'no_telepon' => 'required|string|max:15',
        ]);

       
        Dosen::create([
            'kode_dosen' => $request->kode_dosen,
            'nama_dosen' => $request->nama_dosen,
            'nip' => $request->nip,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
        ]);

        return redirect()->route('dosen.index');
    }

    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $validated = $request->validate([
            'kode_dosen' => 'required|string|max:10|unique:dosens,kode_dosen,' . $dosen->id,
            'nama_dosen' => 'required|string|max:255',
            'nip' => 'required|string|max:20|unique:dosens,nip,' . $dosen->id,
            'email' => 'required|email|unique:dosens,email,' . $dosen->id,
            'no_telepon' => 'required|string|max:15',
        ]);

        $dosen->update([
            'kode_dosen' => $request->kode_dosen,
            'nama_dosen' => $request->nama_dosen,
            'nip' => $request->nip,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
        ]);

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil diperbarui!');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect()->route('dosen.index');
    }

    public function show(Dosen $dosen)
    {
        return view('dosen.show', compact('dosen'));
    }
}

