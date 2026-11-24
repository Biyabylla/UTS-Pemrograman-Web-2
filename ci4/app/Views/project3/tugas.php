<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container py-5">
    <div class="hasil-box">
        <h2>Hasil Perhitungan</h2>

        <h3>1. Saldo Tabungan</h3>
        Saldo awal : Rp. <?= number_format($saldoAwal, 0, ',', '.') ?><br>
        Saldo akhir setelah <?= esc($bulan) ?> bulan : Rp. <?= number_format($saldoAkhir, 0, ',', '.') ?><br>

        <h3>2. Kerucut</h3>
        Jari-jari : <?= esc($r) ?><br>
        Garis pelukis : <?= esc($s) ?><br>
        Luas Alas : <?= number_format($luasAlas, 2) ?><br>
        Luas Permukaan : <?= number_format($luasPermukaan, 2) ?><br><br>

        <a href="<?= base_url('portofolio') ?>" class="btn btn-custom">&larr; Kembali ke Portfolio</a>
    </div>
</div>
<?= $this->endSection() ?>
