<?php
require("../set-login.php");
$uid = $_SESSION['genUID'];
?>


<head>
<title>Student Resume</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/student-resume3.css" />
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
			function print() {
		var data = document.getElementById("demo").innerHTML;
		var myWindow = window.open('', 'my div', 'height=720,width=1280');
			myWindow.document.write('<link rel="stylesheet" href="../css/student-resume3.css" type="text/css"/>');
			myWindow.document.write('<style>body{margin:0px; width:100%;}</style>');
            myWindow.document.write(data);
			myWindow.document.close();
			myWindow.onload=function(){ // necessary if the div contain images
                myWindow.focus(); // necessary for IE >= 10
                myWindow.print();
                myWindow.close();
            };
		}
		</script>
</head>

<body>	
	<div class="header">
		<div class="logo"><a href="student-home.php"><img src="../images/mycv.png" width="130px" height="60px"></a></div>
		<div class="home"><a href="student-home.php">Home</a></div>
		<div class="certificates"><a href="student-certificates.php">Certificates</a></div>
		
		<?php
				include("../set-db.php");
				$minipicquery=mysql_query("SELECT * FROM personalinformation WHERE uid='$uid'");
					while($minipicres = mysql_fetch_array($minipicquery)){
				?>
		<div class="settings"><img src="../<?echo $minipicres['profilepic'];?>" alt="settings" width="30px" height="30px" value="settings" onclick="divisionjava()"></div>
		<?}?>
	</div>
		<div class="options-wrap" id="options-wrap">
				<table class="options">
					<tr><th class="changepass" cellspacing="0px" cellpadding="2px"><a href="changepass.php">Change Password</a></th></tr>
					<tr><th class="logout" cellspacing="0px" cellpadding="2px"><a href="exec/exec-logout.php">Logout</a></th></tr>
				</table>		
			</div>

	<div class="content">
			<center><div class="infos">
				<table class="con">
					<thead>
						<tr>
							<td colspan="10"><div class="edit">Edit:</div></td>
						</tr>
					<t/head>
					<tbody>
						<tr>
							<td><a href="student-resume-personal.php"><div class="reca">Personal Background</a></div></td>
							<td><a href="student-resume-work.php"><div class="recb">Work Experience</a></div></td>
							<td><a href="student-resume-skills.php"><div class="recc">Skills</a></div></td>
							<td><a href="student-resume-education.php"><div class="recd">Education</a></div></td>
						<tr>
					</tbody>
				</table>
				</div><br>	
			
			
			
			
			
			
			
			<input class="printbutton" type="button" value="Print PDF" onclick="print()" />
			<style>
			.printbutton{
	font-family:Poppins;
	color:yellow;
	background-color:maroon;
	border:0px;
	height:25px;
	font-size:12px;
	padding-top:3px;
	padding-left:10px;
	padding-right:10px;
	padding-bottom:3px;
	margin-bottom:10px;
	border-radius:10px;
	transition:0.3s;
	}.printbutton a{cursor:pointer;}
	.printbutton:hover{
	color:white;
	transition:0.3s;
	}
			</style>
			
			
			
			
			
			
			
<?php 
include("../set-db.php");

$result=mysql_query("SELECT * FROM personalinformation WHERE uid='$uid'");
	while($test = mysql_fetch_array($result)){
		$id = $test['uid'];	
		
		

?>
	  <div class="container" id="demo">
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
				<table class="con" width="100%" border="0"style="color:white;" style="margin-top:50px;">
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
				<table class="con" border="0"style="color:white;">
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
				<table class="con"style="color:white;" border="0">
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