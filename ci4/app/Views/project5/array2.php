<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<?php
$tahap = [
    'Array awal ialah:'                                                                  => $awal,
    'Setelah ditambahkan "Herni, Gita & Dewi" menggunakan fungsi array_push():'          => $setelahPush,
    'Setelah bagian awal array dihapus menggunakan fungsi array_shift():'                => $setelahShift,
    'Dan setelah isi array diurutkan menggunakan fungsi sort():'                         => $setelahSort,
];
?>
<div class="container py-5">
    <div class="hasil-box">
        <?php foreach ($tahap as $keterangan => $isi): ?>
            <h3><?= esc($keterangan) ?></h3>
            <?php foreach ($isi as $i => $nama): ?>
                data ke-<?= $i ?> : <?= esc($nama) ?><br>
            <?php endforeach; ?>
        <?php endforeach; ?>

        <br>
        <a href="<?= base_url('portofolio') ?>" class="btn btn-custom">&larr; Kembali ke Portfolio</a>
    </div>
</div>
<?= $this->endSection() ?>
