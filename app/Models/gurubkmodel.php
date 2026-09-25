<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruBkModel extends Model
{
    protected $table            = 'guru_bk';
    protected $primaryKey       = 'id_guru_bk';
    protected $allowedFields    = [
        'nama_guru',
        'username',
        'password'
    ];
}