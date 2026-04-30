<div class="page-header">
    <h2>Daftar Mahasiswa</h2>
    <a href="<?= BASEURL ?>mahasiswa/create" class="btn btn-primary">Tambah Mahasiswa</a>
</div>

<?php if (empty($mahasiswa)): ?>
    <div class="alert warning">Belum ada data mahasiswa.</div>
<?php else: ?>
    <table class="data-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NPM</th>
                <th>Nama Lengkap</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $row): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['npm'] ?></td>
                <td><?= $row['nama_lengkap'] ?></td>
                <td><?= $row['jurusan'] ?></td>
                <td><?= $row['jenis_kelamin'] ?></td>
                <td>
                    <span class="badge <?= $row['status_id'] == 1 ? 'badge-success' : 'badge-danger' ?>">
                        <?= $row['status_id'] == 1 ? 'Aktif' : 'Nonaktif' ?>
                    </span>
                </td>
                <td>
                    <a href="<?= BASEURL ?>mahasiswa/show/<?= $row['id'] ?>" class="btn-small">Detail</a>
                    <a href="<?= BASEURL ?>mahasiswa/edit/<?= $row['id'] ?>" class="btn-small">Edit</a>
                    <a href="<?= BASEURL ?>mahasiswa/delete/<?= $row['id'] ?>" class="btn-small btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>