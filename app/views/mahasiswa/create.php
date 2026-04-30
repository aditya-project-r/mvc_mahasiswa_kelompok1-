<div class="page-header">
    <h2>Tambah Mahasiswa</h2>
    <a href="<?= BASEURL ?>mahasiswa/index" class="btn">Kembali</a>
</div>

<form action="<?= BASEURL ?>mahasiswa/store" method="POST" class="form">
    <div class="form-group">
        <label>NPM *</label>
        <input type="text" name="npm" required>
    </div>
    
    <div class="form-group">
        <label>Nama Lengkap *</label>
        <input type="text" name="nama_lengkap" required>
    </div>
    
    <div class="form-group">
        <label>Fakultas *</label>
        <input type="text" name="fakultas" required>
    </div>
    
    <div class="form-group">
        <label>Jurusan *</label>
        <select name="jurusan" required>
            <option value="">Pilih Jurusan</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>Tempat Lahir *</label>
        <input type="text" name="tempat_lahir" required>
    </div>
    
    <div class="form-group">
        <label>Tanggal Lahir *</label>
        <input type="date" name="tanggal_lahir" required>
    </div>
    
    <div class="form-group">
        <label>Jenis Kelamin *</label>
        <select name="jenis_kelamin" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>Status</label>
        <select name="status_id">
            <option value="1">Aktif</option>
            <option value="0">Nonaktif</option>
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>