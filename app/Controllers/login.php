<?php

namespace App\Controllers;

use App\Models\GuruBkModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function proses()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $model = new GuruBkModel();

        $guru = $model
            ->where('username', $username)
            ->first();

        if ($guru && $password === $guru['password']) {

            session()->set([
                'id_guru_bk' => $guru['id_guru_bk'],
                'nama_guru'  => $guru['nama_guru'],
                'username'   => $guru['username'],
                'logged_in'  => true
            ]);

            return redirect()->to('/dashboard');
        }

        return redirect()->to('/login')
            ->with('error', 'Username atau password salah.');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}