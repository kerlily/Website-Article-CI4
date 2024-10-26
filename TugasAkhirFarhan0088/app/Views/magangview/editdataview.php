<?= $this->extend('magangview/mainview') ?>

<?= $this->section('judul') ?>
EDIT DATA
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>
  
<a href="<?= site_url('magang/datamhsview'); ?>" class="btn btn-warning">Kembali</a>
<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<?= form_open('/magang/updatemasuk') ?>

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">NPM</div>
    <div class="col-lg-6">
        <input type="text" name="npm" value="<?= $mahasiswa['npm'] ?? '' ?>" required>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Nama</div>
    <div class="col-lg-6">
        <input type="text" name="nama" value="<?= $mahasiswa['nama'] ?? '' ?>" required>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Jenis Kelamin</div>
    <div class="col-lg-6">
        <div class="form-group">
            <div class="custom-control custom-radio">
                <input type="radio" id="laki" name="jenis_kelamin" value="laki" class="custom-control-input" required <?= $mahasiswa['jenis_kelamin'] === 'laki' ? 'checked' : '' ?>>
                <label class="custom-control-label" for="laki">Laki-laki</label>
            </div>
            <div class="custom-control custom-radio mt-2">
                <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" class="custom-control-input" required <?= $mahasiswa['jenis_kelamin'] === 'perempuan' ? 'checked' : '' ?>>
                <label class="custom-control-label" for="perempuan">Perempuan</label>
            </div>
        </div>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Program studi</div>
    <div class="col-lg-6">
        <input type="text" name="program_studi" value="<?= $mahasiswa['program_studi'] ?? '' ?>" required>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">tempat pkl</div>
    <div class="col-lg-6">
        <input type="text" name="tempatkp" value="<?= $mahasiswa['tempatkp'] ?? '' ?>" required>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">tanggal mulai</div>
    <div class="col-lg-6">
        <input type="text" name="tanggalpkl" value="<?= $mahasiswa['tanggalpkl'] ?? '' ?>" required>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Tanggal selesai</div>
    <div class="col-lg-6">
        <input type="text" name="tanggal_selesai" value="<?= $mahasiswa['tanggal_selesai'] ?? '' ?>" required>
    </div>
</div>

<div class="row pt-4">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Alamat</div>
    <div class="col-lg-8">
        <input type="text" name="alamat" value="<?= $mahasiswa['alamat'] ?? '' ?>" required>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Telepon</div>
    <div class="col-lg-6">
        <input type="text" name="telepon" value="<?= $mahasiswa['telepon'] ?? '' ?>" required>
    </div>
</div>

<input type="hidden" name="id" value="<?= $mahasiswa['id'] ?? '' ?>">

<div class="row pt-2">
    <div class="col-lg-9"></div>
    <div class="col-lg-3">
    
        <button type="submit" class="btn btn-success btn-block">Update</button>
    </div>
</div>

<?= form_close() ?>
<?= $this->endSection('isi') ?>
