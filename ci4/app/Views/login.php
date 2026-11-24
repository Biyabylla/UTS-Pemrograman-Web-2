<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | webiyaa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #ffe4ec, #e8f0ff, #fff0f5);
            background-size: 400% 400%;
            animation: gradientMove 10s ease infinite;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border-radius: 25px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
            padding: 35px;
        }
        h2 { font-family: 'Playfair Display', serif; color: #c96b8b; font-weight: bold; text-align: center; margin-bottom: 25px; }
        .form-control { border-radius: 12px; padding: 10px; }
        .btn-login { background: #c96b8b; color: white; border: none; border-radius: 25px; padding: 10px; width: 100%; font-weight: 600; transition: 0.3s; }
        .btn-login:hover { background: #b85b7b; }
        .text-small { text-align: center; margin-top: 15px; font-size: 14px; color: #666; }
    </style>
</head>

<body>

    <div class="login-card">
        <h2>FORM LOGIN</h2>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger py-2"><?= esc(session()->getFlashdata('error')) ?></div>
        <?php endif; ?>

        <form action="<?= base_url('login/proses') ?>" method="POST">
            <?= csrf_field() ?>

            <label>Username</label>
            <input type="text" name="username" class="form-control mb-3" required>

            <label>Password</label>
            <input type="password" name="password" class="form-control mb-3" required>

            <button type="submit" class="btn btn-login">Login</button>
        </form>

        <div class="text-small">
            Welcome to <b>webiyaa</b>
        </div>
    </div>

</body>
</html>
