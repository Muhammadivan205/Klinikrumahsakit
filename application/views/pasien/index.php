<?php // pasien_index.php ?>
<div class="container-fluid">
  <h1 class="mb-4">Data Pasien</h1>
  <div class="text-center mb-4">
    <?php $user = $this->session->userdata('user'); ?>
    <h2>Selamat datang</h2>
    <p>Ini adalah halaman tabel pasien</p>
    <?php if ($user->role == 'admin'): ?>
      <a href="<?= base_url('pasien/tambah') ?>" class="btn btn-primary">Tambah Data</a>
    <?php endif; ?>
  </div>
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>Nama Pasien</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; foreach ($pasien as $p): ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $p->nama_pasien ?></td>
        <td><?= $p->alamat ?></td>
        <td><?= $p->no_hp ?></td>
        <td>
          <?php if ($user->role == 'admin'): ?>
            <a href="<?= base_url('pasien/edit/'.$p->id_pasien) ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="<?= base_url('pasien/hapus/'.$p->id_pasien) ?>" onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-sm">Hapus</a>
          <?php endif; ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
