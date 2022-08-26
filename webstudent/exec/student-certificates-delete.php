<?php
include('../../set-db.php');
$id =$_REQUEST['id'];




$idquery=mysql_query("SELECT * FROM `certificates`  WHERE id='$id'");
	while($idres = mysql_fetch_array($idquery)){
		$type = $idres['type'];
		
		if($type == 'pdf'){
			echo "<script>
			alert('PDF File Deleted');
			window.location.href='../student-certificates.php';
			</script>";
		}
		else if($type == 'img'){
			echo "<script>
			alert('Image File Deleted');
			window.location.href='../student-certificates.php';
			</script>";
		}
		
		
}
mysql_query("DELETE FROM certificates WHERE id = '$id'")
or die(mysql_error());  
	

?>