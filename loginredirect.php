<?php

$txtUserName = $_POST['txtUserName'];
$txtpassword = $_POST['txtpassword'];

if ($txtUserName == 'teacher' && $txtpassword == 'teacher@123') {
  echo "<script> window.open('feedback.php','_self') </script>";
} else if($txtpassword == '') {
  echo "<script> alert('Please enter the password'); window.open('login.php','_self')  </script>";
  
}
else {
    echo "<script> alert('Error on login. Please try again.'); window.open('login.php','_self')  </script>";
    
  }

?>
