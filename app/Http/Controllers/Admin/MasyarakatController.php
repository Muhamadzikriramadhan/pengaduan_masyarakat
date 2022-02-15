<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        $masyarakat = Masyarakat::all();

        return view('Admin.Masyarakat.index', ['masyarakat' => $masyarakat]);
    }

    public function show($nik)
    {
        $masyarakat = Masyarakat::where('nik', $nik)->first();

        return view('Admin.Masyarakat.show', ['masyarakat' => $masyarakat]);
    }

    public function destroy(Masyarakat $masyarakat)
    {
        $pengaduan = Pengaduan::where('nik', $masyarakat->nik)->first();

        if (!$pengaduan) {
            $masyarakat->delete();

            return redirect()->route('masyarakat.index');
        } else {
            return redirect()->back()->with(['notif' => 'Can\'t delete. Masyarakat has a relationship!']);
        }
    }
}
