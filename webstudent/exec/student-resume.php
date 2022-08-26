<?php
require("../set-login.php");
$uid = $_SESSION['genUID'];
?>


<head>
<title>Student Resume</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/student-resu2.css" />
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
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
<?php 
include("../set-db.php");

$result=mysql_query("SELECT * FROM personalinformation WHERE uid='$uid'");
	while($test = mysql_fetch_array($result)){
		$id = $test['uid'];	
		
		

?>
	  <div class="container" id="divID" style="background-color:blue;">
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
				<table class="con" width="100%" border="0"style="color:white;">
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
				<table class="con"style="color:white;">
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
	  <!--print javascript-->
		<script type="text/javascript">
        function PrintDiv(divID) {
            var data=document.getElementById(divID).innerHTML;
            var myWindow = window.open('', 'my div', 'height=1000,width=1200');
            myWindow.document.write('<html><head><title>my div</title>');
            myWindow.document.write('<link rel="stylesheet" href="../css/student-resume1.css" />');
            myWindow.document.write('</head><body >');
            myWindow.document.write(data);
            myWindow.document.write('</body></html>');
            myWindow.document.close(); // necessary for IE >= 10

            myWindow.onload=function(){ // necessary if the div contain images

                myWindow.focus(); // necessary for IE >= 10
                myWindow.print();
                myWindow.close();
            };
        }
    </script>
	  
	  
	  <!--style-->
	  
	 
	  <!--button-->
	  <input type="button" class="button"  value="DOWNLOAD RESUME" onclick="PrintDiv('divID')"/>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	</div>
  </body>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <style>
		.button{
			background: red;
			color: yellow;
			
		}
	  @font-face { font-family: Poppins Black; font-variant: black; src: url('PoppinsBlack-VxOe.otf'); }
@font-face { font-family: Poppins Bold; font-weight: bold; src: url('PoppinsBold-GdJA.otf'); }
@font-face { font-family: Poppins Extra Bold; font-variant: Extra Bold; src: url('PoppinsExtrabold-zDdL.otf'); }
@font-face { font-family: Poppins Bold Italic; font-variant: bold italic; src: url('PoppinsBoldItalic-jgZy.otf'); }
@font-face { font-family: Poppins Italic; font-variant: Italic; src: url('PoppinsBoldItalic-jgZy.otf'); }
@font-face { font-family: Poppins; src: url('PoppinsRegular-B2Bw.otf'); }
@font-face { font-family: Poppins Thin; font-variant: thin; src: url('PoppinsThin-rO2B.otf'); }

* {box-sizing: border-box;}
.header {
  overflow: hidden;
  background-color: #A9A9A9;
  max-width: 100%;
  min-height: 60px;
}

.logo{
	float: left;
	padding: 1px;
	margin: 0 0 0 30px;
}
.home {
	font-size: 16px;
	font-family: Poppins Bold, Arial;
	float:  left;
	padding:  20px;
	margin: 0 0 0 65% ;
}

.certificates {
	font-size: 16px;
	font-family: Poppins Bold, Arial;
	float:  left;
	padding:  20px;
	margin: 0 0 0 0;
}

.settings{
	font-size: 15px;
	float: left;
  	color: black;
  	padding: 15px;
  	margin: 0 0 0 0 ;
}

.settings input{
	border-radius: 50%;
	position: relative;
	display: flex;
}

.logo, .home, .certificates, .settings{
	display: inline-block;
}

.home a, .certificates a {
  float: left;
  color: white;
  text-decoration: none;
  transition:0.3s;
}

.home a:hover, .certificates a:hover {
	float: left;
  	color: #FBDF02;
  	text-decoration: none;
	transition:0.3s;
}

	.options{
		background-color: #FEFBC1;
		float: right;
		border: 2px solid #7E0102;
		font-family: Poppins Regular, Arial ;
		font-size: 12px;
		color: #7E0102;
		border-radius: 22px;
		width: 13%;
		text-align: center;
		text-decoration: none;
	}
	#options-wrap{
		display: none;
	}
	.changepass{
		border-top-left-radius: 23px;
		border-top-right-radius: 23px;
		width: 20px;
		text-decoration: none;
		color: #7E0102;
	}
	.changepass:hover{
		background-color:#F2E488;
		text-decoration: none;
	}

	.logout{
		border-bottom-left-radius: 23px;
		border-bottom-right-radius: 23px;
		width: 20px;
		text-decoration: none;
	}
	.logout:hover{
		background-color:#F2E488;
		text-decoration: none;
	}

.changepass a, .logout a {
  color: #7E0102;
  text-decoration: none;
}

body { 
  margin: 1% auto auto auto;
  color: maroon;
  text-align: center;
  font-family: Poppins;
  font-size: 10px;
  width: 97%;
  background-color: #E8E8E8;
}

.infos {
    font-family: Poppins;
	display: block;
}

.edit {
    color: maroon;
    display: flex;
	flex-basis: 100px;
    height: 100px;
	height: 20px;
    text-align:center;
    vertical-align:middle;
    justify-content:center;
    align-items: center;
    font-size: 14px;
    display: block;	
}

.reca a, .recb a, .recc a, .recd a {
  color: yellow;
  text-decoration: none;
  transition:0.3s;
}

