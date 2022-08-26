<?php
require("../../set-login.php");
include("../../set-db.php");
$uid = $_SESSION['genUID'];

$skill = $_POST['skill'];
$skilltype = $_POST['skilltype'];
$description = addslashes($_POST['description']);

if($skilltype==''){echo "<script>alert('Please Choose Skill Type.');</script>";echo "<script>location.href = '../student-resume-skills.php'</script>";}
else if($skill==''){echo "<script>alert('Skill is Missing.');</script>";echo "<script>location.href = '../student-resume-skills.php'</script>";}
else if($skilltype=='soft' && $skill!=''){
	mysql_query("INSERT INTO `skills` (`uid`, `type`, `skill`) VALUES ('$uid','$skilltype','$skill')");
	echo "<script>alert('Adding Soft Skill Success');</script>";echo "<script>location.href = '../student-resume-skills.php'</script>";
}
else if($skilltype=='technical' && $skill!='' && $description!=''){
	mysql_query("INSERT INTO `skills` (`uid`, `type`, `skill`, `description`) VALUES ('$uid','$skilltype','$skill','$description')");
	
	echo "<script>alert('Adding Technical Skill Success');</script>";echo "<script>location.href = '../student-resume-skills.php'</script>";
}



else{







}
?>