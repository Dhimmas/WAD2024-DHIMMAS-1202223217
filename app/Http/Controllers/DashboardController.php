<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;

class DashboardController extends Controller
{
    public function index()
    {
        
        $dosenCount = Dosen::count(); 
        $mahasiswaCount = Mahasiswa::count(); 
        $dosenWaliCount = Mahasiswa::whereNotNull('dosen_id')->count(); 

        
        return view('dashboard.index', compact('dosenCount', 'mahasiswaCount', 'dosenWaliCount'));
    }
}
