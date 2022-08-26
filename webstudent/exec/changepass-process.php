<?php
require("../../set-login.php");
include("../../set-db.php");
$uid = $_SESSION['genUID'];

if(isset($_POST['update'])){
//init variables
$opwd = $_POST['oldpass'];
$npwd = $_POST['newpass'];
$cpwd = $_POST['confirmpass'];




//missing var error handling
if((empty($opwd)) && (empty($npwd)) && (empty($cpwd))){
  echo "<script>alert('Old, new, and confirm passwords are missing');</script>";
  echo "<script>location.href = '../changepass.php'</script>";
} else if((empty($opwd)) && (empty($npwd))){
  echo "<script>alert('Old and new passwords are missing');</script>";
  echo "<script>location.href = '../changepass.php'</script>";
} else if((empty($npwd)) && (empty($cpwd))){
  echo "<script>alert('New and confirm passwords are missing');</script>";
  echo "<script>location.href = '../changepass.php'</script>";
} else if((empty($opwd)) && (empty($cpwd))){
  echo "<script>alert('Old and confirm passwords are missing');</script>";
  echo "<script>location.href = '../changepass.php'</script>";
} else if(empty($opwd)){
  echo "<script>alert('Old password is missing');</script>";
  echo "<script>location.href = '../changepass.php'</script>";
} else if(empty($npwd)){
  echo "<script>alert('New password is missing');</script>";
  echo "<script>location.href = '../changepass.php'</script>";
} else if(empty($cpwd)){
  echo "<script>alert('Confirm password is missing');</script>";
  echo "<script>location.href = '../changepass.php'</script>";
}

//select query
$qry="SELECT * FROM personalinformation WHERE uid = '$uid'";
$row=mysql_query($qry);
$fetchArr=mysql_fetch_array($row);

$oldpassred = $fetchArr['password'];

//change password process

if($oldpassred!=$opwd){
	echo "<script>alert('Wrong Old Password');</script>";
	echo "<script>location.href = '../changepass.php'</script>";
	}
else if($cpwd!=$npwd) {
	echo "<script>alert('New and Confirm Password does not match');</script>";
	echo "<script>location.href = '../changepass.php'</script>";
	}
else if($cpwd==$npwd){
    $sql = "UPDATE personalinformation SET password='".$npwd."' WHERE uid= $uid";
    $result = mysql_query($sql);
    echo "<script>alert('Record Updated Successfully');</script>";
    echo "<script>location.href = '../student-home.php'</script>";
  }else{}

}

?>
