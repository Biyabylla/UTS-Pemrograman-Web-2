<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container py-5">
    <div class="about-box">
        <div class="row align-items-center g-4">
            <div class="col-md-4 text-center">
                <img src="<?= base_url('img/biya_profile.jpeg') ?>" alt="Foto <?= esc($nama) ?>" class="profile-img">
            </div>
            <div class="col-md-8">
                <h1>Profile</h1>
                <h3 class="bio-title mt-3"><?= esc($nama) ?></h3>
                <table class="table table-borderless mt-3">
                    <tr>
                        <th width="180">NIM</th>
                        <td><?= esc($nim) ?></td>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <td><?= esc($prodi) ?></td>
                    </tr>
                    <tr>
                        <th>Semester</th>
                        <td><?= esc($semester) ?></td>
                    </tr>
                    <tr>
                        <th>Kampus</th>
                        <td><?= esc($kampus) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
