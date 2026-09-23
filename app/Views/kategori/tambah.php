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
        max-width: 700px;
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
    .form-group select {
        width: 100%;
        padding: 11px 12px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        font-size: 14px;
        box-sizing: border-box;
    }

    .form-group input:focus,
    .form-group select:focus {
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
    <h1>Tambah Kategori Masalah</h1>
</div>

<div class="form-box">

    <form action="<?= base_url('kategori/simpan') ?>" method="post">

        <?= csrf_field() ?>

        <div class="form-group">
            <label for="nama_kategori">
                Nama Masalah
            </label>

            <input
                type="text"
                id="nama_kategori"
                name="nama_kategori"
                placeholder="Contoh: Masalah Belajar"
                required
            >
        </div>

        <div class="form-group">
            <label for="tingkat">
                Tingkat Masalah
            </label>

            <select id="tingkat" name="tingkat" required>
                <option value="">-- Pilih Tingkat --</option>
                <option value="Ringan">Ringan</option>
                <option value="Sedang">Sedang</option>
                <option value="Berat">Berat</option>
            </select>
        </div>

        <div class="button-group">

            <button type="submit" class="btn btn-simpan">
                Simpan
            </button>

            <a href="<?= base_url('kategori') ?>" class="btn btn-kembali">
                Kembali
            </a>

        </div>

    </form>

</div>

<?= $this->endSection() ?>