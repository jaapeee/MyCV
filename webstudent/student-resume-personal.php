<!DOCTYPE html>
<?php
require("../set-login.php");
$uid = $_SESSION['genUID'];
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="../css/srp.css"/>
		<title>Student Resume (Personal)</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,800;0,900;1,400&display=swap" rel="stylesheet">

		
		
	</head>
	<body>
		<div class="header">
			<div class="logo"><a href="student-home.php"><img src="../images/mycv.png" width="130px" height="60px"></a></div>
			<div class="home"><a href="student-home.php">Home</a></div>
			<div class="bookmark"><a href="student-certificates.php">Certificates</a></div>
			
			<?php
				include("../set-db.php");
				$minipicquery=mysql_query("SELECT * FROM personalinformation WHERE uid='$uid'");
					while($minipicres = mysql_fetch_array($minipicquery)){
				?>
			<div class="settings"><img src="../<?echo $minipicres['profilepic'];?>" style="border-radius: 15px;" alt="settings" width="25px" height="25px" value="settings" onclick="divisionjava()"></div>
			<?}?>
			<div class="options-wrap" id="options-wrap">
					<table style="background-color: #FEFBC1;">
						<tr><th class="changepass" cellspacing="0px" cellpadding="2px"><a href="changepass.php">Change Password</a></th></tr>
						<tr><th class="logout" cellspacing="0px" cellpadding="2px"><a href="exec/exec-logout.php">Logout</a></th></tr>
					</table>		
				</div>
		</div>
		<div class="text-box">
			<h1>Personal Information</h1>
		</div>
		
		
		
		
		
		
		
		<?php 
		include("../set-db.php");

		$result=mysql_query("SELECT * FROM personalinformation WHERE uid='$uid'");
			while($test = mysql_fetch_array($result)){
		?>
		
		
		
		
		<div class="form">
		<form action="exec/student-resume-personal-update.php" method="post" enctype="multipart/form-data">
		<table border="0">
			<tr>
				<td width="17%">&nbsp;</td>
				<td width="17%">&nbsp;</td>
				<td width="17%">&nbsp;</td>
				<td width="55%">&nbsp;</td>
			</tr>
			<tr>
				<td width="17%" style="text-align:right;">Profile / 2x2 Picture: </td>
				<td width="17%" colspan="3">
					<label for="file-img">
						<div class="fileuploadbody">
							<div class="fublock1"><center><img></center></div>
							<div class="fublock2"><input id="file-img" type="file" name="profilepic"></div>
						</div>
					</label>
				</td>
			</tr>
			<tr>
				<td width="17%">Full Name</td>
				<td width="17%">&nbsp;</td>
				<td width="17%">&nbsp;</td>
				<td width="55%">About Me</td>
			</tr>
			<tr>
				<td width="17%"><input type="text" id="fname" name="fname" placeholder="First Name" value="<?echo $test['firstname'];?>"></td>
				<td width="17%"><input type="text" id="mname" name="mname" placeholder="Middle Name"value="<?echo $test['middlename'];?>"></td>
				<td width="17%"><input type="text" id="lname" name="lname" placeholder="Last Name"value="<?echo $test['lastname'];?>"></td>
				<td width="55%" rowspan="11"><textarea name="aboutme"><?echo $test['aboutme'];?></textarea></td>
			</tr>
			<tr>
				<td width="17%">BirthDate</td>
				<td width="17%">Birthplace</td>
				<td width="17%">Sex</td>
			</tr>
			<tr>
				<td width="17%"><input type="date" id="bday" name="bday" value="<?echo $test['birthdate'];?>"></td>
				<td width="17%"><input type="text" id="bplace" name="bplace" placeholder="Marikina City" value="<?echo $test['birthplace'];?>"></td>
				<td width="17%">
					<select id="sex" name="sexoption" style="color: maroon;">
					  <option value="<?echo $test['gender'];?>"><?echo $test['gender'];?></option>
					  <option value="Male">Male</option>
					  <option value="Female">Female</option>
					</select>
					</td>
			</tr>
			<tr>
				<td width="17%">Student Number</td>
				<td width="17%">Mobile Number</td>
				<td width="17%">Religion</td>
			</tr>
			<tr>
				<td width="17%"><input type="text" id="sno" name="sno" placeholder="2022-00000-MN-0" value="<?echo $test['studentnumber'];?>" readonly></td>
				<td width="17%"><input type="text" id="mno" name="mno" placeholder="09670001234" value="<?echo $test['mobilenumber'];?>"></td>
				<td width="17%"><input type="text" id="religion" name="religion" placeholder="Roman Catholic" value="<?echo $test['religion'];?>"></td>
			</tr>
			<tr>
				<td width="17%">Language Spoken</td>
				<td width="17%" colspan="2">Email Address</td>
			</tr>
			<tr>
				<td width="17%"><input type="text" id="language" name="language" placeholder="Filipino, English" value="<?echo $test['language'];?>"></td>
				<td width="17%" colspan="2"><input type="text" style="width:95%;" id="emailadd" name="emailadd" placeholder="sampleemail@gmail.com" value="<?echo $test['emailaddress'];?>"></td>
			</tr>
			<tr><td width="17%" colspan="3">Address</td></tr>
			<tr><td width="17%" colspan="3"><input type="text" style="width:95%;" id="address" name="address" placeholder="7 Road 1 SampleBrgy Marikina City" value="<?echo $test['address'];?>"></td></tr>
			<tr>
				<td width="17%">Current Position</td>
				<td width="17%">College/Course</td>
				<td width="17%">Iskolar Status</td>
			</tr>
			<tr>
				<td width="17%"><input type="text" name="currentposition" placeholder="Oreo Company CEO"  value="<?echo $test['currentposition'];?>"></td>
				<td width="17%">
					<select id="college" name="collegecourse" style="color: maroon;">
						<option value="<?echo $test['currentcourse'];?>">
							<?echo $test['school'];?> | <?echo $test['currentcourse'];?>
						</option>
						
						<?
						$collegecoursequery=mysql_query("SELECT * FROM courses ORDER BY college");
						while($collegecourseres = mysql_fetch_array($collegecoursequery)){
							$college = $collegecourseres['college'];
							$course = $collegecourseres['course'];
							echo "<option value='$course'>$college. | $course</option>";
						}
						?>
					</select>
				</td>
				<td width="17%">
					<select style="color: maroon;" name="iskolar">
						<option value="<?echo $test['iskolar'];?>"><?echo $test['iskolar'];?></option>
						<option value="Iskolar">Iskolar</option>
						<option value="Non-Iskolar">Non-Iskolar</option>
					</select>
				</td>
			</tr>


			
			<tr>
				<td colspan="4"><center><br>
				<a href="student-resume.php"><input type="button" class="button1" value="Back"></a>&nbsp;&nbsp;&nbsp;<input type="submit" class="button2" value="Submit">
				</center></td>
			</tr>
		</table>
		</form>
	</div>









			<?}?>
			<br><center>All field are Mandatory except for Profile/2x2 Picture</center>










	</body>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
	
	
	<style>
		.fileuploadbody{
	background-color:white;
	width:30%;
	height:100%;
	font-size:15px;
	font-family:poppins;
	border-radius:25px;
	border: 2px solid maroon;
	padding-left:10px;
	display:inline-block;
	overflow:hidden;
	transition:0.3s;
	}.fileuploadbody:hover{
	border: 2px solid #360906;
	background-color:#fcaeae;
	transition:0.3s;}
	
	.fublock1{
	background-color:maroon;
	display:inline-block;
	width:15%;
	height:20px;
	overflow:hidden;
	border-radius:25px;
	transition:0.3s;
	}.fileuploadbody:hover .fublock1{
	background-color:#360906;
	transition:0.3s;
	}
	
	.fublock2{
	display:inline-block;
	position:relative;
	width:70%;
	left:-5px;
	overflow:hidden;
	}
	.fublock2 input[type="file"]{
	font-size:12px;
	font-family:poppins;
	position:relative;
	left:-80px;
	color:maroon;
	transition:0.3s;
	}.fileuploadbody:hover .fublock2 input[type="file"]{
	color:#360906;
	transition:0.3s;
	}
	
	.fublock1 img{
	padding-top:2px;
	content: url('../images/uploadinputyellow.png');
	height:15px;
	transition:0.3s;
	}.fileuploadbody:hover .fublock1 img{
	content: url('../images/uploadinputwhite.png');
	transition:0.3s;
	}
		</style>
	

</html>