<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid p-0">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('img/pict1.jpg') ?>" class="d-block w-100 foto-carousel" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('img/pict2.jpg') ?>" class="d-block w-100 foto-carousel" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('img/pict3.jpg') ?>" class="d-block w-100 foto-carousel" alt="Slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>

<div class="container">

    <div class="text-center mt-5">
        <h2>Selamat Datang di Website Saya</h2>
        <p class="lead mt-3">
            Website ini saya buat sebagai media untuk memperkenalkan diri,
            dan mendokumentasikan beberapa pengalaman membuat website yang saya jalani
            di matkul Pemrograman Web ini.
            Saya juga menggunakan website ini untuk menunjukkan kemampuan saya
            dalam bidang akademik maupun teknologi
            yang sudah saya buat selama proses belajar.
        </p>
    </div>

    <div class="mt-5 mb-5">
        <div class="row g-4">
            <?php foreach ($projects as $p): ?>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="<?= base_url($p['img']) ?>" class="card-img-top" alt="<?= esc($p['judul']) ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= esc($p['judul']) ?></h5>
                            <p class="card-text"><?= esc($p['deskripsi']) ?></p>
                            <a href="<?= base_url($p['link']) ?>" class="btn btn-custom">Kunjungi</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>

<?= $this->endSection() ?>
