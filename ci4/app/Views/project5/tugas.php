<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<?php
// Bantu cetak array berindeks: "Data ke-0 : Andi"
$cetakData = static function (array $arr): void {
    foreach ($arr as $i => $v) {
        echo 'Data ke-' . $i . ' : ' . esc($v) . '<br>';
    }
};
?>
<div class="container py-5">
    <div class="hasil-box">
        <h2>1. Array Asosiatif dan Fungsi Pengurutan</h2>

        <h3>Array Asosiatif Awal</h3>
        <?php foreach ($mahasiswa as $nim => $nama): ?>
            <?= esc($nim) ?> : <?= esc($nama) ?><br>
        <?php endforeach; ?>

        <?php foreach ($urutan as $judul => $hasil): ?>
            <h3><?= esc($judul) ?></h3>
            <?php foreach ($hasil as $key => $nama): ?>
                <?= esc($key) ?> : <?= esc($nama) ?><br>
            <?php endforeach; ?>
        <?php endforeach; ?>

        <hr>
        <h2>2. Implementasi 5 Fungsi Array</h2>

        <h3>Array Awal</h3>
        <?php $cetakData($data); ?>

        <h3>1. array_reverse()</h3>
        <?php $cetakData($reverse); ?>

        <h3>2. array_unique()</h3>
        <?php foreach ($unique as $key => $nama): ?>
            Data ke-<?= $key ?> : <?= esc($nama) ?><br>
        <?php endforeach; ?>

        <h3>3. array_merge()</h3>
        <?php $cetakData($merge); ?>

        <h3>4. array_search()</h3>
        Chika ditemukan pada index ke-<?= esc($cari) ?><br>

        <h3>5. array_slice()</h3>
        <?php $cetakData($slice); ?>

        <br>
        <a href="<?= base_url('portofolio') ?>" class="btn btn-custom">&larr; Kembali ke Portfolio</a>
    </div>
</div>
<?= $this->endSection() ?>
