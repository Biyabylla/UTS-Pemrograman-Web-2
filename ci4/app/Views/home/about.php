<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container py-5">
    <div class="about-box">
        <div class="text-center">
            <img src="<?= base_url('img/biya_profile.jpeg') ?>" alt="Foto Profil" class="profile-img">
            <h1 class="mt-4">About Me</h1>
        </div>

        <div class="mt-4">
            <h4 class="bio-title">Kenal lebih dekat yuk!</h4>
            <p>
                Halo, perkenalkan. Saya <strong>Nabila Putri Ardina</strong>, atau lebih akrab dipanggil
                <strong>Biya</strong>.
                Saya lahir di Tenggarong pada 08 Desember 2005. dan saat ini sedang
                menempuh pendidikan
                di Institut Teknologi Mojosari, Program Studi Sistem Informasi semester 4. Saya memiliki minat dalam bidang teknologi,
                pengembangan website,
                desain antarmuka (UI), serta pengolahan database.
            </p>

            <p>
                Selama masa perkuliahan, saya mengerjakan berbagai tugas dan project menggunakan HTML, CSS,
                Bootstrap,
                PHP, Java NetBeans, C++, dan teknologi lainnya. Melalui project-project tersebut, saya mengembangkan
                kemampuan
                pemrograman, analisis sistem, serta pemecahan masalah untuk menghasilkan solusi yang efektif.
            </p>

            <p>
                Saya membuat website portofolio ini sebagai media untuk memperkenalkan diri, menampilkan biodata,
                dan membagikan hasil pembelajaran serta project yang telah saya kerjakan selama perkuliahan.
                Melalui portfolio ini, saya ingin menunjukkan kemampuan yang terus saya bangun
                di bidang teknologi informasi.
            </p>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
