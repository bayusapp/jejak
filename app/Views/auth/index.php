<!doctype html>
<html lang="id">

<head>
  <title>Login | Jejak Impian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
  <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
  <meta name="author" content="Bayu S. Ajie P. Putra">
  <link rel="icon" href="<?= base_url() ?>assets/images/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" id="main-style-link">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style-preset.css">
</head>

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <div class="auth-main">
    <div class="auth-wrapper v1">
      <div class="auth-form">
        <div class="card my-5">
          <div class="card-body">
            <div class="text-center">
              <a href="#"><img src="../assets/images/logo-dark.svg" alt="img"></a>
            </div>
            <div class="saprator my-3"></div>
            <form method="post" class="needs-validation">
              <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="johndoe@mail.com" required>
                <div class="invalid-feedback">Email tidak boleh kosong</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password Anda">
              </div>
              <div class="d-flex mt-1 justify-content-between align-items-center">
                <h6 class="text-secondary f-w-400 mb-0">
                  <a href="forgot-password-v1.html">Forgot Password?</a>
                </h6>
              </div>
              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
            <div class="d-flex justify-content-between align-items-end mt-4">
              <h6 class="f-w-500 mb-0">Belum punya akun?</h6><a href="register-v1.html" class="link-primary">Buat akun</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/js/plugins/popper.min.js"></script>
  <script src="../assets/js/plugins/simplebar.min.js"></script>
  <script src="../assets/js/plugins/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/i18next.min.js"></script>
  <script src="../assets/js/plugins/i18nextHttpBackend.min.js"></script>
  <script src="../assets/js/icon/custom-font.js"></script>
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/theme.js"></script>
  <script src="../assets/js/multi-lang.js"></script>
  <script src="../assets/js/plugins/feather.min.js"></script>
  <script>
    function detectTheme() {
      if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.body.setAttribute(
          "data-pc-theme",
          "dark"
        );
      } else {
        document.body.setAttribute(
          "data-pc-theme",
          "light"
        );
      }
    }
    detectTheme();

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', detectTheme);
  </script>
</body>

</html>