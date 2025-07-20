<?php // pasien_tambah.php ?>
<h2>Tambah Pasien</h2>
<form action="<?= base_url('pasien/simpan') ?>" method="post">
  <label>Nama Pasien:</label><br>
  <input type="text" name="nama_pasien"><br>
  <label>Alamat:</label><br>
  <textarea name="alamat"></textarea><br>
  <label>No HP:</label><br>
  <input type="text" name="no_hp"><br>
  <button type="submit">Simpan</button>
</form>
