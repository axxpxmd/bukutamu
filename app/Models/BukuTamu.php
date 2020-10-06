<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    protected $table     = 'buku_tamu';
    protected $fillablel = ['id', 'id_registrasi', 'nama', 'jenis_paket', 'no_plat', 'foto', 'tanggal', 'jam', 'penerima', 'created_at', 'updated_at'];
    protected $dates     = ['tanggal'];
}
