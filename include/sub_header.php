<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
  $requestUri = $_SERVER['REQUEST_URI']; // Dapatkan full path URI
?>

<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="../home.php" class="logo d-flex align-items-center">
      <h1 class="sitename">PERSONAL PORTFOLIO</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="../home.php" class="<?= ($currentPage == 'home.php') ? 'active' : '' ?>">Beranda</a></li>
        <li><a href="../about.php" class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>">Tentang</a></li>
        <li><a href="../project.php" class="<?= (strpos($requestUri, 'sistemoperasi') !== false) ? 'active' : '' ?>">Project</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
  </div>
</header>
