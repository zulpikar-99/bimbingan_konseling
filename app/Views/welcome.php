<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BK Sekolah</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #312e81, #4338ca, #6366f1);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .welcome {
            text-align: center;
            width: 90%;
            max-width: 700px;
        }

        .logo {
            width: 100px;
            height: 100px;
            background: white;
            color: #4338ca;
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 42px;
            font-weight: bold;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .subtitle {
            font-size: 18px;
            opacity: 0.9;
            line-height: 1.6;
            margin-bottom: 35px;
        }

        .btn-masuk {
            display: inline-block;
            background: white;
            color: #4338ca;
            padding: 14px 30px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-masuk:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        .footer {
            margin-top: 45px;
            font-size: 13px;
            opacity: 0.7;
        }
    </style>
</head>

<body>

    <div class="welcome">

        <div class="logo">
            BK
        </div>

        <h1>Sistem Bimbingan Konseling</h1>

        <p class="subtitle">
            Selamat datang di Sistem Informasi Bimbingan Konseling Sekolah.
            Kelola data siswa, prestasi, pelanggaran, dan konseling
            dengan lebih mudah dan terorganisir.
        </p>

        <a href="<?= base_url('login') ?>" class="btn-masuk">
            Masuk ke Sistem →
        </a>

        <div class="footer">
            © <?= date('Y') ?> BK Sekolah
        </div>

    </div>

</body>
</html>