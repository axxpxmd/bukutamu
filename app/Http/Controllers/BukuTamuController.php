<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

// Model
use App\Models\BukuTamu;

class BukuTamuController extends Controller
{
    protected $path  = 'ava/';

    public function index()
    {
        $time    = Carbon::now();
        $tanggal = $time->toDateString();
        $jam     = $time->toTimeString();

        return view('pages.form-daftar', compact(
            'tanggal',
            'jam'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'        => 'required|max:50',
            'jenis_paket' => 'required',
            'no_plat' => 'required|max:15',
            'foto'    => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $nama = $request->nama;
        $jenis_paket = $request->jenis_paket;
        $penerima    = $request->penerima;
        $no_plat     = $request->no_plat;
        $tanggal     = $request->tanggal;
        $jam         = $request->jam;

        /**
         * Generete id_registrasi (tanggal, bulan, jenis paket, urutan by jenis paket)
         */
        $digit1 = substr($tanggal, 8);
        $digit2 = substr($tanggal, 5, -3);
        $digit3 = 0 . $jenis_paket;
        $count  = BukuTamu::where('jenis_paket', $jenis_paket)->count();
        if ($count != 0) {
            $result = $count + 1;
        } else {
            $result = '1';
        }
        if (\strlen($result) == 1) {
            $digit4 = '000' . $result;
        } elseif (\strlen($result) == 2) {
            $digit4 = '00' . $result;
        } elseif (\strlen($result) == 3) {
            $digit4 = '0' . $result;
        } elseif (\strlen($result) == 4) {
            $digit4 = $result;
        }
        $id_registrasi = $digit1 . $digit2 . $digit3 . $digit4;

        $file     = $request->file('foto');
        $fileName = time() . "." . $file->getClientOriginalName();
        $request->file('foto')->storeAs($this->path, $fileName, 'sftp', 'public');

        $bukuTamu = new BukuTamu();
        $bukuTamu->nama = $nama;
        $bukuTamu->jenis_paket   = $jenis_paket;
        $bukuTamu->id_registrasi = $id_registrasi;
        $bukuTamu->penerima      = $penerima;
        $bukuTamu->no_plat = $no_plat;
        $bukuTamu->foto    = $fileName;
        $bukuTamu->tanggal = $tanggal;
        $bukuTamu->jam     = $jam;
        $bukuTamu->save();

        return redirect()->route('cetak-data', $id_registrasi);
    }

    public function cetakData($id_registrasi)
    {
        $result = BukuTamu::where('id_registrasi', $id_registrasi)->first();

        // $pdf = PDF::loadview('pages.cetak-data', compact('result'))->setPaper('a4', 'portrait');
        // return $pdf->stream();

        return view('pages.cetak-data', compact('result'));
    }
}
