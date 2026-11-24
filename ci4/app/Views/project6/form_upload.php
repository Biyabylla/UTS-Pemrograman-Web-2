<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container py-5" style="max-width: 520px;">
    <div class="hasil-box">
        <h2>UPLOAD FILE</h2>

        <?php if (! empty($errors)): ?>
            <div class="alert alert-danger py-2">
                <?php foreach ($errors as $e): ?><?= esc($e) ?><br><?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('project6/proses_upload') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <label class="form-label">Pilih File</label>
            <input type="file" name="file" class="form-control mb-3" accept="image/jpeg,image/png,image/webp">
            <button type="submit" class="btn btn-custom">Upload</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
