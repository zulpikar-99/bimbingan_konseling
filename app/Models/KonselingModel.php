<?php

namespace App\Models;

use CodeIgniter\Model;

class KonselingModel extends Model
{
    protected $table = 'konseling';
    protected $primaryKey = 'id_konseling';

    protected $allowedFields = [
        'id_siswa',
        'id_guru_bk',
        'id_kategori',
        'tanggal',
        'masalah',
        'hasil_konseling',
        'status'
    ];
}