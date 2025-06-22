<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports'; // Sesuaikan dengan nama tabel yang sebenarnya di database

    protected $primaryKey = 'id'; // Sesuaikan dengan primary key tabel

    protected $fillable = [
        'tanggal_laporan',
        'nik',
        'judul_laporan',
        'isi_laporan',
        'tanggal_kejadian',
        'lokasi_kejadian',
        'foto',
        'status',
    ];

    // Relasi dengan model User, sesuaikan jika diperlukan
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}