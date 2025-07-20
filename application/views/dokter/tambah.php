<div class="container mt-4">
  <div class="card shadow-sm">
    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
      <h2 class="mb-0">Tambah Dokter</h2>
      <a href="<?= base_url('dokter') ?>" class="btn btn-secondary btn-sm" title="Kembali ke daftar">
        <i class="bi bi-arrow-left"></i> Kembali
      </a>
    </div>
    <div class="card-body">
      <form action="<?= base_url('dokter/simpan') ?>" method="post">
        <div class="mb-3">
          <label for="nama_dokter" class="form-label">Nama Dokter:</label>
          <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" required>
        </div>
        <div class="mb-3">
          <label for="spesialis" class="form-label">Spesialis:</label>
          <input type="text" class="form-control" id="spesialis" name="spesialis" required>
        </div>
        <button type="submit" class="btn btn-success">
          <i class="bi bi-check-lg"></i> Simpan
        </button>
      </form>
    </div>
  </div>
</div>


