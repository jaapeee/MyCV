<!DOCTYPE html>
<?php

$uid = $_REQUEST['uid'];
?>

<head>
	<title>Faculty Student Resume</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/faculty-studentresume1.css" />
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
	<div class="header">
		<div class="logo"><a href="faculty-home.php"><img src="../images/mycv.png" width="130px" height="60px"></a></div>
		<div class="home"><a href="faculty-home.php">Home</a></div>
		<div class="certificates"><a href="faculty-bookmarked.php">Certificates</a></div>
		<div class="settings"><input type="image" src="../images/settings.png" alt="settings" width="25px" height="25px" value="settings" onclick="divisionjava()"></div>
	</div>
		<div class="options-wrap" id="options-wrap">
				<table class="options">
					<tr><th class="changepass" cellspacing="0px" cellpadding="2px"><a href="changepass.php">Change Password</a></th></tr>
					<tr><th class="logout" cellspacing="0px" cellpadding="2px"><a href="exec/exec-logout.php">Logout</a></th></tr>
				</table>		
			</div>
	<div class="content">
			<center><div class="back"><form><a onclick="history.back()" style="cursor:pointer;">Back</a></form></div><br>

				
			
<?php 
include("../set-db.php");

$result=mysql_query("SELECT * FROM personalinformation WHERE uid='$uid'");
	while($test = mysql_fetch_array($result)){
		$id = $test['uid'];	
		
		

?>
	  <div class="container">
		<div class="table-row">
		 <div class="table-cell">
			<div class="avatar">
				<div><center><img src="../<?echo $test['profilepic'];?>" alt="Avatar" width="150" height="150"></center></div><br>
			</div>
			<div class="info">
				Sex: <?echo $test['gender'];?><br>
				Birthday: <?echo $test['birthdate'];?><br>
				Birthplace: <?echo $test['birthplace'];?><br>
				Religion: <?echo $test['religion'];?><br>
				Language Spoken: <?echo $test['language'];?><br>
				Address: <?echo $test['address'];?><br><br>
			</div>
			<div>
				<div class="about">About Me</div>
				<div class="p">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?echo $test['aboutme'];?>
				</div>
			</div>
		 </div>
		  
		 <div class="table-cell2">
			<div class="box1">
				<div class="pepito"><?echo $test['firstname'];?></div>
				<div class="venancio"><?echo $test['middlename'];?></div>
				<div class="manaloto"><?echo $test['lastname'];?></div>
				<div class="course"><?echo $test['currentposition'];?></div>
			</div>
			<div class="box2">
				<div><?echo $test['emailaddress'];?></div>
				<div><?echo $test['mobilenumber'];?></div>
			</div>
			<?}?>
			
			<div>
				<table class="con" width="100%" border="0">
					<div>
						<thead>
							<td><div class="work">Work Experience</div></td>
							<td></td>
						</thead>
							<tbody>
								<?php
									$workexpquery=mysql_query("SELECT * FROM workexperience  WHERE uid='$uid' ORDER BY year DESC");
										while($workexp = mysql_fetch_array($workexpquery)){
											echo"<tr>";
											echo"<td width='25%'><div class='company'>".$workexp['companyname']."</div></td>";
											echo"<td width='75%'><div class='ganap'>".$workexp['vendor']."</div></td>";
											echo"</tr>";
											echo"<tr>";
											echo"<td><div class='detail1'>".$workexp['country']."</div></td>";
											echo"<td rowspan='4'><div class='detail2'>".$workexp['description']."</div></td>";
											echo"</tr>";
											echo"<tr><td><div class='detail1'>".$workexp['year']."</div></td></tr>";
											echo"<tr><td><div class='detail1'>&nbsp;</div></td></tr>";
											echo"<tr><td><div class='detail1'>&nbsp;</div></td></tr>";
										}
								?>
							</tbody>
					</div>
				</table>
				
				<br><br>
				<table class="con" border="0">
					<div>
						<thead>
							<td><div class="techskills">Technical Skills</div></td>
							<td><div class="skills">Soft Skills</div></td>
						</thead>
							<tbody>
								<tr>
									<td><div class="graphics"></div></td>
									<td rowspan="500" id="top"><div class="fastlearner">
									<?php
									$skillsquery=mysql_query("SELECT * FROM skills WHERE type='soft' and uid='$uid'");
										while($skillsres = mysql_fetch_array($skillsquery)){
											echo $skillsres['skill']."<br>";
										}
									?>
								</div></td>
								</tr>
								<?php
									$skillstechquery=mysql_query("SELECT * FROM skills WHERE type='technical' and uid='$uid'");
										while($skillstechres = mysql_fetch_array($skillstechquery)){
											echo "<tr><td><div class='graphics'>".$skillstechres['skill']."</div></td></tr>";
											echo "<tr><td><div class='samplemsg'>".$skillstechres['description']."</div></td></tr>";

										}
								?>
					</div>
				</table>
				<br><br>
				<table class="con">
					<div>
						<thead>
							<td><div class="educ">Education</div></td>
						</thead>	
							<tbody>
								<?php
									$educationquery=mysql_query("SELECT * FROM education  WHERE uid='$uid' ORDER BY year DESC");
										while($educationres = mysql_fetch_array($educationquery)){
											echo "<tr><td><div class='details3'>".$educationres['courselevel']."</div></td></tr>";
											echo "<tr><td><div class='details4'>".$educationres['schoolname']."</div></td></tr>";
											echo "<tr><td><div class='details4'>".$educationres['country']."</div></td></tr>";
											echo "<tr><td><div class='details4'>".$educationres['year']."</div></td></tr>";
											echo "<tr><td><div class='details3'> &nbsp;</div></td></tr>";

										}
								?>
							
							
							
							
							
							
							
								
								
								
								
								
								
					</div>
								</tbody>
				</table>
				
			</div>
		 </div>
		</div>
	  </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	</div>
  </body>
</html>