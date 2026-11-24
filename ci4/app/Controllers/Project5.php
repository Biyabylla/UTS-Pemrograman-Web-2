<?php

namespace App\Controllers;

class Project5 extends BaseController
{
    public function array1(): string
    {
        $kelompok1   = ['Andi', 'Budi', 'Chika', 'David', 'Erna'];
        $kelompok2   = [];
        $kelompok2[] = 'Fera';
        $kelompok2[] = 'Gani';
        $kelompok2[] = 'Hery';
        $kelompok2[] = 'Intan';
        $kelompok2[] = 'Jaka';

        return view('project5/array1', [
            'title'     => 'Array 1',
            'kelompok1' => $kelompok1,
            'kelompok2' => $kelompok2,
        ]);
    }

    public function array2(): string
    {
        $array1 = ['Arman', 'Bayu', 'Feri'];
        $awal   = $array1;

        array_push($array1, 'Herni', 'Gita', 'Dewi');
        $setelahPush = $array1;

        array_shift($array1);
        $setelahShift = $array1;

        sort($array1);
        $setelahSort = $array1;

        return view('project5/array2', [
            'title'        => 'Array 2',
            'awal'         => $awal,
            'setelahPush'  => $setelahPush,
            'setelahShift' => $setelahShift,
            'setelahSort'  => $setelahSort,
        ]);
    }

    public function array3(): string
    {
        $pegawai = ['lina', 'arni', 'jona', 'punjabi', 'marcus', 'marlin'];
        $sebelum = $pegawai;
        sort($pegawai);

        return view('project5/array3', [
            'title'   => 'Array 3',
            'sebelum' => $sebelum,
            'sesudah' => $pegawai,
        ]);
    }

    public function tugas(): string
    {
        $mahasiswa = [
            'M001' => 'Andi',
            'M002' => 'Budi',
            'M003' => 'Chika',
            'M004' => 'Dewi',
            'M005' => 'Erna',
        ];

        $urutan = [
            '1. sort() - Urut Value ASC'                 => $this->urut($mahasiswa, 'sort'),
            '2. rsort() - Urut Value DESC'               => $this->urut($mahasiswa, 'rsort'),
            '3. asort() - Urut Value ASC (Key tetap)'    => $this->urut($mahasiswa, 'asort'),
            '4. arsort() - Urut Value DESC (Key tetap)'  => $this->urut($mahasiswa, 'arsort'),
            '5. ksort() - Urut Key ASC'                  => $this->urut($mahasiswa, 'ksort'),
            '6. krsort() - Urut Key DESC'                => $this->urut($mahasiswa, 'krsort'),
        ];

        $data  = ['Andi', 'Budi', 'Chika', 'Dewi', 'Erna'];
        $data2 = ['Andi', 'Budi', 'Andi', 'Chika', 'Budi'];

        return view('project5/tugas', [
            'title'     => 'Tugas Array',
            'mahasiswa' => $mahasiswa,
            'urutan'    => $urutan,
            'data'      => $data,
            'reverse'   => array_reverse($data),
            'unique'    => array_unique($data2),
            'merge'     => array_merge($data, ['Feri', 'Gita']),
            'cari'      => array_search('Chika', $data),
            'slice'     => array_slice($data, 1, 3),
        ]);
    }

    /** Salin array lalu urutkan dengan fungsi sort bawaan PHP (sort, rsort, asort, dst.). */
    private function urut(array $arr, string $fungsi): array
    {
        $fungsi($arr);

        return $arr;
    }
}
