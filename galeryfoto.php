<?php
require 'Header.php';
?>

<!-- JUDUL -->
<div class="container-kebencanaan mt-4">
  <h1 class="h1-container">Galeri Foto</h1>
</div>
<!-- JUDUL END -->
<!-- CONTENT -->
<?php
// Connect to database
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "bpbdpekanbaru";
$conn = new mysqli($servername, $username_db, $password_db, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// SQL query to retrieve all files data
$sql = "SELECT * FROM gallery";

// Execute the query
$result = mysqli_query($conn, $sql);
?>
<div class="mt-2 mb-4">
  <main class="foto">
    <?php
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        // var_dump($row)
        ?>
        <div class="konten shadow my-5 py-3 d-flex flex-column gap-2 p-3" style="margin-right: 10px;">
          <img src="<?php echo "upload/" . $row['file_name'] ?>" width="300px" height="300px">
          <?php
          if (isset($_SESSION['user_id'])) {
            ?>
            <a href="hapus?direct=galeryfoto&table=gallery&fileid=<?php echo $row["file_id"] ?>"
              class="btn btn-outline-danger btn-delete-foto" name="<?php echo $row['file_id'] ?>">
              Delete
            </a>
            <?php
          } ?>
        </div>
        <?php
      }
    } else {
      ?>
      <h3 class="my-3">Tidak Ada Gambar Tersimpan</h3>
      <?php
    }
    ?>
  </main>
</div>

<?php
if (isset($_SESSION['user_id'])) {
  ?>
  <div align="center">
    <a href="InputDataGalery">
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
<!-- <script>
  const btnDeleteFoto = document.getElementsByClassName("btn-delete-foto");
  for (let i = 0; i < btnDeleteFoto.length; i++) {
    btnDeleteFoto[i].addEventListener('click', (e) => {
      console.log(e.target.name);

    })
  }
</script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>