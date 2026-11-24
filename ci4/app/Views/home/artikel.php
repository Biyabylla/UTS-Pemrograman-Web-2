<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container py-5">
    <h1 class="text-center mb-5">Artikel</h1>

    <div class="row g-4">
        <?php foreach ($articles as $article): ?>
            <div class="col-md-4">
                <article class="card h-100">
                    <div class="card-body p-4">
                        <small class="text-muted"><?= esc($article['tanggal']) ?></small>
                        <h3 class="card-title mt-3"><?= esc($article['judul']) ?></h3>
                        <p class="card-text"><?= esc($article['ringkasan']) ?></p>
                    </div>
                </article>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>
