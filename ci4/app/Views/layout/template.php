<?php
// Segmen pertama URL dipakai untuk menandai menu yang aktif
$seg         = explode('/', uri_string())[0];
$isPortfolio = ($seg === 'portofolio' || str_starts_with($seg, 'project'));
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <title><?= esc($title ?? 'Home') ?> | webiyaa</title>

    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #ffe4ec, #e8f0ff, #fff0f5);
            background-size: 400% 400%;
            animation: gradientMove 10s ease infinite;
            min-height: 100vh;
        }
        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Navbar */
        .custom-navbar { background: #000000 !important; padding: 10px 0; width: 100%; }
        .brand-wm { font-family: 'Playfair Display', serif; font-size: 28px; font-weight: bold; color: #fff; text-decoration: none; letter-spacing: 1px; }
        .brand-wm:hover { color: #c96b8b; }
        .navbar-nav { gap: 3px; }
        .nav-link { font-size: 17px; font-weight: 600; color: #fff !important; padding: 5px 10px !important; }
        .nav-link:hover, .active-page { color: #c96b8b !important; }
        .navbar-toggler { border-color: rgba(255, 255, 255, 0.5); }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        /* Umum */
        h1, h2 { color: #c96b8b; font-family: 'Playfair Display', serif; font-weight: bold; }
        .lead { max-width: 850px; margin: auto; color: #555; }
        .btn-custom { background: #c96b8b; color: white; border-radius: 25px; border: none; padding: 10px 18px; }
        .btn-custom:hover { background: #b85b7b; color: white; }

        /* Index */
        .foto-carousel { width: 100%; height: 480px; object-fit: cover; }
        .card { border: none; border-radius: 25px; overflow: hidden; transition: 0.3s; background: rgba(255,255,255,0.85); backdrop-filter: blur(10px); box-shadow: 0 12px 30px rgba(0,0,0,0.12); }
        .card:hover { transform: translateY(-5px); }
        .card-img-top { height: 250px; object-fit: cover; }
        .card-title { color: #c96b8b; font-weight: bold; }

        /* About */
        .about-box { background: rgba(255,255,255,0.85); backdrop-filter: blur(10px); border-radius: 25px; padding: 40px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); }
        .profile-img { width: 220px; height: 220px; border-radius: 50%; object-fit: cover; border: 5px solid #ffc0cb; }
        .bio-title { color: #c96b8b; font-weight: bold; }
        .about-box p { color: #555; line-height: 1.8; text-align: justify; }

        /* Portofolio */
        .card-custom { min-height: 250px; background: rgba(255,255,255,0.85); backdrop-filter: blur(10px); border-radius: 25px; padding: 25px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); transition: 0.3s; }
        .card-custom:hover { transform: translateY(-5px); }
        .card-custom h3 { text-align: center; color: #c96b8b; font-weight: bold; margin-bottom: 20px; }
        .card-custom ul { padding-left: 20px; }
        .card-custom li { margin-bottom: 10px; }
        .project-link { text-decoration: none; color: #555; transition: 0.2s; }
        .project-link:hover { color: #c96b8b; }

        /* Halaman hasil Project 3-6 */
        .hasil-box { background: rgba(255,255,255,0.85); backdrop-filter: blur(10px); border-radius: 25px; padding: 35px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); }
        .hasil-box h3 { color: #c96b8b; font-size: 1.15rem; font-weight: bold; margin-top: 1.2rem; }
        .hasil-box .form-control, .hasil-box .form-select { border-radius: 12px; }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="brand-wm" href="<?= base_url('/') ?>">webiyaa</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= $seg === '' ? 'active-page' : '' ?>" href="<?= base_url('/') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $seg === 'profile' ? 'active-page' : '' ?>" href="<?= base_url('profile') ?>">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $isPortfolio ? 'active-page' : '' ?>" href="<?= base_url('portofolio') ?>">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $seg === 'about' ? 'active-page' : '' ?>" href="<?= base_url('about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $seg === 'artikel' ? 'active-page' : '' ?>" href="<?= base_url('artikel') ?>">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('logout') ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
