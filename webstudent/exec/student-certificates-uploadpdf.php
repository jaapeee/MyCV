<?php
include('../../set-db.php');

require("../../set-login.php");
$uid = $_SESSION['genUID'];



if (isset($_POST['submit'])) {
          $pdf=$_FILES['filepdf']['name'];
          $pdf_type=$_FILES['filepdf']['type'];
          $pdf_size=$_FILES['filepdf']['size'];
          $pdf_tem_loc=$_FILES['filepdf']['tmp_name'];
          $pdf_store="../../userasset/".$uid."/certpdf/".$pdf;
          move_uploaded_file($pdf_tem_loc,$pdf_store);
		  
		  $pdfdirectory="../userasset/".$uid."/certpdf/".$pdf;
		  $symbolconvert = str_replace(array('`','#','^'), array('%60','%23','%5e'), $pdfdirectory);
		  
		  if($pdf!=""){
			@mysql_query("INSERT INTO `certificates`(`uid`, `type`, `directory`, `filename`) VALUES ('$uid','pdf','$symbolconvert','$pdf')");
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