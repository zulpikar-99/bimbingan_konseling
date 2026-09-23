<?php

namespace App\Controllers;

use App\Models\SiswaModel;
use App\Models\KelasModel;

class Siswa extends BaseController
{
    public function index()
    {
        $siswaModel = new SiswaModel();

        $data = [
            'siswa' => $siswaModel
                ->select('siswa.*, kelas.nama_kelas')
                ->join('kelas', 'kelas.id_kelas = siswa.id_kelas')
                ->findAll()
        ];

        return view('siswa/index', $data);
    }

    public function tambah()
    {
        $kelasModel = new KelasModel();

        $data = [
            'kelas' => $kelasModel->findAll()
        ];

        return view('siswa/tambah', $data);
    }

    public function simpan()
    {
        $siswaModel = new SiswaModel();

        $siswaModel->insert([
            'nis'        => $this->request->getPost('nis'),
            'nama_siswa' => $this->request->getPost('nama_siswa'),
            'id_kelas'   => $this->request->getPost('id_kelas')
        ]);

        return redirect()->to('/siswa')
            ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $siswaModel = new SiswaModel();
        $kelasModel = new KelasModel();

        $data = [
            'siswa' => $siswaModel->find($id),
            'kelas' => $kelasModel->findAll()
        ];

        return view('siswa/edit', $data);
    }

    public function update($id)
    {
        $siswaModel = new SiswaModel();

        $siswaModel->update($id, [
            'nis'        => $this->request->getPost('nis'),
            'nama_siswa' => $this->request->getPost('nama_siswa'),
            'id_kelas'   => $this->request->getPost('id_kelas')
        ]);

        return redirect()->to('/siswa')
            ->with('success', 'Data siswa berhasil diubah.');
    }

    public function hapus($id)
    {
        $siswaModel = new SiswaModel();

        $siswaModel->delete($id);

        return redirect()->to('/siswa')
            ->with('success', 'Data siswa berhasil dihapus.');
    }
}