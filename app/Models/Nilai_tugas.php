<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai_tugas extends Model
{
    use HasFactory;
    protected $table = 'nilai_tugas';
    protected $fillable = [
        'tugas_id',
        'nilai',
        'komentar_guru',
        'siswa_id',
        'jadwal_id',
        'jawaban_siswa',
        'tanggal',
        'guru_id',
        'pertemuan'
    ];

    public function tugas()
    {
        return $this->belongsTo(Tugas::class, 'tugas_id', 'id');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_id', 'id');
    }
}
