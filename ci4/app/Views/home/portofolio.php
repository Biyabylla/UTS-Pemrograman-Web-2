<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container py-5">
    <h1 class="text-center mb-5">Portofolio Nabila</h1>

    <div class="row g-4">
        <?php foreach ($groups as $judul => $items): ?>
            <div class="col-md-6">
                <div class="card-custom">
                    <h3><?= esc($judul) ?></h3>
                    <ul>
                        <?php foreach ($items as $label => $link): ?>
                            <li><a href="<?= base_url($link) ?>" class="project-link"><?= esc($label) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>
