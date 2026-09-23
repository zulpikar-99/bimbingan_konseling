<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<style>
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .page-header h1 {
        margin: 0;
        font-size: 24px;
    }

    .btn {
        display: inline-block;
        padding: 9px 14px;
        border-radius: 6px;
        text-decoration: none;
        color: white;
        font-size: 14px;
    }

    .btn-tambah {
        background: #16a34a;
    }

    .btn-edit {
        background: #2563eb;
    }

    .btn-hapus {
        background: #dc2626;
        margin-left: 5px;
    }

    .table-box {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 3px 12px rgba(0,0,0,.08);
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 13px 12px;
        border-bottom: 1px solid #e5e7eb;
        text-align: left;
    }

    th {
        background: #f8fafc;
    }

    tr:hover {
        background: #f8fafc;
    }

    .success {
        background: #dcfce7;
        color: #166534;
        padding: 12px 15px;
        border-radius: 6px;
        margin-bottom: 20px;
    }

    .badge {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
    }

    .ringan {
        background: #dcfce7;
        color: #166534;
    }

    .sedang {
        background: #fef3c7;
        color: #92400e;
    }

    .berat {
        background: #fee2e2;
        color: #991b1b;
    }

    .kosong {
        text-align: center;
        padding: 30px;
        color: #64748b;
    }
</style>

<div class="page-header">
    <h1>Kategori Masalah</h1>

    <a href="<?= base_url('kategori/tambah') ?>" class="btn btn-tambah">
        + Tambah Kategori
    </a>
</div>

<?php if (session()->getFlashdata('success')) : ?>
    <div class="success">
        <?= esc(session()->getFlashdata('success')) ?>
    </div>
<?php endif; ?>

<div class="table-box">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Tingkat</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

        <?php if (empty($kategori)) : ?>

            <tr>
                <td colspan="4" class="kosong">
                    Belum ada kategori masalah.
                </td>
            </tr>

        <?php else : ?>

            <?php $no = 1; ?>

            <?php foreach ($kategori as $row) : ?>

                <tr>
                    <td><?= $no++ ?></td>

                    <td>
                        <?= esc($row['nama_kategori']) ?>
                    </td>

                    <td>
                        <?php
                        $classTingkat = strtolower($row['tingkat']);
                        ?>

                        <span class="badge <?= $classTingkat ?>">
                            <?= esc($row['tingkat']) ?>
                        </span>
                    </td>

                    <td>
                        <a
                            href="<?= base_url('kategori/edit/' . $row['id_kategori']) ?>"
                            class="btn btn-edit"
                        >
                            Edit
                        </a>

                        <a
                            href="<?= base_url('kategori/hapus/' . $row['id_kategori']) ?>"
                            class="btn btn-hapus"
                            onclick="return confirm('Yakin ingin menghapus kategori ini?')"
                        >
                            Hapus
                        </a>
                    </td>
                </tr>

            <?php endforeach; ?>

        <?php endif; ?>

        </tbody>
    </table>
</div>

<?= $this->endSection() ?>