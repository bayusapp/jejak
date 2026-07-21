<!DOCTYPE html>
<html lang="id">

<head>
  <title>Layout 2 | Jejak Impian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
  <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
  <meta name="author" content="Bayu S. Ajie P. Putra">
  <link rel="icon" href="<?= base_url() ?>assets/images/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="../assets/fonts/inter/inter.css" id="main-font-link">
  <link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css">
  <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css">
  <link rel="stylesheet" href="../assets/fonts/feather.css">
  <link rel="stylesheet" href="../assets/fonts/fontawesome.css">
  <link rel="stylesheet" href="../assets/fonts/material.css">
  <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link">
  <script src="../assets/js/tech-stack.js"></script>
  <link rel="stylesheet" href="../assets/css/style-preset.css">
</head>

<body data-pc-preset="preset-5" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light" class="Codedthemes preset-5">
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <nav class="pc-sidebar">
    <div class="navbar-wrapper">
      <div class="m-header">
        <a href="../dashboard/index.html" class="b-brand text-primary">
          <img src="../assets/images/logo-dark.svg" class="img-fluid logo-lg" alt="logo">
          <span class="badge bg-light-success rounded-pill ms-2 theme-version">v9.6.2</span>
        </a>
      </div>
      <div class="navbar-content">
        <div class="card pc-user-card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0"><img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle"></div>
              <div class="flex-grow-1 ms-3 me-2">
                <h6 class="mb-0" data-i18n="Jonh Smith">Jonh Smith</h6><small data-i18n="Administrator">Administrator</small>
              </div><a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse" href="#pc_sidebar_userlink"><svg class="pc-icon">
                  <use xlink:href="#custom-sort-outline"></use>
                </svg></a>
            </div>
            <div class="collapse pc-user-links" id="pc_sidebar_userlink">
              <div class="pt-3"><a href="#!"><i class="ti ti-user"></i> <span data-i18n="My Account">My Account</span> </a><a href="#!"><i class="ti ti-settings"></i> <span data-i18n="Settings">Settings</span> </a><a href="#!"><i class="ti ti-lock"></i> <span data-i18n="Lock Screen">Lock Screen</span> </a><a href="#!"><i class="ti ti-power"></i> <span data-i18n="Logout">Logout</span></a></div>
            </div>
          </div>
        </div>
        <ul class="pc-navbar">
          <li class="pc-item">
            <a href="../widget/w_statistics.html" class="pc-link">
              <span class="pc-micon">
                <i class="material-icons-two-tone">dashboard</i>
              </span>
              <span class="pc-mtext" data-i18n="Dashboard">Dashboard</span>
            </a>
          </li>
          <li class="pc-item">
            <a href="../widget/w_statistics.html" class="pc-link">
              <span class="pc-micon">
                <i class="material-icons-two-tone">supervised_user_circle</i>
              </span>
              <span class="pc-mtext" data-i18n="Data Murid">Data Murid</span>
            </a>
          </li>
          <li class="pc-item">
            <a href="../widget/w_statistics.html" class="pc-link">
              <span class="pc-micon">
                <i class="material-icons-two-tone">groups</i>
              </span>
              <span class="pc-mtext" data-i18n="Data Murid">Data Mentor</span>
            </a>
          </li>
          <li class="pc-item">
            <a href="../widget/w_statistics.html" class="pc-link">
              <span class="pc-micon">
                <i class="material-icons-two-tone">calendar_today</i>
              </span>
              <span class="pc-mtext" data-i18n="Data Murid">Jadwal Les</span>
            </a>
          </li>
          <li class="pc-item">
            <a href="../widget/w_statistics.html" class="pc-link">
              <span class="pc-micon">
                <i class="material-icons-two-tone">payments</i>
              </span>
              <span class="pc-mtext" data-i18n="Data Murid">Pembayaran</span>
            </a>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <i class="material-icons-two-tone">payments</i>
              </span>
              <span class="pc-mtext" data-i18n="Data Murid">Keuangan</span>
              <span class="pc-arrow">
                <i data-feather="chevron-right"></i>
              </span>
            </a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../dashboard/index.html" data-i18n="Default">Tagihan</a></li>
              <li class="pc-item"><a class="pc-link" href="../dashboard/analytics.html" data-i18n="Analytics">Analytics</a></li>
              <li class="pc-item"><a class="pc-link" href="../dashboard/finance.html" data-i18n="Finance">Finance</a></li>
            </ul>
          </li>
          <li class="pc-item">
            <a href="../widget/w_statistics.html" class="pc-link">
              <span class="pc-micon">
                <i class="material-icons-two-tone">fact_check</i>
              </span>
              <span class="pc-mtext" data-i18n="Data Murid">Absensi</span>
            </a>
          </li>
          <li class="pc-item">
            <a href="../widget/w_statistics.html" class="pc-link">
              <span class="pc-micon">
                <i class="material-icons-two-tone">leaderboard</i>
              </span>
              <span class="pc-mtext" data-i18n="Data Murid">Nilai</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header class="pc-header">
    <div class="header-wrapper">
      <div class="me-auto pc-mob-drp">
        <ul class="list-unstyled">
          <li class="pc-h-item pc-sidebar-collapse">
            <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
          <li class="pc-h-item pc-sidebar-popup">
            <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="ms-auto">
        <ul class="list-unstyled">
          <li class="dropdown pc-h-item">
            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <svg class="pc-icon">
                <use xlink:href="#custom-sun-1"></use>
              </svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
              <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
                <svg class="pc-icon">
                  <use xlink:href="#custom-moon"></use>
                </svg>
                <span>Dark</span>
              </a>
              <a href="#!" class="dropdown-item" onclick="layout_change('light')">
                <svg class="pc-icon">
                  <use xlink:href="#custom-sun-1"></use>
                </svg>
                <span>Light</span>
              </a>
            </div>
          </li>
          <li class="dropdown pc-h-item header-user-profile">
            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
              <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar">
            </a>
            <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
              <div class="dropdown-header d-flex align-items-center justify-content-between">
                <h5 class="m-0">Profil</h5>
              </div>
              <div class="dropdown-body">
                <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                  <div class="d-flex mb-1">
                    <div class="flex-shrink-0">
                      <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar wid-35">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-1">Carson Darrin 🖖</h6>
                    </div>
                  </div>
                  <hr class="border-secondary border-opacity-50">
                  <a href="#" class="dropdown-item">
                    <span>
                      <svg class="pc-icon text-muted me-2">
                        <use xlink:href="#custom-setting-outline"></use>
                      </svg>
                      <span>Pengaturan Akun</span>
                    </span>
                  </a>
                  <hr class="border-secondary border-opacity-50">
                  <div class="d-grid mb-3">
                    <button class="btn btn-primary">
                      <svg class="pc-icon me-2">
                        <use xlink:href="#custom-logout-1-outline"></use>
                      </svg>
                      Keluar
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <div class="pc-container">
    <div class="pc-content">
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Selamat <?= greetings() ?></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5>Background Color</h5><small>set background class in <code>.preset</code> and <code>.preset-*</code> in <code>&lt;body&gt;</code></small>
              <div class="row g-3 mt-3">
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-1" onclick="changebrand('preset-1')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-2" onclick="changebrand('preset-2')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-3" onclick="changebrand('preset-3')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-4" onclick="changebrand('preset-4')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-5" onclick="changebrand('preset-5')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-6" onclick="changebrand('preset-6')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-7" onclick="changebrand('preset-7')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-8" onclick="changebrand('preset-8')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-9" onclick="changebrand('preset-9')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-10" onclick="changebrand('preset-10')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-11" onclick="changebrand('preset-11')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5>Background Gradient Color</h5><small>set background class in <code>.preset</code> and <code>.preset-gradient-*</code> in <code>&lt;body&gt;</code></small>
              <div class="row g-3 mt-3">
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-gradient-1" onclick="changebrand('preset-gradient-1')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-gradient-2" onclick="changebrand('preset-gradient-2')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-gradient-3" onclick="changebrand('preset-gradient-3')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-gradient-4" onclick="changebrand('preset-gradient-4')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-gradient-5" onclick="changebrand('preset-gradient-5')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-gradient-6" onclick="changebrand('preset-gradient-6')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-gradient-7" onclick="changebrand('preset-gradient-7')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-gradient-8" onclick="changebrand('preset-gradient-8')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-gradient-9" onclick="changebrand('preset-gradient-9')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-gradient-10" onclick="changebrand('preset-gradient-10')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
                <div class="col-auto"><a href="#" class="avtar avtar-s preset preset-gradient-11" onclick="changebrand('preset-gradient-11')"><i class="ph-duotone ph-paint-brush text-white f-18"></i></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
      <div class="row">
        <div class="col my-1">
          <p class="m-0">© 2026 Developed by <a href="https://bayusapp.com/" target="_blank">Bayu S. Ajie P. Putra</a></p>
        </div>
      </div>
    </div>
  </footer>
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
</body>

</html>