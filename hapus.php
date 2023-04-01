<?php
$file_id = $_GET['fileid']; // ID of the file you want to delete
$tabel = $_GET["table"];
$direct_url = $_GET["direct"];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bpbdpekanbaru";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the file's path from the database
$sql = "SELECT file_path FROM $tabel WHERE file_id = $file_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $file_path = $row["file_path"];
} else {
    echo "File not found.";
}

// Delete the file from the server
if (file_exists($file_path)) {
    unlink($file_path);
}

// Delete the file from the database
$sql = "DELETE FROM $tabel WHERE file_id = $file_id";
if ($conn->query($sql) === TRUE) {
    echo "File deleted successfully.";

    if (!empty($direct_url)) {
        header("Location: " . $direct_url . ".php");
    } else {
        header("Location: viewDataPK.php");
    }
} else {
    echo "Error deleting file: " . $conn->error;
}

// Close the database connection
$conn->close();