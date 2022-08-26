<?
include("../../set-db.php");

$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];
$studentnumber = $_POST['sno'];
$password = $_POST['pass'];
$confirmpassword = $_POST['cpass'];
$birthdate = $_POST['date'];
$sex = $_POST['sex'];
$mobilenum = $_POST['mno'];
	$newmobilenum= "+63".$mobilenum;
$collegecourse = $_POST['collegecourse'];

$defaultimg = "images/puplogo.jpg";

$verifystudnum=mysql_query ("SELECT * FROM personalinformation WHERE studentnumber='$studentnumber'");
if($verifystudnum) {
	if (mysql_num_rows ($verifystudnum) >0) {
		echo "<script>alert('Student Number is already used');</script>";
		echo "<script>location.href = '../student-register.php'</script>";
	}
	else if($password != $confirmpassword){
	echo "<script>alert('Password and Confirm Password does not match');</script>";
	echo "<script>location.href = '../student-register.php'</script>";
	}
	
	else if($password == $confirmpassword){
	$getcollegecoursequery=mysql_query("SELECT * FROM courses WHERE course='$collegecourse'");
	while($getcollegecourse = mysql_fetch_array($getcollegecoursequery)){
		$college = $getcollegecourse['college'];
		$course = $getcollegecourse['course'];
		
		mysql_query("INSERT INTO `cvsystem`.`personalinformation` (
		`uid` ,
		`profilepic` ,
		`firstname` ,
		`middlename` ,
		`lastname` ,
		`studentnumber` ,
		`password` ,
		`emailaddress` ,
		`currentposition` ,
		`birthdate` ,
		`birthplace` ,
		`gender` ,
		`mobilenumber` ,
		`address` ,
		`religion` ,
		`language` ,
		`aboutme` ,
		`viewcourse` ,
		`currentcourse` ,
		`school` ,
		`iskolar` ,
		`bookmark` ,
		`resumestatus`
		)
		VALUES (
		NULL , '$defaultimg', '$firstname', '$middlename', '$lastname', '$studentnumber', '$password', '', '', '$birthdate', '', '$sex', '$newmobilenum', '', '', '', '', '$course', '$course', '$college', '', '0', '0'
		);");
		
		$getnewaccountuidquery=mysql_query("SELECT * FROM personalinformation WHERE studentnumber='$studentnumber'");
			while($getnewaccountuidres = mysql_fetch_array($getnewaccountuidquery)){
				$newaccountuid = $getnewaccountuidres['uid'];
				
				mkdir("../../userasset/".$newaccountuid);
				mkdir("../../userasset/".$newaccountuid."/certimage");
				mkdir("../../userasset/".$newaccountuid."/certpdf");
				
				echo "<script>alert('Account Register Success!');</script>";
				echo "<script>location.href = '../student-login.php'</script>";
			}
		
		}
}
}






?>