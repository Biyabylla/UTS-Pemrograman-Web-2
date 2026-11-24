<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container py-5" style="max-width: 520px;">
    <div class="hasil-box">
        <h2>UPLOAD BERHASIL</h2>
        File berhasil di-upload ke <b><?= esc($path) ?></b><br><br>
        <img src="<?= base_url($path) ?>" alt="Hasil upload" class="img-thumbnail mb-3" style="max-width: 220px;"><br>
        <a href="<?= base_url('project6/form_upload') ?>" class="btn btn-custom">Upload Lagi</a>
    </div>
</div>
<?= $this->endSection() ?>
