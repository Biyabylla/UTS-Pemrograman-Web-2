<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container py-5" style="max-width: 720px;">
    <div class="hasil-box">
        <h2>FORM BIODATA</h2>

        <?php if (! empty($errors)): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php foreach ($errors as $e): ?>
                        <li><?= esc($e) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('project6/simpan') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="<?= esc(old('nama')) ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat" class="form-control" value="<?= esc(old('tempat')) ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tgl" class="form-control" value="<?= esc(old('tgl')) ?>">
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Jenis Kelamin</label>
                <?php foreach ($jk as $i => $opsi): ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" id="jk<?= $i ?>"
                               value="<?= esc($opsi) ?>" <?= old('jk') === $opsi ? 'checked' : '' ?>>
                        <label class="form-check-label" for="jk<?= $i ?>"><?= esc($opsi) ?></label>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" rows="4"><?= esc(old('alamat')) ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Agama</label>
                <select name="agama" class="form-select">
                    <option value="">-- Pilih Agama --</option>
                    <?php foreach ($agama as $opsi): ?>
                        <option value="<?= esc($opsi) ?>" <?= old('agama') === $opsi ? 'selected' : '' ?>><?= esc($opsi) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Hobi</label>
                <?php $hobiLama = old('hobi') ?? []; ?>
                <?php foreach ($hobi as $i => $opsi): ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="hobi[]" id="hobi<?= $i ?>"
                               value="<?= esc($opsi) ?>" <?= in_array($opsi, (array) $hobiLama, true) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="hobi<?= $i ?>"><?= esc($opsi) ?></label>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="mb-4">
                <label class="form-label">Masukkan Foto <small class="text-muted">(JPG/PNG/WEBP, maks. 2 MB)</small></label>
                <input type="file" name="file" class="form-control" accept="image/jpeg,image/png,image/webp">
            </div>

            <button type="submit" class="btn btn-custom">Kirim</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
