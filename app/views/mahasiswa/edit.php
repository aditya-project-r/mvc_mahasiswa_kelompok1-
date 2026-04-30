<form action="<?= BASEURL ?>mahasiswa/update/<?= $mahasiswa['id'] ?>" method="POST" class="form">
    <div class="form-group">
        <label>NPM *</label>
        <input type="text" name="npm" value="<?= $mahasiswa['npm'] ?>" required>
    </div>
    
    <div class="form-group">
        <label>Nama Lengkap *</label>
        <input type="text" name="nama_lengkap" value="<?= $mahasiswa['nama_lengkap'] ?>" required>
    </div>
    
    <div class="form-group">
        <label>Fakultas *</label>
        <input type="text" name="fakultas" value="<?= $mahasiswa['fakultas'] ?>" required>
    </div>
    
    <div class="form-group">
        <label>Jurusan *</label>
        <select name="jurusan" required>
            <option value="Teknik Informatika" <?= $mahasiswa['jurusan'] == 'Teknik Informatika' ? 'selected' : '' ?>>Teknik Informatika</option>
            <option value="Sistem Informasi" <?= $mahasiswa['jurusan'] == 'Sistem Informasi' ? 'selected' : '' ?>>Sistem Informasi</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>Tempat Lahir *</label>
        <input type="text" name="tempat_lahir" value="<?= $mahasiswa['tempat_lahir'] ?>" required>
    </div>
    
    <div class="form-group">
        <label>Tanggal Lahir *</label>
        <input type="date" name="tanggal_lahir" value="<?= $mahasiswa['tanggal_lahir'] ?>" required>
    </div>
    
    <div class="form-group">
        <label>Jenis Kelamin *</label>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki" <?= $mahasiswa['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
            <option value="Perempuan" <?= $mahasiswa['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>Status</label>
        <select name="status_id">
            <option value="1" <?= $mahasiswa['status_id'] == 1 ? 'selected' : '' ?>>Aktif</option>
            <option value="0" <?= $mahasiswa['status_id'] == 0 ? 'selected' : '' ?>>Nonaktif</option>
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
</form>