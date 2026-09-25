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
        min-width: 900px;
    }

    th, td {
        padding: 13px 12px;
        border-bottom: 1px solid #e5e7eb;
        text-align: left;
        vertical-align: top;
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

    .proses {
        background: #fef3c7;
        color: #92400e;
    }

    .selesai {
        background: #dcfce7;
        color: #166534;
    }

    .kosong {
        text-align: center;
        padding: 30px;
        color: #64748b;
    }

    .btn-edit {
    background: #2563eb;
}

.btn-hapus {
    background: #dc2626;
    margin-left: 5px;
}
</style>

<div class="page-header">
    <h1>Data Konseling</h1>

    <a href="<?= base_url('konseling/tambah') ?>" class="btn btn-tambah">
        + Tambah Konseling
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
                <th>Tanggal</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Kategori</th>
                <th>Guru BK</th>
                <th>Masalah</th>
                <th>Status</th>
                <th>Aksi</th>
           </tr>
        </thead>

        <tbody>

        <?php if (empty($konseling)) : ?>

            <tr>
                <td colspan="9" class="kosong">
                    Belum ada data konseling.
                </td>
            </tr>

        <?php else : ?>

            <?php $no = 1; ?>

            <?php foreach ($konseling as $row) : ?>

                <tr>

                    <td><?= $no++ ?></td>

                    <td>
                        <?= date('d-m-Y', strtotime($row['tanggal'])) ?>
                    </td>

                    <td>
                        <?= esc($row['nis']) ?>
                    </td>

                    <td>
                        <?= esc($row['nama_siswa']) ?>
                    </td>

                    <td>
                        <?= esc($row['nama_kategori']) ?>
                    </td>

                    <td>
                        <?= esc($row['nama_guru']) ?>
                    </td>

                    <td>
                        <?= esc($row['masalah']) ?>
                    </td>

                    <td>

                        <?php
                        $statusClass = strtolower($row['status']);
                        ?>

                        <span class="badge <?= $statusClass ?>">
                            <?= esc($row['status']) ?>
                        </span>

                    </td>

                    <td>
                     <a 
                       href="<?= base_url('konseling/edit/' . $row['id_konseling']) ?>"
                       class="btn btn-edit"
                    >
                        Edit
                    </a>

                   <a
                       href="<?= base_url('konseling/hapus/' . $row['id_konseling']) ?>"
                       class="btn btn-hapus"
                       onclick="return confirm('Yakin ingin menghapus data konseling ini?')"
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