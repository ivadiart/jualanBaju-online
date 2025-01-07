<!doctype html>
<html class="loading" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link href="../assets/vendors/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    html,
    body {
      background-size: cover;
      height: 100%;
    }

    .container {
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card {
      box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
    }

    .show-hide {
      position: absolute;
      right: 25px;
      top: 70%;
      transform: translateY(-50%);
    }

    .show-hide i {
      font-size: 19px;
      color: #000000;
      cursor: pointer;
      display: none;
    }

    input:valid~.show-hide i {
      display: block;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card border mx-5" style="width: 35%;">
      <div class="img text-center">
        <h1 class="mt-3">LOGIN ADMIN</h1>
      </div>
      <div class="card-body">

            <!-- <div class="alert alert-warning" role="alert">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text"><b>Warning</b> Username atau Password salah!</div>
            </div>

            <div class="alert alert-danger" role="alert">
              <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
              </div>
              <div class="iq-alert-text"><b>Warning</b> Akun Anda tidak ditemukan!</div>
            </div> -->

            <?php if (session()->getFlashdata('alert') === 'login_gagal'): ?>
              <div class="alert alert-danger">Login gagal, periksa username dan password Anda.</div>
            <?php elseif (session()->getFlashdata('alert') === 'logout_sukses'): ?>
              <div class="alert alert-danger">Logout berhasil.</div>
            <?php elseif (session()->getFlashdata('alert') === 'belum_login'): ?>
                <div class="alert alert-danger">Anda belum login.</div>
            <?php endif; ?>

            <form action="<?= base_url('admin/auth/login') ?>" method="post" class="signin-form">
              <div class="form-group mb-3">
                  <label class="label" for="username">Username</label>
                  <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="form-group mb-3">
                  <label class="label" for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                  <span id="toggle" class="btn-toggle show-hide"><i id="eye" class="fas fa-fw fa-eye"></i></span>
              </div>
              <div class="form-group">
                  <button type="submit" name="login" class="form-control btn btn-dark submit px-3">Masuk</button>
              </div>
          </form>

      </div>
    </div>
  </div>

  <script>
    let passwordInput = document.getElementById('password'),
      toggle = document.getElementById('toggle'),
      icon = document.getElementById('eye');

    function togglePassword() {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        icon.classList.add("fa-eye-slash");
      } else {
        passwordInput.type = 'password';
        icon.classList.remove("fa-eye-slash");
      }
    }

    function checkInput() {

    }

    toggle.addEventListener('click', togglePassword, false);
    passwordInput.addEventListener('keyup', checkInput, false)
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>