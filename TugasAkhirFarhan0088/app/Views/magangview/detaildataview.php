<?= $this->extend('magangview/mainview') ?>

<?= $this->section('judul') ?>
DETAIL DATA
<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>
  
<button class="btn btn-primary" onclick="window.print();">Print</button>
<a href="<?= site_url('magang/datamhsview'); ?>" class="btn btn-warning">Kembali</a>
<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">NPM</div>
    <div class="col-lg-6">
        <p><?= $mahasiswa['npm'] ?? '' ?></p>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Nama</div>
    <div class="col-lg-6">
        <p><?= $mahasiswa['nama'] ?? '' ?></p>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Jenis Kelamin</div>
    <div class="col-lg-6">
        <p><?= $mahasiswa['jenis_kelamin'] ?? '' ?></p>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Program Studi</div>
    <div class="col-lg-6">
        <p><?= $mahasiswa['program_studi'] ?? '' ?></p>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Tempat PKL</div>
    <div class="col-lg-6">
        <p><?= $mahasiswa['tempatkp'] ?? '' ?></p>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Tanggal PKL</div>
    <div class="col-lg-6">
        <p><?= $mahasiswa['tanggalpkl'] ?? '' ?></p>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Tanggal Selesai</div>
    <div class="col-lg-6">
        <p><?= $mahasiswa['tanggal_selesai'] ?? '' ?></p>
    </div>
</div>

<div class="row pt-4">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Alamat</div>
    <div class="col-lg-8">
        <p><?= $mahasiswa['alamat'] ?? '' ?></p>
    </div>
</div>

<div class="row pt-2">
    <div class="col-lg-2"></div>
    <div class="col-lg-1 text-right">Telepon</div>
    <div class="col-lg-6">
        <p><?= $mahasiswa['telepon'] ?? '' ?></p>
    </div>
</div>



<?= $this->endSection('isi') ?>
