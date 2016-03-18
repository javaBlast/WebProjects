<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "devtools";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
  }
if (empty($_POST["libtype"])) {
    $typeErr = "Name is required";
  } else {
    $libtype = $_POST["libtype"];
  }
if (empty($_POST["libsrc"])) {
    $srcErr = "Name is required";
  } else {
    $libsrc = $_POST["libsrc"];
  }




$sql = "INSERT INTO tools (name, libtype, libsrc)
VALUES ('$name', '$libtype', '$libsrc')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
