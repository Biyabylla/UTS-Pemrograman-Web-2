<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container py-5">
    <div class="hasil-box">
        <h3>Nama Kelompok :</h3>
        <?php foreach ($kelompok1 as $nama): ?>
            + <?= esc($nama) ?><br>
        <?php endforeach; ?>

        <h3>Nama Kelompok 2 :</h3>
        <?php foreach ($kelompok2 as $nama): ?>
            + <?= esc($nama) ?><br>
        <?php endforeach; ?>

        <br>
        <a href="<?= base_url('portofolio') ?>" class="btn btn-custom">&larr; Kembali ke Portfolio</a>
    </div>
</div>
<?= $this->endSection() ?>
