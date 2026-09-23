<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'BK Sekolah' ?></title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 240px;
            height: 100vh;
            background: #1e3a8a;
            color: white;
            padding: 25px 15px;
        }

        .logo {
            text-align: center;
            margin-bottom: 35px;
        }

        .logo h2 {
            margin: 0;
        }

        .logo p {
            margin: 5px 0 0;
            font-size: 13px;
            opacity: 0.8;
        }

        .menu a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 13px 15px;
            margin-bottom: 7px;
            border-radius: 7px;
        }

        .menu a:hover {
            background: #2563eb;
        }

        .logout {
            margin-top: 30px;
            background: #dc2626;
        }

        .content {
            margin-left: 240px;
            min-height: 100vh;
        }

        .topbar {
            background: white;
            padding: 20px 30px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .topbar h1 {
            margin: 0;
            font-size: 24px;
        }

        .main {
            padding: 30px;
        }

        @media (max-width: 700px) {
            .sidebar {
                width: 190px;
            }

            .content {
                margin-left: 190px;
            }
        }
    </style>
</head>

<body>

    <aside class="sidebar">

        <div class="logo">
            <h2>BK SEKOLAH</h2>
            <p>Sistem Bimbingan Konseling</p>
        </div>

        <div class="menu">

            <a href="<?= base_url('dashboard') ?>">
                 Dashboard
            </a>

            <a href="<?= base_url('siswa') ?>">
                 Data Siswa
            </a>

            <a href="#">
                 Data Konseling
            </a>

            <a href="kategori">
                 Kategori Masalah
            </a>

            <a href="<?= base_url('logout') ?>" class="logout">
                 Logout
            </a>

        </div>

    </aside>


    <main class="content">

        <div class="topbar">
            <h1><?= $title ?? 'Dashboard' ?></h1>
        </div>

        <div class="main">
            <?= $this->renderSection('content') ?>
        </div>

    </main>

</body>
</html>