.reca {
  border-radius:50px, 0px;
  color: yellow;
  width: 150px;
  text-align:center;
  vertical-align:middle;
  justify-content:center;
  align-items: center;
  background-color: maroon;
  font-size: 12px;
  border-top-left-radius: 25px;
  border-bottom-left-radius: 25px;
  display: block;
  transition:0.3s;
}

.recb {
  color: yellow;
  width: 115px;
  text-align:center;
  vertical-align:middle;
  justify-content:center;
  align-items: center;
  background-color: maroon;
  font-size: 12px;
  display: block;
  transition:0.3s;
}

.recc {
  color: yellow;
  width: 45px;
  text-align:center;
  vertical-align:middle;
  justify-content:center;
  align-items: center;
  background-color: maroon;
  font-size: 12px;
  display: block;
  transition:0.3s;
}

.recd {
  color: yellow;
  width: 80px;
  text-align:center;
  vertical-align:middle;
  justify-content:center;
  align-items: center;
  background-color: maroon;
  font-size: 12px;
  border-top-right-radius: 25px;
  border-bottom-right-radius: 25px;
  display: block;
  transition:0.3s;
}

.reca a:hover, .recb a:hover, .recc a:hover, .recd a:hover {
  color: white;
  text-decoration: none;
  transition:0.3s;
}

.content{
  background-color: white;
  padding: 20px;
  justify-content: center;
  align-items: center;
  width: 100%;
}
.container {
  clear: both;
  display: table;
  width: 794px;
  align-items: center;
}
.table-row {
  display: table-row;
  height: 900px;
}
	.table-cell {
	  background: maroon;
	  color: white;
	  text-align: left;
	  display: table-cell;
	  padding: 5px;
	  width:1%;
	}
		img {
		  border-radius: 50%;
		  position: relative;
		  display: flex;
		}
		.info{
		width: 180px;		
		}
		.about{
		font-size: 13px;
		width: 100px;
		}
		.p{
		width: 170px;
		bottom: 20px;
		line-height: 12px;
		}
	
	.table-cell2 {
	  background: #383838;
	  color: white;
	  text-align: left;
	  display: table-cell;
	  padding: 12px;
	  width:30%;
	}
		.box1{
		  float: left;
		  width: 150px;
		  height: 140px;
		  margin: 5px
		  position: relative;
		  margin-top:18px;
		}
			.pepito{
			  font-size: 35px;
			  width: 30px;
			}
			.venancio{
			  font-size: 14px;
			  width: 50px;
			  position: relative;
			  bottom: 11px;
			}
			.manaloto{
			  font-size: 35px;
			  width: 50px;
			  position: relative;
			  bottom: 28px;
			}
			.course{
			  font-size: 12px;
			  width: 150px;
			  position: relative;
			  bottom: 42px;
			}
		.box2{
		  float: right;
		  text-align: right;
		  width: 150px;
		  height: 140px;
		  margin: 5px
		  position: relative;
		  margin-top:18px;
		}
		
			table#con{
			  padding: 8px;
			  position: relative;
			}
					.work{
					  font-size: 15px;
					  margin-left: 1em;
					  line-height: 16px;
					  width: 150px;
					}
						.company{
						  font-size: 12px;
						  margin-left: 3em;
						  line-height: 10px;
						  width: 150px;
						}
						.ganap{
						  font-size: 12px;
						  margin-left: 3em;
						  line-height: 10px;
						  width: 150px;
						}
						.detail1{
						  font-size: 9px;
						  margin-left: 4em;
						  line-height: 8px;
						  width: 150px;
						  position: relative;
						  bottom: 2px;
						}
						.detail2{
						  font-size: 9px;
						  margin-left: 1em;
						  line-height: 8px;
						  width: 95%;
						  position: relative;
						  bottom: 2px;
						}

					.techskills{
					  font-size: 15px;
					  margin-left: 1em;
					  line-height: 16px;
					  width: 150px;
					}
						.graphics{
						  font-size: 12px;
						  margin-left: 3em;
						  line-height: 10px;
						  width: 150px;
						  position: relative;
						}
						.samplemsg{
						  font-size: 10px;
						  margin-left: 7em;
						  margin-bottom: 1em;
						  line-height: 11px;
						  width: 150px;
						}
					.skills{
					  font-size: 15px;
					  line-height: 16px;
					  margin-left: 3em;
					  width: 150px;
					}
						.fastlearner{
						  margin-left: 6em;	
						  width: 150px;	
						  font-size: 11px;
						  line-height: 11px;
						  vertical-align: text-top;
						}
						
						td#top{
							vertical-align: text-top;
						}
						
					.educ{
					 font-size: 15px;
					 margin-left: 1em;
					 line-height: 16px;
					 position: relative;
					 bottom: 3px;
					 width: 150px;
					}
						.details3{
							  font-size: 12px;
							  margin-left: 1.5em;
							  line-height: 10px;
							  width: 250px;
							  position: relative;
							  bottom: 4px;
						}
						.details4{
							  font-size: 9px;
							  margin-left: 2em;
							  line-height: 8px;
							  width: 250px;
							  position: relative;
							  bottom: 6px;
						}
	  </style>
</html>