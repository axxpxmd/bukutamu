<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

// Model
use App\Models\BukuTamu;

class BukuTamuController extends Controller
{
    protected $path  = 'ava/';

    public function index()
    {
        return view('pages.form-daftar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'        => 'required|max:50|unique:buku_tamu',
            'jenis_paket' => 'required',
            'no_plat' => 'required|max:15|unique:buku_tamu',
            'foto'    => 'required|image|mimes:png,jpg,jpeg|max:1024'
        ]);

        $time = Carbon::now();
        $nama = $request->nama;
        $jenis_paket = $request->jenis_paket;
        $no_plat     = $request->no_plat;
        $tanggal     = $time->toDateString();
        $jam         = $time->toTimeString();

        $file     = $request->file('foto');
        $fileName = time() . "." . $file->getClientOriginalName();
        $request->file('foto')->storeAs($this->path, $fileName, 'sftp', 'public');

        $bukuTamu = new BukuTamu();
        $bukuTamu->nama = $nama;
        $bukuTamu->jenis_paket = $jenis_paket;
        $bukuTamu->no_plat = $no_plat;
        $bukuTamu->foto = $fileName;
        $bukuTamu->tanggal = $tanggal;
        $bukuTamu->jam = $jam;
        $bukuTamu->save();

        return redirect()->route('cetak-data', $nama);
    }

    public function cetakData($nama)
    {
        $result = BukuTamu::where('nama', $nama)->first();
        dd($result);
        return view('pages.cetak-data');
    }
}
