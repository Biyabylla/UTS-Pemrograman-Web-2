<?php

namespace App\Controllers;

class Project3 extends BaseController
{
    public function first(): string
    {
        return view('project3/first', ['title' => 'Belajar PHP']);
    }

    public function biodata(): string
    {
        return view('project3/biodata', [
            'title'  => 'Biodata Nabila',
            'nim'    => '202457201055',
            'nama'   => 'Nabila Putri Ardina',
            'alamat' => 'Loceret, Nganjuk',
            'nilai'  => 100,
        ]);
    }

    public function ketiga(): string
    {
        $a = 5;
        $b = 2.5;

        return view('project3/ketiga', [
            'title'     => 'Uji Kompetensi',
            'a'         => $a,
            'b'         => $b,
            'komentar'  => 'Selamat Datang',
            'nama'      => 'ITM',
            'tambah'    => $a + $b,
            'kurang'    => $a - $b,
            'kali'      => $a * $b,
            'bagi'      => $a / $b,
        ]);
    }

    public function tugas(): string
    {
        $saldoAwal = 2000000;
        $bunga     = 0.03;
        $bulan     = 11;
        $r         = 7;
        $s         = 10;
        $luasAlas  = pi() * $r * $r;

        return view('project3/tugas', [
            'title'         => 'Tugas Project 3',
            'saldoAwal'     => $saldoAwal,
            'bulan'         => $bulan,
            'saldoAkhir'    => $saldoAwal + ($saldoAwal * $bunga * $bulan),
            'r'             => $r,
            's'             => $s,
            'luasAlas'      => $luasAlas,
            'luasPermukaan' => $luasAlas + (pi() * $r * $s),
        ]);
    }
}
