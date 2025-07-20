<?php // VIEW: dashboard.php ?>
<div class="container-fluid">
  <h1 class="mb-4">Dashboard</h1>
  <p>Selamat datang <?= $this->session->userdata('user')->role ?> <?= $this->session->userdata('user')->username ?>!</p>
  <div class="row">
    <div class="col-lg-3 col-6">
      <div class="small-box bg-info">
        <div class="inner">
          <h3><?= $count_pasien ?? 0 ?></h3>
          <p>Pasien</p>
        </div>
        <div class="icon">
          <i class="bi bi-people"></i>
        </div>
        <a href="<?= base_url('pasien') ?>" class="small-box-footer">More info <i class="bi bi-arrow-right-circle"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <div class="small-box bg-success">
        <div class="inner">
          <h3><?= $count_pemeriksaan ?? 0 ?></h3>
          <p>Pemeriksaan</p>
        </div>
        <div class="icon">
          <i class="bi bi-journal-medical"></i>
        </div>
        <a href="<?= base_url('pemeriksaan') ?>" class="small-box-footer">More info <i class="bi bi-arrow-right-circle"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3><?= $count_dokter ?? 0 ?></h3>
          <p>Dokter</p>
        </div>
        <div class="icon">
          <i class="bi bi-person-badge"></i>
        </div>
        <a href="<?= base_url('dokter') ?>" class="small-box-footer">More info <i class="bi bi-arrow-right-circle"></i></a>
      </div>
    </div>
  </div>
</div>
