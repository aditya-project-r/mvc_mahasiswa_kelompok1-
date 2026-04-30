<div class="page-header">
    <h2>Detail Mahasiswa</h2>
    <a href="<?= BASEURL ?>mahasiswa/index" class="btn">Kembali</a>
</div>

<div class="detail-card">
    <table class="detail-table">
        <tr>
            <th>ID</th>
            <td><?= $mahasiswa['id'] ?></td>
        </tr>
        <tr>
            <th>NPM</th>
            <td><?= $mahasiswa['npm'] ?></td>
        </tr>
        <tr>
            <th>Nama Lengkap</th>
            <td><?= $mahasiswa['nama_lengkap'] ?></td>
        </tr>
        <tr>
            <th>Fakultas</th>
            <td><?= $mahasiswa['fakultas'] ?></td>
        </tr>
        <tr>
            <th>Jurusan</th>
            <td><?= $mahasiswa['jurusan'] ?></td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td><?= $mahasiswa['tempat_lahir'] ?></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><?= date('d-m-Y', strtotime($mahasiswa['tanggal_lahir'])) ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?= $mahasiswa['jenis_kelamin'] ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td>
                <span class="badge <?= $mahasiswa['status_id'] == 1 ? 'badge-success' : 'badge-danger' ?>">
                    <?= $mahasiswa['status_id'] == 1 ? 'Aktif' : 'Nonaktif' ?>
                </span>
            </td>
        </tr>
        <tr>
            <th>Dibuat Pada</th>
            <td><?= date('d-m-Y H:i:s', strtotime($mahasiswa['created_at'])) ?></td>
        </tr>
        <tr>
            <th>Diupdate Pada</th>
            <td><?= date('d-m-Y H:i:s', strtotime($mahasiswa['updated_at'])) ?></td>
        </tr>
    </table>
</div>