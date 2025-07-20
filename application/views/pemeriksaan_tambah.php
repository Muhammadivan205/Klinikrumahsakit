<?php // pemeriksaan_tambah.php ?>
<h2>Tambah Pemeriksaan</h2>
<form action="<?= base_url('index.php/pemeriksaan/simpan') ?>" method="post">
  <label>Dokter:</label><br>
  <select name="id_dokter">
    <?php foreach ($dokter as $d): ?>
      <option value="<?= $d->id_dokter ?>"><?= $d->nama_dokter ?></option>
    <?php endforeach; ?>
  </select><br>

  <label>Pasien:</label><br>
  <select name="id_pasien">
    <?php foreach ($pasien as $p): ?>
      <option value="<?= $p->id_pasien ?>"><?= $p->nama_pasien ?></option>
    <?php endforeach; ?>
  </select><br>

  <label>Keluhan:</label><br>
  <textarea name="keluhan"></textarea><br>

  <label>Diagnosa:</label><br>
  <textarea name="diagnosa"></textarea><br>

  <button type="submit">Simpan</button>
</form>