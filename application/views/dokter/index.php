<div class="container-fluid mt-4">
  <div class="card shadow-sm">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
      <h1 class="mb-0">Data Dokter</h1>
      <?php $user = $this->session->userdata('user'); ?>
      <?php if ($user->role == 'admin' || $user->role == 'dokter'): ?>
        <a href="<?= base_url('dokter/tambah') ?>" class="btn btn-success">
          <i class="bi bi-plus-lg"></i> Tambah Data
        </a>
      <?php endif; ?>
    </div>
    <div class="card-body">
      <p>Ini adalah halaman tabel dokter</p>
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-middle">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Nama Dokter</th>
              <th>Spesialis</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach ($dokter as $d): ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= htmlspecialchars($d->nama_dokter) ?></td>
              <td><?= htmlspecialchars($d->spesialis) ?></td>
              <td>
                <?php if ($user->role == 'admin' || $user->role == 'dokter'): ?>
                  <a href="<?= base_url('dokter/edit/'.$d->id_dokter) ?>" class="btn btn-warning btn-sm me-1" title="Edit">
                    <i class="bi bi-pencil-fill"></i>
                  </a>
                  <form action="<?= base_url('dokter/hapus/'.$d->id_dokter) ?>" method="post" class="d-inline" onsubmit="return confirm('Hapus data ini?')">
                    <button type="submit" class="btn btn-danger btn-sm" title="Hapus">
                      <i class="bi bi-trash-fill"></i>
                    </button>
                  </form>
                <?php endif; ?>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
