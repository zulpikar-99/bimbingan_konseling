<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<style>
    /* =========================
       DASHBOARD
    ========================== */

    .welcome-box {
        background: #ffffff;
        padding: 25px;
        border-radius: 10px;
        margin-bottom: 25px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
    }

    .welcome-box h2 {
        margin: 0 0 10px;
        font-size: 24px;
        font-weight: 600;
        color: #1e293b;
    }

    .welcome-box p {
        margin: 0;
        color: #64748b;
        font-size: 15px;
    }


    /* =========================
       CARD STATISTIK
    ========================== */

    .dashboard-cards {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .dashboard-card {
        background: #ffffff;
        border-radius: 10px;
        padding: 25px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
        transition: 0.2s;
    }

    .dashboard-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.10);
    }

    .dashboard-card h5 {
        margin: 0 0 12px;
        color: #64748b;
        font-size: 15px;
        font-weight: 500;
    }

    .dashboard-number {
        font-size: 32px;
        font-weight: bold;
        color: #2563eb;
    }

    .dashboard-icon {
        font-size: 30px;
        margin-bottom: 12px;
    }


    /* =========================
       CARD WARNA
    ========================== */

    .card-siswa .dashboard-number {
        color: #2563eb;
    }

    .card-konseling .dashboard-number {
        color: #7c3aed;
    }

    .card-proses .dashboard-number {
        color: #f59e0b;
    }

    .card-selesai .dashboard-number {
        color: #16a34a;
    }


    /* =========================
       QUICK MENU
    ========================== */

    .quick-menu {
        margin-top: 30px;
    }

    .quick-menu h3 {
        margin-bottom: 20px;
        color: #1e293b;
        font-size: 20px;
    }

    .quick-menu-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .quick-menu-item {
        display: block;
        background: #ffffff;
        padding: 20px;
        border-radius: 10px;
        text-decoration: none;
        color: #1e293b;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
        transition: 0.2s;
    }

    .quick-menu-item:hover {
        transform: translateY(-3px);
        text-decoration: none;
        color: #2563eb;
    }

    .quick-menu-icon {
        font-size: 28px;
        margin-bottom: 10px;
    }

    .quick-menu-title {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .quick-menu-description {
        font-size: 13px;
        color: #64748b;
    }


    /* =========================
       RESPONSIVE
    ========================== */

    @media (max-width: 1100px) {

        .dashboard-cards {
            grid-template-columns: repeat(2, 1fr);
        }

        .quick-menu-container {
            grid-template-columns: repeat(2, 1fr);
        }

    }


    @media (max-width: 600px) {

        .dashboard-cards {
            grid-template-columns: 1fr;
        }

        .quick-menu-container {
            grid-template-columns: 1fr;
        }

    }
</style>


<!-- =================================
     SELAMAT DATANG
================================== -->

<div class="welcome-box">

    <h2>
        Selamat Datang 👋
    </h2>

    <p>
        Halo,
        <strong>
            <?= esc(session()->get('nama_guru') ?? 'Guru BK') ?>
        </strong>
    </p>

</div>


<!-- =================================
     STATISTIK
================================== -->

<div class="dashboard-cards">


    <!-- TOTAL SISWA -->
    <div class="dashboard-card card-siswa">

        <div class="dashboard-icon">

        </div>

        <h5>
            Total Siswa
        </h5>

        <div class="dashboard-number">
            <?= $totalSiswa ?>
        </div>

    </div>


    <!-- TOTAL KONSELING -->
    <div class="dashboard-card card-konseling">

        <div class="dashboard-icon">

        </div>

        <h5>
            Total Konseling
        </h5>

        <div class="dashboard-number">
            <?= $totalKonseling ?>
        </div>

    </div>


    <!-- KONSELING PROSES -->
    <div class="dashboard-card card-proses">

        <div class="dashboard-icon">
            
        </div>

        <h5>
            Konseling Proses
        </h5>

        <div class="dashboard-number">
            <?= $konselingProses ?>
        </div>

    </div>


    <!-- KONSELING SELESAI -->
    <div class="dashboard-card card-selesai">

        <div class="dashboard-icon">
            
        </div>

        <h5>
            Konseling Selesai
        </h5>

        <div class="dashboard-number">
            <?= $konselingSelesai ?>
        </div>

    </div>

</div>


<!-- =================================
     MENU CEPAT
================================== -->

<div class="quick-menu">

    <h3>
        Menu Cepat
    </h3>


    <div class="quick-menu-container">


        <!-- DATA SISWA -->
        <a
            href="<?= base_url('siswa') ?>"
            class="quick-menu-item"
        >

            <div class="quick-menu-icon">
                
            </div>

            <div class="quick-menu-title">
                Data Siswa
            </div>

            <div class="quick-menu-description">
                Kelola data siswa sekolah.
            </div>

        </a>


        <!-- DATA KONSELING -->
        <a
            href="<?= base_url('konseling') ?>"
            class="quick-menu-item"
        >

            <div class="quick-menu-icon">
                
            </div>

            <div class="quick-menu-title">
                Data Konseling
            </div>

            <div class="quick-menu-description">
                Kelola data bimbingan dan konseling siswa.
            </div>

        </a>


        <!-- KATEGORI -->
        <a
            href="<?= base_url('kategori') ?>"
            class="quick-menu-item"
        >

            <div class="quick-menu-icon">
                
            </div>

            <div class="quick-menu-title">
                Kategori Masalah
            </div>

            <div class="quick-menu-description">
                Kelola kategori masalah siswa.
            </div>

        </a>


    </div>

</div>


<?= $this->endSection() ?>