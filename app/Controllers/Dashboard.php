<?php

namespace App\Controllers;

use App\Models\SiswaModel;
use App\Models\KonselingModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $siswaModel = new SiswaModel();
        $konselingModel = new KonselingModel();

        $data = [
            'totalSiswa'       => $siswaModel->countAll(),
            'totalKonseling'   => $konselingModel->countAll(),
            'konselingProses'  => $konselingModel->where('status', 'Proses')->countAllResults(),
            'konselingSelesai' => $konselingModel->where('status', 'Selesai')->countAllResults(),
        ];

        return view('dashboard', $data);
    }
}