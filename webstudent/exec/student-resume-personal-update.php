<?php
require("../../set-login.php");
include("../../set-db.php");
$uid = $_SESSION['genUID'];

$profilepic = $_FILES["profilepic"]["name"];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$bday = $_POST['bday'];
$bplace = $_POST['bplace'];
$sexoption = $_POST['sexoption'];
$sno = $_POST['sno'];
$mno = $_POST['mno'];
$religion = $_POST['religion'];
$language = $_POST['language'];
$emailadd = $_POST['emailadd'];
$address = $_POST['address'];
$currentposition = $_POST['currentposition'];
$collegecourse = $_POST['collegecourse'];
$iskolar = $_POST['iskolar'];
$aboutme = addslashes($_POST['aboutme']);

if($fname==''){echo "<script>alert('First Name is Missing. Placing Old Datas');</script>";echo "<script>location.href = '../student-resume-personal.php'</script>";}
else if($mname==''){echo "<script>alert('Middle Name is Missing. Placing Old Datas');</script>";echo "<script>location.href = '../student-resume-personal.php'</script>";}
else if($lname==''){echo "<script>alert('Last Name is Missing. Placing Old Datas');</script>";echo "<script>location.href = '../student-resume-personal.php'</script>";}
else if($bday==''){echo "<script>alert('Birthday is Missing. Placing Old Datas');</script>";echo "<script>location.href = '../student-resume-personal.php'</script>";}
else if($bplace==''){echo "<script>alert('Birth Place is Missing. Placing Old Datas');</script>";echo "<script>location.href = '../student-resume-personal.php'</script>";}
else if($sexoption==''){echo "<script>alert('Sex is Missing. Placing Old Datas');</script>";echo "<script>location.href = '../student-resume-personal.php'</script>";}
else if($sno==''){echo "<script>alert('Student Number is Missing. Placing Old Datas');</script>";echo "<script>location.href = '../student-resume-personal.php'</script>";}
else if($mno==''){echo "<script>alert('Mobile Number is Missing. Placing Old Datas');</script>";echo "<script>location.href = '../student-resume-personal.php'</script>";}
else if($religion==''){echo "<script>alert('Religion is Missing. Placing Old Datas');</script>";echo "<script>location.href = '../student-resume-personal.php'</script>";}
else if($language==''){echo "<script>alert('Language Spoken is Missing. Placing Old Datas');</script>";echo "<script>location.href = '../student-resume-personal.php'</script>";}
else if($emailadd==''){echo "<script>alert('Email Address is Missing. Placing Old Datas');</script>";echo "<script>location.href = '../student-resume-personal.php'</script>";}
else if($address==''){echo "<script>alert('Address is Missing. Placing Old Datas');</script>";echo "<script>location.href = '../student-resume-personal.php'</script>";}
else if($currentposition==''){echo "<script>alert('Current Position is Missing. Placing Old Datas');</script>";echo "<script>location.href = '../student-resume-personal.php'</script>";}
else if($collegecourse==''){echo "<script>alert('College/Course is Missing. Placing Old Datas');</script>";echo "<script>location.href = '../student-resume-personal.php'</script>";}
else if($iskolar==''){echo "<script>alert('Iskolar is Missing. Placing Old Datas');</script>";echo "<script>location.href = '../student-resume-personal.php'</script>";}
else{

mysql_query("UPDATE `personalinformation` SET `firstname`='$fname'						WHERE uid='$uid'");
mysql_query("UPDATE `personalinformation` SET `middlename`='$mname'						WHERE uid='$uid'");
mysql_query("UPDATE `personalinformation` SET `lastname`='$lname'						WHERE uid='$uid'");
mysql_query("UPDATE `personalinformation` SET `studentnumber`='$sno'					WHERE uid='$uid'");
mysql_query("UPDATE `personalinformation` SET `emailaddress`='$emailadd'				WHERE uid='$uid'");
mysql_query("UPDATE `personalinformation` SET `currentposition`='$currentposition'		WHERE uid='$uid'");
mysql_query("UPDATE `personalinformation` SET `birthdate`='$bday'						WHERE uid='$uid'");
mysql_query("UPDATE `personalinformation` SET `birthplace`='$bplace'					WHERE uid='$uid'");
mysql_query("UPDATE `personalinformation` SET `gender`='$sexoption'						WHERE uid='$uid'");
mysql_query("UPDATE `personalinformation` SET `mobilenumber`='$mno'						WHERE uid='$uid'");
mysql_query("UPDATE `personalinformation` SET `address`='$address'						WHERE uid='$uid'");
mysql_query("UPDATE `personalinformation` SET `religion`='$religion'					WHERE uid='$uid'");
mysql_query("UPDATE `personalinformation` SET `language`='$language'					WHERE uid='$uid'");
mysql_query("UPDATE `personalinformation` SET `iskolar`='$iskolar'						WHERE uid='$uid'");
mysql_query("UPDATE `personalinformation` SET `resumestatus`='1'						WHERE uid='$uid'");
mysql_query("UPDATE `personalinformation` SET `aboutme`='$aboutme'						WHERE uid='$uid'");

$coursessepquery=mysql_query("SELECT * FROM courses WHERE course='$collegecourse'");
	while($coursesepres = mysql_fetch_array($coursessepquery)){
	
	$newcourse = $coursesepres['course'];
	$newcollege = $coursesepres['college'];
	
	mysql_query("UPDATE `personalinformation` SET `viewcourse`='$newcourse'					WHERE uid='$uid'");
	mysql_query("UPDATE `personalinformation` SET `currentcourse`='$newcourse'				WHERE uid='$uid'");
	mysql_query("UPDATE `personalinformation` SET `school`='$newcollege'					WHERE uid='$uid'");
	}
	


if($profilepic != ''){
	$movepicdirectory = "../../userasset/".$uid."/";
	$tmp_name = $_FILES["profilepic"]["tmp_name"];
	$name = $_FILES["profilepic"]["name"];
	move_uploaded_file($tmp_name, "$movepicdirectory/$name");
	$databasedirectory = "userasset/".$uid."/"; 
	
	$newdirectory = $databasedirectory.$name;
	
	mysql_query("UPDATE `personalinformation` SET `profilepic`='$newdirectory'						WHERE uid='$uid'");
	
	
}else{
}






echo "<script>alert('Update Success');</script>";echo "<script>location.href = '../student-resume-personal.php'</script>";

}
?>