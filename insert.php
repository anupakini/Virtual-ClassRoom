
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "virtualclass";
$txtName = $_POST['txtName'];
$txtUSN = $_POST['txtUSN'];
$txtComment = $_POST['txtComment'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Comments (txtName, txtUSN, txtComment) VALUES ('$txtName', '$txtUSN', '$txtComment')";

if ($conn->query($sql) === TRUE) {
  echo "<script> alert('New record created successfully') </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

