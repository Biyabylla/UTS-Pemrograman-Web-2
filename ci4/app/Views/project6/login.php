<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container py-5" style="max-width: 520px;">
    <div class="hasil-box">
        <h2>FORM LOGIN</h2>
        <form action="<?= base_url('project6/cek_login') ?>" method="POST">
            <?= csrf_field() ?>
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control mb-3" required>

            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control mb-3" required>

            <button type="submit" class="btn btn-custom">Login</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
