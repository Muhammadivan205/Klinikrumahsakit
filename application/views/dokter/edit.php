<div class="container mt-4">
  <div class="card shadow-sm">
    <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
      <h2 class="mb-0">Edit Dokter</h2>
      <a href="<?= base_url('dokter') ?>" class="btn btn-secondary btn-sm" title="Kembali ke daftar">
        <i class="bi bi-arrow-left"></i> Kembali
      </a>
    </div>
    <div class="card-body">
      <form action="<?= base_url('dokter/update') ?>" method="post">
        <input type="hidden" name="id_dokter" value="<?= $dokter->id_dokter ?>">
        <div class="mb-3">
          <label for="nama_dokter" class="form-label">Nama Dokter:</label>
          <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" value="<?= htmlspecialchars($dokter->nama_dokter) ?>" required>
        </div>
        <div class="mb-3">
          <label for="spesialis" class="form-label">Spesialis:</label>
          <input type="text" class="form-control" id="spesialis" name="spesialis" value="<?= htmlspecialchars($dokter->spesialis) ?>" required>
        </div>
        <button type="submit" class="btn btn-warning">
          <i class="bi bi-check-lg"></i> Update
        </button>
      </form>
    </div>
  </div>
</div>
