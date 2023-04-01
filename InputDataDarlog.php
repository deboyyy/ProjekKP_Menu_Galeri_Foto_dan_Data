<?php
require 'Header.php';
?>
<!-- form -->
<div class="container-kebencanaan mt-4">
  <h1 class="h1-container">Input Data Darlog</h1>
</div>
<div class="row justify-content-center pt-5">
  <div class="col-6 ">
    <form action="InputDataDarlog.php" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="perihal" class="form-label">Perihal</label>
        <input type="text" class="form-control" id="perihal" name="perihal" aria-describedby="perihal" required>
      </div>
      <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
      </div>
      <div class="mb-3">
        <label for="inputfile" class="form-label">Masukkan file yang ingin disimpan</label>
        <input class="form-control" type="file" id="inputfile" name="inputfile" multiple>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a class="btn btn-outline-danger" href="viewDataDarlog" role="button">Cancel</a>
    </form>
  </div>
</div>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  try {
    // Establish a connection to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bpbdpekanbaru";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $file_name = $_FILES['inputfile']['name'];
    $file_type = $_FILES['inputfile']['type'];
    $file_size = $_FILES['inputfile']['size'];
    $file_tmp = $_FILES['inputfile']['tmp_name'];

    // Move the uploaded file to a permanent location on the server
    $upload_dir = 'upload/';
    $file_path = $upload_dir . $file_name;
    move_uploaded_file($file_tmp, $file_path);

    // Insert the file's metadata into the database
    $perihal = $_POST['perihal'];
    $deskripsi = $_POST['deskripsi'];
    $user_id = $_SESSION['user_id'];
    $upload_date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO darlog (file_name, file_type, file_size, file_path, perihal, deskripsi, user_id, upload_date) VALUES ('$file_name', '$file_type', $file_size, '$file_path', '$perihal', '$deskripsi', $user_id, '$upload_date')";
    // Execute the query

    // Redirect to the view data page

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";

      exit;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }
}
?>
</body>
<!-- <script src="frontend/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>