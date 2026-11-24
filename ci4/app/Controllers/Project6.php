<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Files\UploadedFile;

class Project6 extends BaseController
{
    // Kredensial dari Project6/cek_login.php lama (latihan login terpisah)
    private const USERNAME = 'admin';
    private const PASSWORD = '12345';

    private const AGAMA = ['Islam', 'Kristen Protestan', 'Katolik', 'Hindu', 'Budha'];
    private const JK    = ['Laki-laki', 'Perempuan', 'Intersex'];
    private const HOBI  = ['Berlari', 'Bersepeda', 'Berenang'];

    /* ---------------- Login latihan ---------------- */

    public function login(): string
    {
        return view('project6/login', ['title' => 'Form Login']);
    }

    public function cekLogin(): string
    {
        $username = (string) $this->request->getPost('username');
        $password = (string) $this->request->getPost('password');

        return view('project6/login_hasil', [
            'title'    => 'Hasil Login',
            'berhasil' => ($username === self::USERNAME && $password === self::PASSWORD),
            'username' => $username,
        ]);
    }

    /* ---------------- Biodata ---------------- */

    public function biodata(): string
    {
        return view('project6/biodata', [
            'title'  => 'Form Biodata',
            'agama'  => self::AGAMA,
            'jk'     => self::JK,
            'hobi'   => self::HOBI,
            'errors' => session()->getFlashdata('errors') ?? [],
        ]);
    }

    public function simpan()
    {
        $rules = [
            'nama'    => 'required|min_length[3]|max_length[100]',
            'tempat'  => 'required|max_length[100]',
            'tgl'     => 'required|valid_date[Y-m-d]',
            'jk'      => 'required|in_list[' . implode(',', self::JK) . ']',
            'alamat'  => 'required|max_length[255]',
            'agama'   => 'required|in_list[' . implode(',', self::AGAMA) . ']',
            'hobi.*'  => 'permit_empty|in_list[' . implode(',', self::HOBI) . ']',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        [$foto, $errorFoto] = $this->simpanFoto($this->request->getFile('file'));

        if ($errorFoto !== null) {
            return redirect()->back()->withInput()->with('errors', ['file' => $errorFoto]);
        }

        return view('project6/simpan', [
            'title'  => 'Hasil Biodata',
            'nama'   => $this->request->getPost('nama'),
            'tempat' => $this->request->getPost('tempat'),
            'tgl'    => $this->request->getPost('tgl'),
            'jk'     => $this->request->getPost('jk'),
            'alamat' => $this->request->getPost('alamat'),
            'agama'  => $this->request->getPost('agama'),
            'hobi'   => $this->request->getPost('hobi') ?? [],
            'foto'   => $foto,
        ]);
    }

    /* ---------------- Upload file ---------------- */

    public function formUpload(): string
    {
        return view('project6/form_upload', [
            'title'  => 'Form Upload File',
            'errors' => session()->getFlashdata('errors') ?? [],
        ]);
    }

    public function prosesUpload()
    {
        $file = $this->request->getFile('file');

        if (! $file || $file->getError() === UPLOAD_ERR_NO_FILE) {
            return redirect()->back()->with('errors', ['file' => 'Pilih file terlebih dahulu.']);
        }

        [$path, $error] = $this->simpanFoto($file);

        if ($error !== null) {
            return redirect()->back()->with('errors', ['file' => $error]);
        }

        return view('project6/upload_hasil', [
            'title' => 'Hasil Upload',
            'path'  => $path,
        ]);
    }

    /**
     * Simpan gambar ke public/uploads/biodata dengan nama acak.
     * Mengembalikan [path|null, pesanError|null]. Tanpa file = [null, null].
     */
    private function simpanFoto(?UploadedFile $file): array
    {
        if ($file === null || $file->getError() === UPLOAD_ERR_NO_FILE) {
            return [null, null];
        }

        if (! $file->isValid()) {
            return [null, 'File gagal diunggah: ' . $file->getErrorString()];
        }

        if ($file->getSize() > 2 * 1024 * 1024) {
            return [null, 'Ukuran file maksimal 2 MB.'];
        }

        if (! in_array($file->getMimeType(), ['image/jpeg', 'image/png', 'image/webp'], true)) {
            return [null, 'Hanya file gambar JPG, PNG, atau WEBP yang diperbolehkan.'];
        }

        $namaBaru = $file->getRandomName();
        $file->move(FCPATH . 'uploads/biodata', $namaBaru);

        return ['uploads/biodata/' . $namaBaru, null];
    }
}
