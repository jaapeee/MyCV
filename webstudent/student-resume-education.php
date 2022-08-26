<!DOCTYPE html>
<?php
 require("../set-login.php");
 $uid = $_SESSION['genUID'];
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="../css/srp.css"/>
		<title>Student Resume (Work Experience)</title>
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
			<h1>Education</h1>
		</div>
		

		
		
		
		
		<div class="form">
		<form action="exec/student-resume-education-addeducation.php" method="post">
		<table border="0">
			<tr>
				<td style="width: 15%; padding-left: 25%;"><input style="width:100%;"type="text" id="courselevel" name="courselevel" placeholder="Course Level" required></td>
				<td width="15%"><input style="width:50%;"type="text" id="schoolname" name="schoolname" placeholder="School" required></td>
			</tr>
			<tr>
				<td style="width: 15%; padding-left: 25%;"><input style="width:100%;"type="text" id="country" name="country" placeholder="Country" required></td>
				<td width="15%"><input style="width:50%;"type="text" id="year" name="year" placeholder="Year Accomodated" required></td>
			</tr>
			<tr>
				<td colspan="4">
					<center>
						<a href="student-resume.php"><input type="button" class="button1" value="Back"></a>
							&nbsp;&nbsp;&nbsp;
						<input type="submit" name="submitBTN" class="button2" value="Submit">
					</center>
				</td>
			</tr>
		</table>
		<br> <br>
		<table border = "0" cellpadding="0" cellspacing="5">
			<tr style="background-color:maroon; color:yellow;">
				<th style="padding-left:10px;" width="20%"> Course Level </th>
				<th style="padding-left:10px;" width="20%"> School </th>
				<th style="padding-left:10px;" width="15%"> Country</th>
				<th style="padding-left:10px;" width="10%"> Yr Accom</th>
				<th style="padding-left:10px;" width="3%"> </th>
			</tr>
			

			<?php
			include("../set-db.php");
			$eduquery=mysql_query("SELECT * FROM education WHERE uid='$uid' ORDER BY year DESC");
			while($edutable = mysql_fetch_array($eduquery)){
				
					$id = $edutable['id'];
					$courselevel = $edutable['courselevel'];
					$schoolname = $edutable['schoolname'];
					$country = $edutable['country'];
					$year = $edutable['year'];

			
				echo"
					<tr class='trhover'>
						<td>".$courselevel."</td>
						<td>".$schoolname."</td>
						<td>".$country."</td>
						<td>".$year."</td>
						<td> <a href ='exec/student-resume-education-deleteeducation.php?id=$id'> <img> </a> </td>

					</tr>";
				}
			?>
		</table>
		</form>
	</div>


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

	select{
		width:60%;
	}
	.trhover{
		transition:0.3s;
	}.trhover:hover{
		background-color:#e6e6e6;
		transition:0.3s;
	}
	.trhover td{
		padding-left:10px;
		transition:0.3s;
	}
	.trhover:hover td{
		padding-left:15px;
		transition:0.3s;
	}
	.trhover td img{
		content: url('../images/trashcanred.png');
		height:20px;
	}
	.trhover:hover td img{
		content: url('../images/trashcanblack.png');
		height:20px;
	}

	</style>
	


</html>