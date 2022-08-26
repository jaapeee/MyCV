<!DOCTYPE html>
<?php
require("../set-login.php");
$uid = $_SESSION['genUID'];
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="../css/student-home.css"/>
		<title>Student Home</title>
		<link rel="preconnect" href="https://fonts.googleapis.com"/>
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,800;0,900;1,400&display=swap" rel="stylesheet"/>

		<script type="text/javascript">
			function divisionjava() {
  			var x = document.getElementById("options-wrap");
  			if (x.style.display === "none") {
    		x.style.display = "block";
  				} else {
    		x.style.display = "none";
  				}
			}

		</script>
	</head>
	<body>
		<center>
		<div class="header">
			<div class="logo"><a href="student-home.php"><img src="../images/mycv.png" width="130px" height="60px"></a></div>
			<div class="home"><a href="student-home.php">Home</a></div>
			<div class="certificates"><a href="student-certificates.php">Certificates</a></div>
			
				<?php
				include("../set-db.php");
				$minipicquery=mysql_query("SELECT * FROM personalinformation WHERE uid='$uid'");
					while($minipicres = mysql_fetch_array($minipicquery)){
				?>
			<div class="profileoptions"><input type="image" src="../<?echo $minipicres['profilepic'];?>" alt="settings" width="35px" height="35px" value="settings" onclick="divisionjava()"></div>
				<?}?>
			
				<div class="options-wrap" id="options-wrap">
					<table class="options">
						<tr><th class="changepass" cellspacing="0px" cellpadding="2px"><a href="changepass.php">Change Password</a></th></tr>
						<tr><th class="logout" cellspacing="0px" cellpadding="2px"><a href="exec/exec-logout.php">Logout</a></th></tr>
					</table>		
				</div>
		</div>
		
		
		
		
		
		<?php
		include("../set-db.php");
		
						$personalinfoquery=mysql_query("SELECT * FROM personalinformation WHERE uid='$uid'");
							while($personalinfores = mysql_fetch_array($personalinfoquery)){
		?>

		<div class="mainbody">
			<div class="leftside">
				<div class="personalinfo">
					<div class="framebig"><img src="../<?echo $personalinfores['profilepic'];?>" width="170px" height="170px"></div><br>
					<div class="name"><?echo $personalinfores['firstname'];?> <?echo $personalinfores['lastname'];?></div>
					<div class="stnumber"><?echo $personalinfores['currentposition'];?></div><br>
					<div class="email"><?echo $personalinfores['emailaddress'];?></div>
					<div class="email"><?echo $personalinfores['address'];?></div>
					<div class="email"><?echo $personalinfores['birthdate'];?></div>
					<div class="email"><?echo $personalinfores['birthplace'];?></div>
					<div class="email"><?echo $personalinfores['gender'];?></div>
					<div class="email"><?echo $personalinfores['religion'];?></div>
					<div class="email"><?echo $personalinfores['language'];?></div><br>
					<div class="stnumber"><?echo $personalinfores['studentnumber'];?></div>
					<div class="stnumber"><?echo $personalinfores['school'];?></div>
					<div class="stnumber"><?echo $personalinfores['currentcourse'];?></div>

					<div class="bottominfo" style="margin-top: 10%;">
						<a href="student-resume.php"><div class="viewresume">View Resume</div></a>
						<a href="student-certificates.php"><div class="viewcerts">View Certificates</div></a>
					</div>
				</div>
			</div>
			<div class="rightside">
				<div class="aboutme">
					<div class="miniheader">About Me</div>
					<div class="textaboutme"><p><?echo $personalinfores['aboutme'];?></p></div>
				</div>
				
		<?}?>
				
				
				
				
				
				
				
				
				
				
				
				
				
				<div class="skills">
					<div class="miniheader">Skills</div>
					<div class="leftsidess">
						<?php 
						include("../set-db.php");

						$skillssoftquery=mysql_query("SELECT * FROM skills WHERE uid='$uid' and type='soft'");
							while($skillssoftres = mysql_fetch_array($skillssoftquery)){
								$softskills = $skillssoftres['skill'];	
								echo "<div class='ss'><p class='textskills'>".$softskills."</p></div>";
						}
						?>

					</div>
					<div class="rightsidess">
						<div class="descskills">
						<?php 
						include("../set-db.php");

						$skillstechquery=mysql_query("SELECT * FROM skills WHERE uid='$uid' and type='technical'");
							while($skillstechres = mysql_fetch_array($skillstechquery)){
								$techskills = $skillstechres['skill'];
								$techskillsdesc = $skillstechres['description'];
								
								echo "<div class='textdescskills'><h3>".$techskills."</h3><p style='padding-left:20px;'>".$techskillsdesc."</p></div>";
						}
						?>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		</center>
	</body>
</html>

