<?php
require 'Header.php';
?>


<!-- data -->
<div class="container-kebencanaan mt-4 ">
  <h1 class="h1-container">Data Darlog</h1>
</div>
<!-- <h1 align="center" class="pt-3" style="margin-top: 100px;">Data Darlog</h1> -->
<div class="row justify-content-center m-3 ">
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
$sql = "SELECT * FROM darlog";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   ?>
   <div class="card col-3 m-2" style="width: 18rem;flex;">
<?php
    if ($row['file_type'] == 'image/jpeg' || $row['file_type'] == 'image/png' || $row['file_type'] == 'image/jpg') {
      echo "<img src='upload/" . $row['file_name'] . "'width='100%' height= '100%'>";
    } else {
      echo "<img src='frontend/images/document.png'width='100%' height= '100%'>";
    }
    ?>
    <!-- <img src="frontend/images/document.png" class="card-img-top" alt="..."> -->
    <div class="card-body d-flex flex-column justify-content-between">
      <h5 class="card-title">
        <?php echo $row["perihal"] ?>
      </h5>
      <p class="card-text">
        <?php echo $row["deskripsi"] ?>
      </p>
      <?php
      if (isset($_SESSION['user_id'])) {
?>
<div class="d-flex flex-column gap-2">
              <a href="upload/<?php echo $row['file_name'] ?>" class="btn btn-primary" style="border-radius: 4px;"
                target="_blank">
                Lihat File
              </a>
              <a href="hapus?direct=viewDataDarlog&table=darlog&fileid=<?php echo $row["file_id"] ?>" class="btn btn-outline-danger d-block"
                style="border-radius: 4px;" name="<?php echo $row['file_id'] ?>">
                Delete
              </a>
            </div>
<?php
  } else {
    
    // Session variable 'user_id' does not exist
  }
?>
  
</div>
</div>
<?php
  }
} else {
  ?>
    <div class="card col-3 m-2" style="width: 18rem;flex;">
<img src="frontend/images/document.png" class="card-img-top" alt="...">
<div class="card-body">
<h1 class="text-center">No Data Found</h1>
</div>
</div>
  <?php
}   
// Close the database connection
mysqli_close($conn);
 
?>
    </div>
</div>
<?php
  if(isset($_SESSION['user_id'])) {
?>
 <div align="center">
  <a href="InputDataDarlog">
    <button type="button" class="btn btn-primary" style="margin-bottom: 100px;">+ Tambah Data</button>
  </a>
</div>
<?php
  } else {
    
    // Session variable 'user_id' does not exist
  }
?>


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
</body>
<!-- <script src="frontend/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>