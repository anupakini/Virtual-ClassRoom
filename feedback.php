<!DOCTYPE html>
<html>

<head>
    <title>Subject</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="Styles.css" rel="stylesheet" id="bootstrap-css1">
    <link href="timetable.css" rel="stylesheet" id="bootstrap-css1">
    
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
    <div class="header">
        <nav class="main-navigation">
            <div class="navbar-header animated fadeInUp">
                <a class="navbar-brand" href="#">Virtual Class</a>
            </div>
            <ul class="nav-list">
                <li class="nav-list-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-list-item">
                    <a href="resource.php" class="nav-link">Resources</a>
                </li>
                <li class="nav-list-item">
                    <a href="timetable.php" class="nav-link">TimeTable</a>
                </li>
                <li class="nav-list-item">
                    <a href="subject.php" class="nav-link">Subject</a>
                </li>
            </ul>
        </nav>
    </div>
   <div>
   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "virtualclass";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, txtName, txtUSN, txtComment,reg_date FROM Comments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    //txtName, txtUSN, txtComment,reg_date
    while($row = $result->fetch_assoc()) {
        echo "<div class='card text-center'>
        <div class='card-header'>
        ". $row["txtName"]. "
        </div>
        <div class='card-body'>
          <h5 class='card-title'>USN : ". $row["txtUSN"]. "</h5>
          <p class='card-text'>Comments :  ". $row["txtComment"]. "</p>
        </div>
        <div class='card-footer text-muted'>
        ". $row["reg_date"]. "
        </div>
      </div>";
        
    }
} else {
    echo "0 results";
}

$conn->close();
?>
   </div>
  
</body>

</html>