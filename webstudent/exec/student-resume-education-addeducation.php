<?php 
 require("../../set-login.php");
 $uid = $_SESSION['genUID'];
      include("../../set-db.php");
                

                if(isset($_POST['submitBTN'])){
                   $courselevel= $_POST['courselevel'];
                   $schoolname=$_POST['schoolname'];
                   $country=$_POST['country'];
                   $year=$_POST['year'];

                  
                 mysql_query("INSERT INTO education (uid, courselevel, schoolname, country, year) VALUES ('$uid','$courselevel','$schoolname','$country','$year')");
                 header("location:../student-resume-education.php");
         }

      ?>
