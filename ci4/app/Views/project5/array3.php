<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container py-5">
    <div class="hasil-box">
        <h3>Sebelum diurutkan</h3>
        <?php foreach ($sebelum as $key => $nama): ?>
            <?= $key ?>: <?= esc($nama) ?><br>
        <?php endforeach; ?>

        <h3>Setelah diurutkan</h3>
        <?php foreach ($sesudah as $key => $nama): ?>
            <?= $key ?>: <?= esc($nama) ?><br>
        <?php endforeach; ?>

        <br>
        <a href="<?= base_url('portofolio') ?>" class="btn btn-custom">&larr; Kembali ke Portfolio</a>
    </div>
</div>
<?= $this->endSection() ?>
