<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container py-5">
    <div class="hasil-box">
        <h2><?= esc($judul) ?></h2>
        <?php foreach ($baris as $b): ?>
            <?= esc($b) ?><br>
        <?php endforeach; ?>

        <?php if (! empty($ringkas)): ?>
            <br><strong><?= esc($ringkas) ?></strong><br>
        <?php endif; ?>

        <br>
        <a href="<?= base_url('portofolio') ?>" class="btn btn-custom">&larr; Kembali ke Portfolio</a>
    </div>
</div>
<?= $this->endSection() ?>
