

<?= $this->extend('magangview/mainview') ?>

<?= $this->section('isi') ?>

<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
  <h3 class="card-title">Data Mahasiswa</h3>
    <div class="card-tools">
     <form action="<?= base_url('magang/datamhsview'); ?>" method="get" class="input-group input-group-sm" style="width: 150px;">
      <input type="text" name="search" class="form-control float-right" placeholder="Search" value="<?= $keyword ?? ''; ?>">
    <div class="input-group-append">
      <button type="submit" class="btn btn-default">
        <i class="fas fa-search"></i>
      </button>
    </div>
    </form>
    </div>
</div>

<div class="card-body table-responsive p-0">
<table class="table table-hover text-nowrap">
<thead>
<tr>
  <th>NPM</th>
  <th>Nama</th>
  <th>Jenis kelamin</th>
  <th>Program studi</th>
  <th>Aksi</th>
</tr>
</thead>

<tbody>
<?php if (empty($showdata)) : ?>
    <tr class="odd">
        <td colspan="5" class="text-center">Data kosong</td>
    </tr>
<?php else : ?>
    <?php foreach ($showdata as $row) : ?>
        <tr class="odd">
            <td><?= $row['npm'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['jenis_kelamin'] ?></td>
            <td><?= $row['program_studi'] ?></td>
            <td>
                <a href="<?= site_url('magang/detail/' . $row['id']) ?>" class="btn btn-success"><i class="fas fa-info-circle"></i></a>
                <a href="<?= site_url('magang/edit/' . $row['id']) ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                <a href="<?= site_url('magang/datamasuk/hapus/' . $row['id']) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
    <?php endforeach ?>
<?php endif; ?>
</tbody>
   </table>
   </div>
  </div>
</div>
</div>

<button type="button" class="btn btn-primary btn-with-icon mb-2">
    <i class="fas fa-plus"></i> <a class="text-white" href="<?= base_url('/magang/tambahdata') ?>">Tambah Data</a>
</button>

<?= $this->endSection('isi') ?>
