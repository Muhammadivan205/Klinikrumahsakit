<?php // pemeriksaan_edit.php ?>
<h2>Edit Pemeriksaan</h2>
<form action="<?= base_url('pemeriksaan/update') ?>" method="post">
  <input type="hidden" name="id_pemeriksaan" value="<?= $pemeriksaan->id_pemeriksaan ?>">

  <label>Dokter:</label><br>
  <select name="id_dokter">
    <?php foreach ($dokter as $d): ?>
      <option value="<?= $d->id_dokter ?>" <?= ($d->id_dokter == $pemeriksaan->id_dokter) ? 'selected' : '' ?>><?= $d->nama_dokter ?></option>
    <?php endforeach; ?>
  </select><br>

  <label>Pasien:</label><br>
  <select name="id_pasien">
    <?php foreach ($pasien as $p): ?>
      <option value="<?= $p->id_pasien ?>" <?= ($p->id_pasien == $pemeriksaan->id_pasien) ? 'selected' : '' ?>><?= $p->nama_pasien ?></option>
    <?php endforeach; ?>
  </select><br>

  <label>Keluhan:</label><br>
  <textarea name="keluhan"><?= $pemeriksaan->keluhan ?></textarea><br>

  <label>Diagnosa:</label><br>
  <textarea name="diagnosa"><?= $pemeriksaan->diagnosa ?></textarea><br>

  <button type="submit">Update</button>
</form>
