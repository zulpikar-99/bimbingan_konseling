<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<style>
    .page-header {
        margin-bottom: 20px;
    }

    .page-header h1 {
        margin: 0;
        font-size: 24px;
    }

    .form-box {
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 3px 12px rgba(0,0,0,.08);
        max-width: 800px;
    }

    .form-group {
        margin-bottom: 18px;
    }

    .form-group label {
        display: block;
        margin-bottom: 7px;
        font-weight: 600;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 11px 12px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        font-size: 14px;
        box-sizing: border-box;
        font-family: inherit;
    }

    .form-group textarea {
        min-height: 120px;
        resize: vertical;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #2563eb;
    }

    .button-group {
        margin-top: 25px;
    }

    .btn {
        display: inline-block;
        padding: 10px 16px;
        border-radius: 6px;
        border: none;
        text-decoration: none;
        color: white;
        cursor: pointer;
        font-size: 14px;
    }

    .btn-simpan {
        background: #16a34a;
    }

    .btn-kembali {
        background: #64748b;
        margin-left: 8px;
    }
</style>

<div class="page-header">
    <h1>Tambah Data Konseling</h1>
</div>

<div class="form-box">

    <form action="<?= base_url('konseling/simpan') ?>" method="post">

        <?= csrf_field() ?>

        <div class="form-group">
            <label for="id_siswa">Siswa</label>

            <select id="id_siswa" name="id_siswa" required>
                <option value="">-- Pilih Siswa --</option>

                <?php foreach ($siswa as $row) : ?>
                    <option value="<?= $row['id_siswa'] ?>">
                        <?= esc($row['nis']) ?> -
                        <?= esc($row['nama_siswa']) ?>
                    </option>
                <?php endforeach; ?>

            </select>
        </div>

        <div class="form-group">
            <label for="id_kategori">Kategori Masalah</label>

            <select id="id_kategori" name="id_kategori" required>
                <option value="">-- Pilih Kategori --</option>

                <?php foreach ($kategori as $row) : ?>
                    <option value="<?= $row['id_kategori'] ?>">
                        <?= esc($row['nama_kategori']) ?>
                        (<?= esc($row['tingkat']) ?>)
                    </option>
                <?php endforeach; ?>

            </select>
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal Konseling</label>

            <input
                type="datetime-local"
                id="tanggal"
                name="tanggal"
                required
            >
        </div>

        <div class="form-group">
            <label for="masalah">Masalah</label>

            <textarea
                id="masalah"
                name="masalah"
                placeholder="Tuliskan masalah yang dibahas dalam konseling..."
                required
            ></textarea>
        </div>

        <div class="form-group">
            <label for="hasil_konseling">Hasil Konseling</label>

            <textarea
                id="hasil_konseling"
                name="hasil_konseling"
                placeholder="Tuliskan hasil konseling..."
            ></textarea>
        </div>

        <div class="form-group">
            <label for="status">Status</label>

            <select id="status" name="status" required>
                <option value="Terbuka">Terbuka</option>
                <option value="Selesai">Selesai</option>
            </select>
        </div>

        <div class="button-group">

            <button type="submit" class="btn btn-simpan">
                Simpan
            </button>

            <a href="<?= base_url('konseling') ?>" class="btn btn-kembali">
                Kembali
            </a>

        </div>

    </form>

</div>

<?= $this->endSection() ?>