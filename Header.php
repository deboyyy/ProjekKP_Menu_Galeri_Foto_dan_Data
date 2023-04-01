<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="frontend/images/logobpbd.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylevideofoto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data</title> 
    <style>
      .responsive{
    width: 100%;
    height: auto;
}
.bg-topbar{
    background-image: url('./frontend/images/pucukrebung.png');
    background-size: contain;
    background-color: #002E94;
    height: 35px;
    width: 100vw;
}
.h1{

}
    </style>
</head> 

<body>
<div class="fixed-top">
  <div class="bg-topbar"></div>
  <nav class="navbar navbar-expand-lg navbar-dark  responsive" style="background-color: #002E94;">
    <div class="container-fluid d-flex justify-content-between">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand d-flex flex-column flex-lg-row gap-lg-2 align-items-center" href="#">
        <img src="frontend/images/logobpbd.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
        <span class="d-none d-md-block">BPBD Kota Pekanbaru</span>
      </a>
      <button type="button" class="btn d-lg-none d-block" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Login" href="#">
        <img src="frontend/images/login.png" width="25" height="25" class="rounded mx-auto d-block" alt="">
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
              <li><a class="dropdown-item" href="#">Sejarah</a></li>
              <li><a class="dropdown-item" href="#">Visi Misi</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Berita</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Informasi Publik
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="peraturankebencanaan">Peraturan Kebencanaan</a></li>
              <li><a class="dropdown-item" href="renstrabpbd">Renstra BPBD</a></li>
              <li><a class="dropdown-item" href="renjabpbd">Renja BPBD</a></li>
              <li><a class="dropdown-item" href="indikatorkinerjautama">Indikator Kinerja Utama</a></li>
              <li><a class="dropdown-item" href="perjanjiankinerja">Perjanjian Kinerja</a></li>
              <li><a class="dropdown-item" href="rencanaaksi">Rencana Aksi</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="videokegiatan">Video Kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="galeryfoto">Galeri Foto</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Laporan Bencana
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="rekapanlaporanbanjir">Rekapan Laporan Banjir</a></li>
              <li><a class="dropdown-item" href="rekapanlaporanlongsor">Rekapan Laporan Longsor</a></li>
              <li><a class="dropdown-item" href="rekapanlaporankebakaranhutandanlahan">Rekapan Laporan Kebakaran Lahan dan Hutan</a></li>
              <li><a class="dropdown-item" href="rekapanlaporananginputingbeliung">Rekapan Laporan Angin Puting Beliung</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Data
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="viewDataPK">PK</a></li>
              <li><a class="dropdown-item" href="viewDataDarlog">Darlog</a></li>
              <li><a class="dropdown-item" href="viewDataRR">RR</a></li>
              <li><a class="dropdown-item" href="viewDataPUSDATIN">PUSDATIN</a></li>
            </ul>
          </li>
          <li>
          <?php
  if(isset($_SESSION['user_id'])) {
?>
   <button type="button" class="btn btn-primary d-none d-lg-block" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Logout" onclick="location.href='logout'">
   Logout
  </button>
<?php
  } else {
    ?>
    <button type="button" class="btn d-none d-lg-block" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Login" onclick="location.href='login'">
    <img src="frontend/images/login.png" width="25" height="25" class="rounded mx-auto d-block" alt="">
  </button>
  
  <?php
  }
?>
          
        </li>
      </div>
    </div>
  </nav>
  </div>
</body>
</html>