<?
$uid = $_REQUEST['uid'];

include("../../set-db.php");

$selectid = mysql_fetch_array(mysql_query("SELECT * FROM `personalinformation` WHERE uid='$uid'"));
$studentuid = $selectid['uid'];
$bookmarkstatus = $selectid['bookmark'];

echo $studentuid;
echo $bookmarkstatus;
	if($bookmarkstatus == "0"){
		mysql_query("UPDATE `personalinformation` SET `bookmark`='1' WHERE uid='$studentuid'");
		header("location:../faculty-home.php");
	}
	else if($bookmarkstatus == "1"){
		mysql_query("UPDATE `personalinformation` SET `bookmark`='0' WHERE uid='$studentuid'");
		header("location:../faculty-home.php");
	}

?>