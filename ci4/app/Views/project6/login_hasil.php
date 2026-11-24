<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container py-5" style="max-width: 520px;">
    <div class="hasil-box">
        <?php if ($berhasil): ?>
            <h2>LOGIN BERHASIL!</h2>
            Selamat datang, <b><?= esc($username) ?></b><br><br>
            <a href="<?= base_url('project6/biodata') ?>" class="btn btn-custom">Yuk, Isi Biodata!</a>
        <?php else: ?>
            <h2>LOGIN GAGAL!</h2>
            Username atau Password salah!<br><br>
            <a href="<?= base_url('project6/login') ?>" class="btn btn-custom">Coba Lagi</a>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection() ?>
