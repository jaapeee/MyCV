<?php
include('../../set-db.php');
$id =$_REQUEST['id'];


mysql_query("DELETE FROM skills WHERE id = '$id'")
or die(mysql_error());
header("location:../student-resume-skills.php");
	

?>