<?php // VIEW: register.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register - Klinik Rumah Sakit</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.min.css') ?>" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
  <style>
    body {
      background: url('<?= base_url('assets/assets/img/boxed-bg.jpg') ?>') no-repeat center center fixed;
      background-size: cover;
    }
    .register-box {
      max-width: 400px;
      margin: 80px auto;
      padding: 30px;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
    }
    .register-logo {
      font-weight: 700;
      font-size: 2rem;
      text-align: center;
      margin-bottom: 20px;
      color: #007bff;
    }
  </style>
</head>
<body>
  <div class="register-box">
    <div class="register-logo">
      Klinik
    </div>
    <form action="<?= base_url('index.php/auth/proses_register') ?>" method="post">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Enter username" required autofocus />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required />
      </div>
      <div class="mb-3">
        <label for="password_confirm" class="form-label">Confirm Password</label>
        <input type="password" id="password_confirm" name="password_confirm" class="form-control" placeholder="Confirm password" required />
      </div>
      <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger" role="alert">
          <?= $this->session->flashdata('error') ?>
        </div>
      <?php endif; ?>
      <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>
    <p class="mt-3 text-center">
      Sudah punya akun? <a href="<?= base_url('auth/login') ?>">Login di sini</a>
    </p>
  </div>
  <script src="<?= base_url('assets/js/adminlte.min.js') ?>"></script>
</body>
</html>
