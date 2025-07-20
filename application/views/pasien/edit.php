<?php // pasien_edit.php ?>
<h2>Edit Pasien</h2>
<form action="<?= base_url('pasien/update') ?>" method="post">
  <input type="hidden" name="id_pasien" value="<?= $pasien->id_pasien ?>">
  <label>Nama Pasien:</label><br>
  <input type="text" name="nama_pasien" value="<?= $pasien->nama_pasien ?>"><br>
  <label>Alamat:</label><br>
  <textarea name="alamat"><?= $pasien->alamat ?></textarea><br>
  <label>No HP:</label><br>
  <input type="text" name="no_hp" value="<?= $pasien->no_hp ?>"><br>
  <button type="submit">Update</button>
</form>