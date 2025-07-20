<?php // VIEW: template.php ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE | Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.css') ?>">
  </head>
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
      <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>
            <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img src="<?= base_url('assets/assets/img/user2-160x160.jpg') ?>" class="user-image rounded-circle shadow" alt="User Image" />
                <span class="d-none d-md-inline"><?= $this->session->userdata('user')->username ?></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <li class="user-header text-bg-primary">
                  <img src="<?= base_url('assets/assets/img/user2-160x160.jpg') ?>" class="rounded-circle shadow" alt="User Image" />
                  <p><?= $this->session->userdata('user')->username ?> - Pengguna</p>
                </li>
                <li class="user-footer">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                  <a href="<?= base_url('auth/logout') ?>" class="btn btn-default btn-flat float-end">Sign out</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <div class="sidebar-brand">
          <a href="#" class="brand-link">
            <img src="<?= base_url('assets/assets/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image opacity-75 shadow" />
            <span class="brand-text fw-light">Klinik sehat bahagia</span>
          </a>
        </div>
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
              <li class="nav-item menu-open">
                <a href="<?= base_url('dashboard') ?>" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-book"></i>
                  <p>Manajemen Klinik<i class="nav-arrow bi bi-chevron-right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('dokter') ?>" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Data Dokter</p></a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('pasien') ?>" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Data Pasien</p></a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('pemeriksaan') ?>" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Data Pemeriksaan</p></a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </aside>
      <main class="app-main">
        <?= isset($content) ? $content : '' ?>
      </main>
      <footer class="app-footer">
        <strong>
          Copyright &copy; 2014-<?= date('Y') ?>
          <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
        </strong>
        All rights reserved.
        <span class="float-end">Developed by IVAN205</span>
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/js/adminlte.js') ?>"></script>
  </body>
</html>