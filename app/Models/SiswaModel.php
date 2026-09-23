<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';

    protected $allowedFields = [
        'nis',
        'nama_siswa',
        'id_kelas'
    ];
}