<?php

namespace App\Controllers;

use App\Models\KategoriMasalahModel;

class Kategori extends BaseController
{
    public function index()
    {
        $model = new KategoriMasalahModel();

        $data = [
            'kategori' => $model->findAll()
        ];

        return view('kategori/index', $data);
    }

    public function tambah()
    {
        return view('kategori/tambah');
    }

    public function simpan()
    {
        $model = new KategoriMasalahModel();

        $model->insert([
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'tingkat'       => $this->request->getPost('tingkat')
        ]);

        return redirect()->to('/kategori')
            ->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $model = new KategoriMasalahModel();

        $data = [
            'kategori' => $model->find($id)
        ];

        return view('kategori/edit', $data);
    }

    public function update($id)
    {
        $model = new KategoriMasalahModel();

        $model->update($id, [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'tingkat'       => $this->request->getPost('tingkat')
        ]);

        return redirect()->to('/kategori')
            ->with('success', 'Kategori berhasil diubah.');
    }

    public function hapus($id)
    {
        $model = new KategoriMasalahModel();

        $model->delete($id);

        return redirect()->to('/kategori')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}