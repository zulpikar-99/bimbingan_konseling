<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriMasalahModel extends Model
{
    protected $table = 'kategori_masalah';
    protected $primaryKey = 'id_kategori';

    protected $allowedFields = [
        'nama_kategori',
        'tingkat'
    ];
}