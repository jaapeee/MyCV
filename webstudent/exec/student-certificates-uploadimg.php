<?php
include('../../set-db.php');
require("../../set-login.php");
$uid = $_SESSION['genUID'];


if(isset($_POST["submitimg"])){
  $uploadsdir = "../../userasset/".$uid."/certimage/";
  $tmp_name = $_FILES["image"]["tmp_name"];
  $name = $_FILES["image"]["name"];
  move_uploaded_file($tmp_name, "$uploadsdir/$name");
  $directory = "../userasset/".$uid."/certimage/";
 

  $picdirectory = $directory . $name ;
  
  echo $picdirectory;

	if($name!=""){
			@mysql_query("INSERT INTO `certificates`(`uid`, `type`, `directory`, `filename`) VALUES ('$uid','img','$picdirectory','$name')");
			echo "<script>
			alert('Success');
			window.location.href='../student-certificates.php';
			</script>";
		  }else{
			echo "<script>
			alert('Failed');
			window.location.href='../student-certificates.php';
			</script>";
		  }
}
?>