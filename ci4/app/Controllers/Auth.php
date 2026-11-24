<?php

namespace App\Controllers;

class Auth extends BaseController
{
    // Kredensial dari cek_login.php lama
    private const USERNAME = 'Nabila';
    private const PASSWORD = 'Ardina';

    public function index()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/');
        }

        return view('login');
    }

    public function proses()
    {
        $username = (string) $this->request->getPost('username');
        $password = (string) $this->request->getPost('password');

        if ($username === self::USERNAME && $password === self::PASSWORD) {
            session()->regenerate();
            session()->set([
                'logged_in' => true,
                'username'  => $username,
            ]);

            return redirect()->to('/');
        }

        return redirect()->to('/login')->with('error', 'Username atau Password salah!');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}
