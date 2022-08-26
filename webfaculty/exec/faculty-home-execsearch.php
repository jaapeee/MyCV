<?php
if(isset($_POST['search'])){
	$searched = $_POST['searchname'];
	
	echo $searched;
	header("location:../faculty-home-search.php?search=$searched");
}
?>