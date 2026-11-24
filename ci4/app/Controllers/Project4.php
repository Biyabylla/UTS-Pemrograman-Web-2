<?php

namespace App\Controllers;

class Project4 extends BaseController
{
    public function perulangan(): string
    {
        $baris = [];
        $bil   = 1;
        while ($bil <= 3) {
            $baris[] = "Nilai Sekarang adalah $bil";
            $bil++;
        }

        return view('project4/daftar', [
            'title' => 'Perulangan',
            'judul' => 'Perulangan (while)',
            'baris' => $baris,
        ]);
    }

    public function tugas1(): string
    {
        $baris = [];
        for ($i = 5; $i <= 100; $i++) {
            if ($i % 10 === 0) {
                $baris[] = (string) $i;
            }
        }

        return view('project4/daftar', [
            'title' => 'Tugas Pertama',
            'judul' => 'Kelipatan 10 dari 5 s/d 100',
            'baris' => $baris,
        ]);
    }

    public function tugas2(): string
    {
        $baris  = [];
        $jumlah = 0;
        for ($i = 2; $i <= 50; $i++) {
            $sebelum = $jumlah;
            $jumlah += $i;
            $baris[] = "$sebelum + $i = $jumlah";
        }

        return view('project4/daftar', [
            'title'  => 'Tugas Kedua',
            'judul'  => 'Penjumlahan bilangan 2 s/d 50',
            'baris'  => $baris,
            'ringkas' => "Hasil penjumlahan bilangan 2 s/d 50 adalah = $jumlah",
        ]);
    }

    public function tugas3(): string
    {
        $baris  = [];
        $banyak = 0;
        for ($i = 3; $i <= 127; $i++) {
            if ($i % 6 === 0) {
                $banyak++;
                $baris[] = "Bilangan kelipatan 6 = $i | Jumlah ditemukan = $banyak";
            }
        }

        return view('project4/daftar', [
            'title'   => 'Tugas Ketiga',
            'judul'   => 'Kelipatan 6 dari 3 s/d 127',
            'baris'   => $baris,
            'ringkas' => "Jumlah bilangan kelipatan 6 dari 3 s/d 127 adalah = $banyak",
        ]);
    }
}
