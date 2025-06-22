<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;

class PengaduanController extends Controller
{
    public function index($status) {
        $pengaduan = Pengaduan::where('status', $status)->orderBy('tgl_pengaduan', 'desc')->get();
        // dd($satus);
        
        return view('pages.admin.pengaduan.index', compact('pengaduan', 'status'));
    }
    
    public function show($id_pengaduan) {
        $pengaduan = Pengaduan::where('id_pengaduan', $id_pengaduan)->first();

        $tanggapan = Tanggapan::where('id_pengaduan', $id_pengaduan)->first();

        return view('pages.admin.pengaduan.show', [
            'pengaduan' => $pengaduan,
            'tanggapan' => $tanggapan
        ]);
    }

    public function destroy(Request $request, $id_pengaduan) {
        $pengaduan = Pengaduan::findOrFail($id_pengaduan); // Menggunakan findOrFail

        $pengaduan->delete();

        if ($request->ajax()) {
            return response()->json(['success' => 'Pengaduan berhasil dihapus']);
        }

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil dihapus.');
    }

    // public function delete($id)
    // {
    //     $pengaduan = Pengaduan::findOrFail($id);
    //     $pengaduan->delete();
    //     return redirect()->route('nama.route.daftar.laporan')->with('success', 'Pengaduan berhasil dihapus');
    // }

}
