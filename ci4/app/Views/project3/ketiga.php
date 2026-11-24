<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container py-5">
    <div class="hasil-box">
        <h2>Uji Kompetensi</h2>
        Nilai variabel a adalah = <?= esc($a) ?><br>
        Nilai variabel b adalah = <?= esc($b) ?><br>
        Nilai variabel komentar adalah = <?= esc($komentar) ?><br>
        Hasil penjumlahan a dan b adalah = <?= esc($tambah) ?><br>
        Hasil pengurangan a dan b adalah = <?= esc($kurang) ?><br>
        Hasil perkalian a dan b adalah = <?= esc($kali) ?><br>
        Hasil pembagian a dan b adalah = <?= esc($bagi) ?><br>
        <p class="mt-3">
            ====================================<br>
            <?= esc($komentar) ?> di Lab <?= esc($nama) ?><br>Selamat Belajar Pemrograman Web!<br>
            ====================================
        </p>
        <a href="<?= base_url('portofolio') ?>" class="btn btn-custom">&larr; Kembali ke Portfolio</a>
    </div>
</div>
<?= $this->endSection() ?>
