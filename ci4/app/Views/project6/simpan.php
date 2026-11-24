<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container py-5" style="max-width: 720px;">
    <div class="hasil-box">
        <h2>BIODATA</h2>
        <hr>

        <?php if ($foto): ?>
            File berhasil di-upload ke server pada folder <b><?= esc($foto) ?></b><br><br>
            <img src="<?= base_url($foto) ?>" alt="Foto" class="img-thumbnail mb-3" style="max-width: 220px;">
            <br>
        <?php endif; ?>

        Nama : <?= esc($nama) ?><br>
        Tempat : <?= esc($tempat) ?><br>
        Tanggal : <?= esc($tgl) ?><br>
        Jenis kelamin : <?= esc($jk) ?><br>
        Alamat : <?= esc($alamat) ?><br>
        Agama : <?= esc($agama) ?><br>
        Hobi : <br>
        <?php if (! empty($hobi)): ?>
            <?php foreach ((array) $hobi as $h): ?>
                - <?= esc($h) ?><br>
            <?php endforeach; ?>
        <?php else: ?>
            Tidak ada hobi dipilih<br>
        <?php endif; ?>

        <br>
        <a href="<?= base_url('project6/biodata') ?>" class="btn btn-custom">&larr; Isi Lagi</a>
        <a href="<?= base_url('portofolio') ?>" class="btn btn-custom">Portfolio</a>
    </div>
</div>
<?= $this->endSection() ?>
