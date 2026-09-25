<?php

namespace App\Controllers;

use App\Models\KonselingModel;
use App\Models\SiswaModel;
use App\Models\KategoriMasalahModel;
use App\Models\GuruBkModel;

class Konseling extends BaseController
{
    public function index()
    {
        $model = new KonselingModel();

        $data = [
            'konseling' => $model
                ->select('
                    konseling.*,
                    siswa.nis,
                    siswa.nama_siswa,
                    guru_bk.nama_guru,
                    kategori_masalah.nama_kategori
                ')
                ->join(
                    'siswa',
                    'siswa.id_siswa = konseling.id_siswa'
                )
                ->join(
                    'guru_bk',
                    'guru_bk.id_guru_bk = konseling.id_guru_bk'
                )
                ->join(
                    'kategori_masalah',
                    'kategori_masalah.id_kategori = konseling.id_kategori'
                )
                ->orderBy('konseling.tanggal', 'DESC')
                ->findAll()
        ];

        return view('konseling/index', $data);
    }

    public function tambah()
    {
        $siswaModel = new SiswaModel();
        $kategoriModel = new KategoriMasalahModel();

        $data = [
            'siswa'    => $siswaModel->findAll(),
            'kategori' => $kategoriModel->findAll()
        ];

        return view('konseling/tambah', $data);
    }

    public function simpan()
    {
        $model = new KonselingModel();
        $guruModel = new GuruBkModel();

        // Ambil username guru yang sedang login
        $username = session()->get('username');

        // Cari guru berdasarkan username
        $guru = $guruModel
            ->where('username', $username)
            ->first();

        // Pastikan guru ditemukan
        if (!$guru) {
            return redirect()->to('/login')
                ->with('error', 'Data guru BK tidak ditemukan. Silakan login kembali.');
        }

        // Simpan data konseling
        $model->insert([
            'id_siswa'        => $this->request->getPost('id_siswa'),
            'id_guru_bk'      => $guru['id_guru_bk'],
            'id_kategori'     => $this->request->getPost('id_kategori'),
            'tanggal'         => $this->request->getPost('tanggal'),
            'masalah'         => $this->request->getPost('masalah'),
            'hasil_konseling' => $this->request->getPost('hasil_konseling'),
            'status'          => $this->request->getPost('status')
        ]);

        return redirect()->to('/konseling')
            ->with('success', 'Data konseling berhasil ditambahkan.');
    }

    public function edit($id)
{
    $model = new KonselingModel();
    $siswaModel = new SiswaModel();
    $kategoriModel = new KategoriMasalahModel();

    $data = [
        'konseling' => $model->find($id),
        'siswa'     => $siswaModel->findAll(),
        'kategori'  => $kategoriModel->findAll()
    ];

    return view('konseling/edit', $data);
}

public function update($id)
{
    $model = new KonselingModel();

    $model->update($id, [
        'id_siswa'        => $this->request->getPost('id_siswa'),
        'id_kategori'     => $this->request->getPost('id_kategori'),
        'tanggal'         => $this->request->getPost('tanggal'),
        'masalah'         => $this->request->getPost('masalah'),
        'hasil_konseling' => $this->request->getPost('hasil_konseling'),
        'status'          => $this->request->getPost('status')
    ]);

    return redirect()->to('/konseling')
        ->with('success', 'Data konseling berhasil diubah.');
}

public function hapus($id)
{
    $model = new KonselingModel();

    $model->delete($id);

    return redirect()->to('/konseling')
        ->with('success', 'Data konseling berhasil dihapus.');
}
}