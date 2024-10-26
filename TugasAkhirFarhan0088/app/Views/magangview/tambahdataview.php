<?= $this->extend('magangview/mainview') ?>

<?= $this->section('judul') ?>
TAMBAH DATA
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>

<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>

<?= form_open('/magang/proses/inputmasuk')?>

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">npm</div>
    <div class="col-lg-6">
            <input type="text" name="npm" required>
        </div>
    </div>

    <div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Nama</div>
    <div class="col-lg-6">
        <input type="text" name="nama" required>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Jenis Kelamin</div>
    <div class="col-lg-6">
        <div class="form-group">
            <div class="custom-control custom-radio">
                <input type="radio" id="laki" name="jenis_kelamin" value="laki" class="custom-control-input" required>
                <label class="custom-control-label" for="laki">Laki-laki</label>
            </div>
            <div class="custom-control custom-radio mt-2">
                <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" class="custom-control-input" required>
                <label class="custom-control-label" for="perempuan">Perempuan</label>
            </div>
        </div>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Program Studi</div>
    <div class="col-lg-6">
        <input type="text" name="program_studi" required>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Tempat PKL</div>
    <div class="col-lg-6">
        <input type="text" name="tempatkp" required>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Tanggal PKL</div>
    <div class="col-lg-6">
        <input type="text" name="tanggalpkl" required>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Tanggal Selesai</div>
    <div class="col-lg-6">
        <input type="text" name="tanggal_selesai" required>
    </div>
</div>

<div class="row pt-4">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Alamat</div>
    <div class="col-lg-8">
        <input type="text" name="alamat" required>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Telepon</div>
    <div class="col-lg-6">
        <input type="text" name="telepon" required>
    </div>
</div>

    <div class="row pt-2">
        <div class="col-lg-9"></div>
        <div class="col-lg-3">
            <button type="submit" class="btn btn-success btn-block">Simpan</button>
        </div>
    </div>

    
<?= $this->endSection('isi') ?>
