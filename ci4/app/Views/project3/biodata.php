<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container py-5">
    <div class="hasil-box">
        <h1>Biodata Nabila</h1>
        NIM : <?= esc($nim) ?><br>
        Nama : <?= esc($nama) ?><br>
        Alamat : <?= esc($alamat) ?><br>
        Nilai : <?= esc($nilai) ?><br><br>
        <a href="<?= base_url('portofolio') ?>" class="btn btn-custom">&larr; Kembali ke Portfolio</a>
    </div>
</div>
<?= $this->endSection() ?>
