<?php
require 'Header.php';
?>
  <!-- JUDUL -->
  <div class="container-kebencanaan mt-4">
    <h1 class="h1-container">Perjanjian Kinerja</h1>
  </div>
  <!-- JUDUL END -->

  <!-- CONTENT --> 
<div class="row justify-content-center m-3 mt-4 ">
<div class="card col-4 m-2 shadow my-5 py-3" style="width: 18rem; flex;">
  <img src="frontend/images/document.png" class="card-img-top" alt="...">
  <div class="card-body" align="center">
    <h5 class="card-title">Perjanjian Kinerja BPBD</h5>
    <p class="card-text">Perjanjian Kinerja BPBD Tahun 2019 Kota Pekanbaru</p>
    <a href="https://drive.google.com/file/d/1iYUCuKIAMJcb3kwpYROzokzXd9r67sdr/view?usp=share_link" class="btn btn-primary">
      Buka Document</a>
  </div>
</div>
<div class="card col-4 m-2 shadow my-5 py-3" style="width: 18rem; flex;">
  <img src="frontend/images/document.png" class="card-img-top" alt="...">
  <div class="card-body" align="center">
    <h5 class="card-title">Perjanjian Kinerja BPBD</h5>
    <p class="card-text">Perjanjian Kinerja BPBD Tahun 2020 Kota Pekanbaru</p>
    <a href="https://drive.google.com/file/d/1-IIwc9lUXboUES8dhexzP1uqKUuJMcfn/view?usp=share_link" class="btn btn-primary">
      Buka Document</a>
  </div>
</div>
<div class="card col-4 m-2 shadow my-5 py-3" style="width: 18rem; flex;">
  <img src="frontend/images/document.png" class="card-img-top" alt="...">
  <div class="card-body" align="center">
    <h5 class="card-title">Perjanjian Kinerja BPBD</h5>
    <p class="card-text">Perjanjian Kinerja BPBD Tahun 2021 Kota Pekanbaru</p>
    <a href="#" class="btn btn-primary">
      Buka Document</a>
  </div>
</div>
</div>
<!-- CONTENT END -->
<?php
  if(isset($_SESSION['user_id'])) {
?>
    <div align="center">
      <a href="InputDataPK">
        <button type="button" class="btn btn-primary" style="margin-bottom: 100px;">+ Tambah Data</button>
      </a>
    </div>
<?php
  } else {
    
    // Session variable 'user_id' does not exist
  }
?>
 <!-- FOOTER -->
<div id="footer" style="background-color: #002E94;">
  <div class="container">
    <div class="row">
      <div class="col d-none d-md-block">
        <div class="logo mt-4">
          <div class="img"><img src="frontend/images/logobpbd.png" alt="" class="img-fluid">
            <div class="text-logo  d-none d-md-block">
              <strong style="margin-left: 40px">BPBD <br> Kota Pekanbaru</strong>
            </div>
            <div class="text-logo  d-block d-sm-none">
              <strong style="margin-left: 0px">BPBD <br> Kota Pekanbaru</strong>
            </div>
          </div>
        </div>
      </div>
      <div class="col  d-none d-md-block">
        <div class="headline text-white mt-4 mb-4 pb-2 text-uppercase" style="color: white;">
          <strong>Kantor Pusat</strong>
        </div>
        <div class="txt">
          <strong>BPBD Kota Pekanbaru - Jl. Mustafa Sari No.1</strong>
          <br>Telp.0811-76-51464
          <br>Emergency.112
          <br>Email: bpbddatapku@gmail.com
        </div>
        <div class="txt" style="margin-top: 10px; margin-bottom: 10px;">
          <strong>Pusdalop BPBD</strong>
          <br>Telp. +62 21 29827444 , 117
          <br>+62 812 1237 575
          <br>Email: bpbddatapku@gmail.com</br>
        </div>
      </div>
      <!-- TERLIHAT PADA HP -->
      <div class="col  d-block d-sm-none" style="margin-bottom: 10px;">
        <div class="headline text-white mt-4 mb-4 pb-2 text-uppercase" style="color: white; text-align: center;">
          <strong>Kantor Pusat</strong>
        </div>
        <div class="txt">
          <strong>BPBD Kota Pekanbaru - Jl. Mustafa Sari No.1</strong>
          <br>Telp.0811-76-51464
          <br>Emergency.112
          <br>Email: bpbddatapku@gmail.com
        </div>
        <div class="txt" style="margin-top: 10px; margin-bottom: 10px;">
          <strong>Pusdalop BPBD</strong>
          <br>Telp. +62 21 29827444 , 117
          <br>+62 812 1237 575
          <br>Email: bpbddatapku@gmail.com</br>
        </div>
      </div>

      <div class="col d-none d-md-block">
        <div class="headline text-white mt-4 mb-4 pb-2 text-uppercase" style="color: white;">
          <strong>Tautan Terkait</strong>
        </div>
        <div class="sosmed">
          <ul style="list-style: none; text-decoration: none; background-color:#002E94;">
            <li style="width: 20%; height: 20%;"><a href="#" target="_blank"><img src="frontend/images/logofb.png"
                  alt="Facebook BPBD" class="img-fluid"></a></li>
            <li style="width: 20%; height: 20%;"><a href="#" target="_blank"><img src="frontend/images/logoig.png"
                  alt="Instagram BPBD" class="img-fluid"></a></li>
            <li style="width: 20%; height: 20%;"><a href="#" target="_blank"><img src="frontend/images/logoyt.png"
                  alt="Youtube  BPBD" class="img-fluid"></a></li>
            <li style="width: 20%; height: 20%;"><a href="#" target="_blank"><img src="frontend/images/logotwt.png"
                  alt="Twitter BPBD" class="img-fluid"></a></li>

          </ul>
        </div>
      </div>
      <div class="col d-none d-md-block" style="color:white">
        <div class="headline text-white mt-4 mb-4 pb-2 text-uppercase" style="color: white;">
          <strong>Berlangganan</strong>
        </div>
        <div class="subscriber">
          <form action="">
            <div class="form-group">
              <label for="" style="color: white;">Dapatkan informasi terbaru seputar bencana di Indonesia</label>
              <input type="text" class="form-control" id="subscriber-email" placeholder="E-mail"
                style="background-color: white; color: rgb(255, 255, 255); margin-top: 20px;">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" style="margin-top: 26px;">
              <label class="form-check-label" for="exampleCheck1" style="margin-top: 20px;">Saya setuju menerima
                pemberitaan melalui email saya.</label>
            </div>
            <button class="btn btn-primary" style="margin-top: 20px;">
              Kirim
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FOOTER END -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>