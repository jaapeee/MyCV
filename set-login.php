<?php
		//Start session
		session_start();
		
		
		//Check whether the session variable $ESS_MEMBER_ID is present or not
		if(!isset($_SESSION['genUID']) || (trim($_SESSION['genUID'])==''))
		{
			echo "<script>alert('Error. Please Login First');</script>";
			echo "<script>location.href = 'student-login.php'</script>";
		}
?>