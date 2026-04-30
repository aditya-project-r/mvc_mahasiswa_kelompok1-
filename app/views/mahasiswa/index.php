<?php require_once '../app/views/templates/header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-primary fw-bold"><i class="bi bi-people-fill me-2"></i>Daftar Mahasiswa</h2>
    <a href="<?= BASEURL ?>mahasiswa/create" class="btn btn-primary shadow-sm">
        <i class="bi bi-plus-circle me-1"></i> Tambah Mahasiswa
    </a>
</div>

<?php if (empty($mahasiswa)): ?>
    <div class="alert alert-warning d-flex align-items-center" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        <div>Belum ada data mahasiswa dalam database.</div>
    </div>
<?php else: ?>
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NPM</th>
                    <th>Nama Lengkap</th>
                    <th>Jurusan</th>
                    <th>L/P</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $row): ?>
                <tr>
                    <td class="fw-bold text-muted"><?= $row['id'] ?></td>
                    <td><span class="badge bg-light text-dark border"><?= $row['npm'] ?></span></td>
                    <td><?= $row['nama_lengkap'] ?></td>
                    <td><?= $row['jurusan'] ?></td>
                    <td><?= $row['jenis_kelamin'] == 'Laki-laki' ? 'L' : 'P' ?></td>
                    <td class="text-center">
                        <?php if($row['status_id'] == 1): ?>
                            <span class="badge rounded-pill bg-success-subtle text-success border border-success">
                                <i class="bi bi-check-circle-fill"></i> Aktif
                            </span>
                        <?php else: ?>
                            <span class="badge rounded-pill bg-danger-subtle text-danger border border-danger">
                                <i class="bi bi-x-circle-fill"></i> Nonaktif
                            </span>
                        <?php endif; ?>
                    </td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            <a href="<?= BASEURL ?>mahasiswa/show/<?= $row['id'] ?>" class="btn btn-sm btn-outline-info" title="Detail">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="<?= BASEURL ?>mahasiswa/edit/<?= $row['id'] ?>" class="btn btn-sm btn-outline-warning" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="<?= BASEURL ?>mahasiswa/delete/<?= $row['id'] ?>" class="btn btn-sm btn-outline-danger btn-hapus">
                                <i class="bi bi-trash"></i>
                            </a>
                            </a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>

<?php require_once '../app/views/templates/footer.php'; ?>
