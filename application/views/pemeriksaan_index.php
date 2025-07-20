<?php // pemeriksaan_index.php ?>
<div class="container-fluid">
  <h1 class="mb-4">Data Pemeriksaan</h1>
  <div class="text-center mb-4">
    <?php $user = $this->session->userdata('user'); ?>
    <h2>Selamat datang</h2>
    <p>Ini adalah halaman tabel pemeriksaan</p>
    <?php if ($user->role == 'admin'): ?>
      <a href="<?= base_url('pemeriksaan/tambah') ?>" class="btn btn-primary">Tambah Data</a>
    <?php endif; ?>
  </div>
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>Dokter</th>
        <th>Pasien</th>
        <th>Keluhan</th>
        <th>Diagnosa</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; foreach ($pemeriksaan as $p): ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $p->nama_dokter ?></td>
        <td><?= $p->nama_pasien ?></td>
        <td><?= $p->keluhan ?></td>
        <td><?= $p->diagnosa ?></td>
        <td>
          <?php if ($user->role == 'admin' || $user->role == 'dokter'): ?>
            <a href="<?= base_url('pemeriksaan/edit/'.$p->id_pemeriksaan) ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="<?= base_url('pemeriksaan/hapus/'.$p->id_pemeriksaan) ?>" onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-sm">Hapus</a>
          <?php endif; ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
