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
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
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

    .kosong {
        text-align: center;
        padding: 30px;
        color: #64748b;
    }
</style>


<div class="page-header">

    <h1>Data Siswa</h1>

    <a href="<?= base_url('siswa/tambah') ?>" class="btn btn-tambah">
        + Tambah Siswa
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
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            <?php if (empty($siswa)) : ?>

                <tr>
                    <td colspan="5" class="kosong">
                        Belum ada data siswa.
                    </td>
                </tr>

            <?php else : ?>

                <?php $no = 1; ?>

                <?php foreach ($siswa as $row) : ?>

                    <tr>

                        <td>
                            <?= $no++ ?>
                        </td>

                        <td>
                            <?= esc($row['nis']) ?>
                        </td>

                        <td>
                            <?= esc($row['nama_siswa']) ?>
                        </td>

                        <td>
                            <?= esc($row['nama_kelas']) ?>
                        </td>

                        <td>

                            <a
                                href="<?= base_url('siswa/edit/' . $row['id_siswa']) ?>"
                                class="btn btn-edit">
                                Edit
                            </a>

                            <a
                                href="<?= base_url('siswa/hapus/' . $row['id_siswa']) ?>"
                                class="btn btn-hapus"
                                onclick="return confirm('Yakin ingin menghapus siswa ini?')">
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