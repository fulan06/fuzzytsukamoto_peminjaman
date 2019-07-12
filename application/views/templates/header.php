<!DOCTYPE html>
<html>

<head>
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="<?= base_url() ?>css\bootstrap.min.css" media="screen">
  <!-- <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css"> -->
</head>

<body>
  <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
    <div class="container">
      <a href="<?= base_url() ?>" class="navbar-brand">Fuzzy Tsukamoto Koperasi</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">

          <li class="nav-item <?= $menu_home ?>">
            <a class="nav-link" href="<?= base_url() ?>">Home</a>
          </li>
          <li class="nav-item <?= $menu_nasabah ?>">
            <a class="nav-link" href="<?= base_url() ?>nasabah">Nasabah</a>
          </li>
          <li class="nav-item <?= $menu_alternatif ?>">
            <a class="nav-link" href="<?= base_url() ?>alternatif">Alternatif</a>
          </li>
          <li class="nav-item <?= $menu_rules ?>">
            <a class="nav-link" href="<?= base_url() ?>rules">Rules</a>
          </li>
          <li class="nav-item <?= $menu_kriteria ?>">
            <a class="nav-link" href="<?= base_url() ?>kriteria">Kriteria</a>
          </li>
          <li class="nav-item <?= $menu_perhitungan ?>">
            <a class="nav-link" href="<?= base_url() ?>perhitungan">Perhitungan</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto <?= $menu_nama ?> ">
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?= $nama ?><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="<?= base_url(); ?>user">Data User</a>
              <a class="dropdown-item" href="<?= base_url(); ?>login/logout">Logout</a>
            </div>
          </li>
        </ul>

      </div>
    </div>
  </div>