<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home/index', [
            'title'    => 'Home',
            'projects' => [
                [
                    'judul'     => 'Web Perdana Saya',
                    'deskripsi' => 'Pada project pertama ini, saya mengembangkan sebuah website katalog yang menampilkan daftar menu kuliner dari suatu Food Court.',
                    'img'       => 'img/foodcourt_outdoor.jpg',
                    'link'      => 'Project1/prak_3.html',
                ],
                [
                    'judul'     => 'Portfolio, Profile, Biya Florist',
                    'deskripsi' => 'Website ini berisi informasi biodata diri dan portofolio tugas Pemrograman Web saya sekaligus profil singkat mengenai Biya Florist.',
                    'img'       => 'img/Biya_1.jpeg',
                    'link'      => 'Project2/prak_1.html',
                ],
                [
                    'judul'     => 'Form Biodata',
                    'deskripsi' => 'Form biodata ini berbasis web yang dibuat menggunakan HTML dan PHP.',
                    'img'       => 'img/binary.jpg',
                    'link'      => 'project6/biodata',
                ],
            ],
        ]);
    }

    public function about(): string
    {
        return view('home/about', ['title' => 'About']);
    }

    public function profile(): string
    {
        return view('home/profile', [
            'title' => 'Profile',
            'nama' => 'Nabila Putri Ardina',
            'nim' => '202457201055',
            'prodi' => 'Sistem Informasi',
            'semester' => 'IV',
            'kampus' => 'Institut Teknologi Mojosari',
        ]);
    }

    public function artikel(): string
    {
        return view('home/artikel', [
            'title' => 'Artikel',
            'articles' => [
                [
                    'judul' => 'Belajar CodeIgniter 4 untuk Pengembangan Web',
                    'ringkasan' => 'CodeIgniter 4 membantu pengembangan web menjadi lebih terstruktur melalui MVC, routing, controller, view, dan layout.',
                    'tanggal' => '22 November 2026',
                ],
                [
                    'judul' => 'Manfaat Membuat Portofolio sebagai Mahasiswa',
                    'ringkasan' => 'Portofolio dapat menjadi bukti pembelajaran dan dokumentasi hasil proyek selama menempuh pendidikan di bidang teknologi.',
                    'tanggal' => '22 November 2026',
                ],
                [
                    'judul' => 'Dasar Pemrograman Web yang Perlu Dipahami',
                    'ringkasan' => 'Pemahaman HTML, CSS, PHP, database, dan framework menjadi dasar untuk membangun aplikasi web yang dinamis dan mudah dipelihara.',
                    'tanggal' => '22 November 2026',
                ],
            ],
        ]);
    }

    public function portofolio(): string
    {
        // Project1 & 2 = HTML statis di public/, Project3-6 = route CI4
        return view('home/portofolio', [
            'title'  => 'Portofolio',
            'groups' => [
                'Project 1' => [
                    '5 Bentuk Tabel'     => 'Project1/index.html',
                    'Biodata Nabila'     => 'Project1/prak_1.html',
                    'Resep Telur Goreng' => 'Project1/prak_2.html',
                    'Food Court'         => 'Project1/prak_3.html',
                ],
                'Project 2' => [
                    'Website HTML'       => 'Project2/prak_1.html',
                    'Food Court Terbaru' => 'Project2/prak_2.html',
                ],
                'Project 3' => [
                    'Test PHP'                     => 'project3/first',
                    'Biodata Diri Menggunakan PHP' => 'project3/biodata',
                    'Uji Kompotensi'               => 'project3/ketiga',
                    'Tugas'                        => 'project3/tugas',
                ],
                'Project 4' => [
                    'Perulangan'    => 'project4/perulangan',
                    'Tugas Pertama' => 'project4/tugas_1',
                    'Tugas Kedua'   => 'project4/tugas_2',
                    'Tugas Ketiga'  => 'project4/tugas_3',
                ],
                'Project 5' => [
                    'Array 1'     => 'project5/array1',
                    'Array 2'     => 'project5/array2',
                    'Array 3'     => 'project5/array3',
                    'Tugas Array' => 'project5/tugas',
                ],
                'Project 6' => [
                    'Biodata'     => 'project6/biodata',
                    'Form Upload' => 'project6/form_upload',
                    'Form Login'  => 'project6/login',
                ],
            ],
        ]);
    }
}
