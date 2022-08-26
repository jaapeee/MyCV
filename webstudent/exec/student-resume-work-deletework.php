<?php 
 require("../../set-login.php");
 $uid = $_SESSION['genUID'];
      include("../../set-db.php");
                
        $id = $_REQUEST['id'];

       mysql_query("DELETE FROM workexperience WHERE id = '$id'")
         or die(mysql_error());
         header("location:../student-resume-work.php");


      ?>
