<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'BK Sekolah' ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #4338ca;
            --primary-light: #6366f1;
            --primary-dark: #312e81;
            --bg: #f4f5fb;
            --card: #ffffff;
            --text: #1e1b3a;
            --text-muted: #6b7280;
            --danger: #ef4444;
            --danger-dark: #dc2626;
            --radius: 14px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
        }

        /* ===== Sidebar ===== */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 260px;
            height: 100vh;
            background: linear-gradient(180deg, var(--primary-dark) 0%, var(--primary) 60%, var(--primary-light) 100%);
            color: white;
            padding: 28px 18px;
            display: flex;
            flex-direction: column;
            box-shadow: 4px 0 20px rgba(67, 56, 202, 0.25);
            z-index: 10;
        }

        .logo {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.15);
        }

        .logo .icon {
            width: 56px;
            height: 56px;
            margin: 0 auto 10px;
            background: rgba(255,255,255,0.15);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(4px);
            overflow: hidden;
        }

        .logo .icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 6px;
        }

        .logo h2 {
            margin: 0;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .logo p {
            margin: 4px 0 0;
            font-size: 12px;
            opacity: 0.75;
        }

        .menu {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: rgba(255,255,255,0.85);
            text-decoration: none;
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 14.5px;
            font-weight: 500;
            transition: all 0.2s ease;
            position: relative;
        }

        .menu a svg {
            width: 19px;
            height: 19px;
            flex-shrink: 0;
        }

        .menu a:hover {
            background: rgba(255,255,255,0.12);
            color: #fff;
            transform: translateX(3px);
        }

        .menu a.active {
            background: rgba(255,255,255,0.95);
            color: var(--primary);
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .menu-divider {
            flex: 1;
        }

        .logout {
            background: rgba(239, 68, 68, 0.15) !important;
            color: #fecaca !important;
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        .logout:hover {
            background: var(--danger) !important;
            color: #fff !important;
        }

        /* ===== Content ===== */
        .content {
            margin-left: 260px;
            min-height: 100vh;
        }

        .topbar {
            background: #00ff44;
            padding: 20px 34px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 5;
        }

        .topbar h1 {
            margin: 0;
            font-size: 22px;
            font-weight: 700;
        }

        .topbar .subtitle {
            margin: 2px 0 0;
            font-size: 13px;
            color: var(--text-muted);
        }

        .topbar .user-chip {
            display: flex;
            align-items: center;
            gap: 10px;
            background: var(--bg);
            padding: 8px 14px 8px 8px;
            border-radius: 999px;
        }

        .topbar .avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 600;
            font-size: 13px;
        }

        .main {
            padding: 32px;
        }

        .card {
            background: var(--card);
            border-radius: var(--radius);
            padding: 24px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
        }

        @media (max-width: 700px) {
            .sidebar {
                width: 210px;
                padding: 20px 12px;
            }

            .content {
                margin-left: 210px;
            }

            .topbar {
                padding: 16px 20px;
            }

            .main {
                padding: 20px;
            }

            .topbar .user-chip span {
                display: none;
            }
        }
    </style>
</head>

<body>

    <aside class="sidebar">

        <div class="logo">
            <div class="icon">
                <img src="<?= base_url('assets/img/Nailong.jpg') ?>" alt="Logo Sekolah">
            </div>

            <h2>BK SEKOLAH</h2>
            <p>Sistem Bimbingan Konseling</p>
        </div>

        <div class="menu">

            <a href="<?= base_url('dashboard') ?>"
               class="<?= (uri_string() == 'dashboard') ? 'active' : '' ?>">

                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>

                Dashboard
            </a>


            <a href="<?= base_url('siswa') ?>"
               class="<?= (uri_string() == 'siswa') ? 'active' : '' ?>">

                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m6-4a4 4 0 100-8 4 4 0 000 8zm6 4a4 4 0 00-4-4H7a4 4 0 00-4 4v2h14v-2z"/>
                </svg>

                Data Siswa
            </a>


            <a href="<?= base_url('konseling') ?>"
               class="<?= (uri_string() == 'konseling') ? 'active' : '' ?>">

                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.86 9.86 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>

                Data Konseling
            </a>


            <a href="<?= base_url('kategori') ?>"
               class="<?= (uri_string() == 'kategori') ? 'active' : '' ?>">

                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 11V6a3 3 0 013-3z"/>
                </svg>

                Kategori Masalah
            </a>


            <div class="menu-divider"></div>


            <a href="<?= base_url('logout') ?>" class="logout">

                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>

                Logout
            </a>

        </div>

    </aside>


    <main class="content">

        <!-- ===== TOPBAR ===== -->

        <?php
            $currentPage = uri_string();

            if ($currentPage == 'dashboard') {

                $pageTitle = 'Dashboard';
                $pageSubtitle = 'Selamat datang kembali 👋';

            } elseif ($currentPage == 'siswa') {

                $pageTitle = 'Data Siswa';
                $pageSubtitle = 'Kelola data siswa sekolah';

            } elseif ($currentPage == 'konseling') {

                $pageTitle = 'Data Konseling';
                $pageSubtitle = 'Kelola data konseling siswa';

            } elseif ($currentPage == 'kategori') {

                $pageTitle = 'Kategori Masalah';
                $pageSubtitle = 'Kelola kategori masalah siswa';

            } else {

                $pageTitle = $title ?? 'BK Sekolah';
                $pageSubtitle = 'Sistem Bimbingan Konseling';

            }
        ?>

        <div class="topbar">

            <div>

                <h1><?= esc($pageTitle) ?></h1>

                <p class="subtitle">
                    <?= esc($pageSubtitle) ?>
                </p>

            </div>


            <div class="user-chip">

                <div class="avatar">
                    <?= strtoupper(substr(session()->get('nama') ?? 'A', 0, 1)) ?>
                </div>

                <span>
                    <?= session()->get('nama') ?? 'Admin' ?>
                </span>

            </div>

        </div>


        <div class="main">

            <?= $this->renderSection('content') ?>

        </div>

    </main>

</body>
</html>