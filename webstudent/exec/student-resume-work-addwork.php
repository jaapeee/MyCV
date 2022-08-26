<?php 
 require("../../set-login.php");
 $uid = $_SESSION['genUID'];
      include("../../set-db.php");
                

                if(isset($_POST['submitBTN'])){
                  $companyname= $_POST['companyname'];
                  $country=$_POST['country'];
                   $year=$_POST['year'];
                   $vendor=$_POST['vendor'];
                   $description = addslashes($_POST['description']);

                  
                 mysql_query("INSERT INTO workexperience (uid, companyname, country, year, vendor, description) VALUES ('$uid','$companyname','$country','$year','$vendor','$description')");
                 header("location:../student-resume-work.php");
         }

      ?>
