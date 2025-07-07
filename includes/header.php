<?php define('BASE_URL', '/dev/'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

     <!-- Responsividade para dispositivos móveis -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title>First Work</title>



  <!-- Core styles -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/colors.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/components.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/pages/home.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/global-overrides.css">
 <script>
  if (window.innerWidth <= 991) {
    window.location.href = "/dev/index-mobile.php";
  }
</script>




</head>
<body>

<!-- Top Bar -->
<!-- <?php include_once(__DIR__ . '/topbar.php'); ?> 

<!-- Logo + Menu Side-by-Side -->
<div class="header-top-stripe"></div>



    </a>
  </div>
  <div class="header-bar" style="display: flex; justify-content: center; align-items: center; gap: 40px;">
  <div class="header-logo-container">
  <img src="/dev/assets/img/logo/logo-main.png" alt="XXX" class="logo-header">
</div>
  <div class="header-right">
    <ul class="main-menu">
      <li><a href="<?= BASE_URL ?>index.php">Home</a></li>
      <li class="has-submenu"><a href="<?= BASE_URL ?>about-us/index.php">About Us</a>
        <ul>
          <li><a href="<?= BASE_URL ?>about-us/who-we-are.php">Who We Are</a></li>
          <li><a href="<?= BASE_URL ?>about-us/our-mission.php">Our Mission</a></li>
          <li><a href="<?= BASE_URL ?>about-us/our-expertise.php">Our Expertise</a></li>
          <li><a href="<?= BASE_URL ?>about-us/our-team.php">Our Team</a></li>
          <li><a href="<?= BASE_URL ?>about-us/our-history.php">Our History</a></li>
        </ul>
      </li>
      <li class="has-submenu"><a href="<?= BASE_URL ?>what-we-do/index.php">What We Do</a>
        <ul>
          <li class="has-submenu"><a href="<?= BASE_URL ?>what-we-do/casting/index.php">Casting</a>
            <ul>
          <li><a href="/dev/what-we-do/casting/casting-matrix.php">Casting Matrix</a></li>
                        <li><a href="/dev/what-we-do/casting/investment-casting.php">Investment Casting</a></li>
                        <li><a href="/dev/what-we-do/casting/shell-moulding-cast.php">Shell Moulding Cast</a></li>
                        <li><a href="/dev/what-we-do/casting/sand-casting.php">Sand Casting</a></li>
                        <li><a href="/dev/what-we-do/casting/gravity-die-casting.php">Gravity Die Casting</a></li>
                        <li><a href="/dev/what-we-do/casting/lost-foam-casting.php">Lost Foam Casting</a></li>
                        <li><a href="/dev/what-we-do/casting/high-pressure-die-casting.php">High Pressure Die Casting</a></li>
                        <li><a href="/dev/what-we-do/casting/sintering.php">Sintering</a></li>
            </ul>
          </li>
            <li class="has-submenu">
                <a href="/dev/what-we-do/forging/index.php">Forging</a>
                    <ul>
                        <li><a href="/dev/what-we-do/forging/closed-die-forging.php">Closed Die Forging</a></li>
                        <li><a href="/dev/what-we-do/forging/open-die-forging.php">Open Die Forging</a></li>
                        <li><a href="/dev/what-we-do/forging/cold-forging.php">Cold Forging</a></li>
                        <li><a href="/dev/what-we-do/forging/seamless-and-rolled-ring-forgings.php">Seamless and Rolled Ring Forgings</a></li>
                        <li><a href="/dev/what-we-do/forging/multi-direction-forging.php">Multi Direction Forging</a></li>
                    </ul>
                </li>
     <li class="has-submenu">
           <a href="/dev/what-we-do/add-value/index.php">Add Value</a>
                    <ul>
                        <li><a href="/dev/what-we-do/add-value/assemblies.php">Assemblies</a></li>
                        <li><a href="/dev/what-we-do/add-value/surface-finishing.php">Surface Finishing</a></li>
                        <li><a href="/dev/what-we-do/add-value/machining.php">Machining</a></li>
                        <li><a href="/dev/what-we-do/add-value/3d-printed-cores-for-casting.php">3D Printed Cores for Casting</a></li>
                        <li><a href="/dev/what-we-do/add-value/3d-metal-printing.php">3D Metal Printing</a></li>
                    </ul>
                    </li>

      <li class="has-submenu">
          <a href="/dev/what-we-do/logistics/index.php">Logistics</a>
                <ul>
                <li><a href="/dev/what-we-do/logistics/supply-chain-management.php">Supply Chain Management</a></li>
                <li><a href="/dev/what-we-do/logistics/warehouse-product-stock-keeping.php">Warehouse / Product Stock Keeping</a></li>
                </ul>
                </li>
                </ul>
</li>

      <li><a href="<?= BASE_URL ?>projects/index.php">Projects</a></li>
      <li><a href="<?= BASE_URL ?>workflow.php">Workflow</a></li>
      <li><a href="<?= BASE_URL ?>industries-partners.php">Industries & Partners</a></li>
      <!--<li><a href="<?= BASE_URL ?>quality.php">Quality</a></li>-->
      <li><a href="<?= BASE_URL ?>contact.php">Contact</a></li>
      <!--<li><a href="<?= BASE_URL ?>terms.php">Terms</a></li>-->
    </ul>

    
    <div class="lang-select">
      
      <div class="lang-dropdown">
        <button class="lang-btn">EN</button>
        <ul class="lang-options">
          <li><a href="?lang=en">English</a></li>
          <li><a href="?lang=nl">Nederlands</a></li>
          <li><a href="?lang=pt">Português</a></li>
          <li><a href="?lang=de">Deutsch</a></li>
          <li><a href="?lang=zh">中文</a></li>
        </ul>
      </div>
    </div>
    
  </div>
</div>


<div class="menu-separator"></div>

<script>
function changeLanguage(lang) {
    window.location.href = `/${lang}/index.php`; // ou outro esquema de URLs por idioma
}
</script>

