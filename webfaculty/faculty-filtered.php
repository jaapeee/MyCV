<!DOCTYPE html>
<?php
require("../set-login.php");
$uid = $_SESSION['genUID'];
$filtered = $_REQUEST['filter'];
include("../set-db.php");
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="../css/faculty-home.css"/>
		<title>Faculty Home</title>
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
			<div class="logo"><a href="faculty-home.php"><img src="../images/mycv.png" width="130px" height="60px"></a></div>
			<div class="home"><a href="faculty-home.php">Home</a></div>
			<div class="bookmark"><a href="faculty-bookmarked.php">Bookmarked</a></div>
			<div class="settings"><image src="../images/settings.png" alt="settings" width="25px" height="25px" value="settings" onclick="divisionjava()"></div>
				<div class="options-wrap" id="options-wrap">
					<table class="options">
						<tr><th class="changepass" cellspacing="0px" cellpadding="2px"><a href="changepass.php">Change Password</a></th></tr>
						<tr><th class="logout" cellspacing="0px" cellpadding="2px"><a href="exec/exec-logout.php">Logout</a></th></tr>
					</table>		
				</div>
		</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		<div class="mainbody">
			<form action="exec/faculty-home-execsearch.php" method="post">
				<fieldset><br>
					<label id="searchbar"><input type="search" name="searchname" placeholder="Search Name" id="search" /></label>
					<label id="searchbutton"><input type="submit" name="search" value="Search" /></label><br><br>
					<a href="faculty-home-showall.php">Show All Registered Students</a>
				</fieldset>
			</form>
			<br>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<div class="profiles">
		<p style="color:white; font-size:15px;"><?echo $filtered;?></p>
		<br>
			<?php
			include("../set-db.php");
			
			
				$studenttabquery=mysql_query("SELECT * FROM `personalinformation` WHERE resumestatus='1' and school='$filtered' or currentcourse='$filtered'");
					while($studenttabres = mysql_fetch_array($studenttabquery)){
						$bookmark = $studenttabres['bookmark'];
						$uid = $studenttabres['uid'];
						
						if($bookmark == "0"){
							echo "
							<a href='faculty-studentresume.php?uid=$uid'>
							<div class='individuals'>
								<div class='leftsideinfo' id='lefsideinfo'>
								<div class='picture'><img src='../".$studenttabres['profilepic']."' alt='PIC' width='75px' height='75px'></img></div>
									<label for='$uid'><div class='bookmarksign' ></div></label>
								</div>
								<div class='basicinfo' id='basicinfo' >
									<div class='lname'>".$studenttabres['lastname']."</div><div class='fname'>".$studenttabres['firstname']."</div>
									<div class='course''>".$studenttabres['viewcourse']."</div>
									<div class='cpnum'>".$studenttabres['mobilenumber']."</div>
								</div>
							</div>
							</a>
							<div style='background-color:red; width:0px;height:0px;overflow:hidden;display:inline-block;'><a href='exec/faculty-home-bookmarkchange.php?uid=$uid'><input type='button' id='$uid'></a></div>
							";
						}
						else if($bookmark == "1"){
							echo "
							<a href='faculty-studentresume.php?uid=$uid'>
							<div class='individuals'>
								<div class='leftsideinfo' id='lefsideinfo'>
								<div class='picture'><img src='../".$studenttabres['profilepic']."' alt='PIC' width='75px' height='75px'></img></div>
									<label for='$uid'><div class='bookmarkedsign' ></div></label>
								</div>
								<div class='basicinfo' id='basicinfo' >
									<div class='lname'>".$studenttabres['lastname']."</div><div class='fname'>".$studenttabres['firstname']."</div>
									<div class='course'>".$studenttabres['viewcourse']."</div>
									<div class='cpnum'>".$studenttabres['mobilenumber']."</div>
								</div>
							</div>
							</a>
							<div style='background-color:red; width:0px;height:0px;overflow:hidden;display:inline-block;'><a href='exec/faculty-home-bookmarkchange.php?uid=$uid'><input type='button' id='$uid'></a></div>
							
							";
						}else{}
						
						
						
						
					}

			?>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			
		</div>
			<div class="statistics">
				<header><p class="colleges">Colleges</p><p class="resume">Resume</header>
					
			<?php
				$collegequery=mysql_query("SELECT * FROM `colleges`");
					while($collegeres = mysql_fetch_array($collegequery)){
					$collegename = $collegeres['college'];
						$personalinfocollegequery=mysql_query("SELECT * FROM `personalinformation` WHERE school='$collegename' and resumestatus ='1'");
						$rowcount=mysql_num_rows($personalinfocollegequery);

							echo"<a href='faculty-filtered.php?filter=$collegename'><article class='item' ><p class='college'style='font-size:15px;'>
							".$collegeres['college']."
							</p><p class='number' style='font-size:15px;'>
							".$rowcount."
							</p></article></a>";

						$coursequery=mysql_query("SELECT * FROM `courses`WHERE college='$collegename'");
						while($courseres = mysql_fetch_array($coursequery)){
						$coursename = $courseres['course'];
							$personalinfocoursequery=mysql_query("SELECT * FROM `personalinformation` WHERE currentcourse='$coursename' and resumestatus ='1'");
							$courserowcount=mysql_num_rows($personalinfocoursequery);
							
							
							echo "<a href='faculty-filtered.php?filter=$coursename'><article class='item' style='padding-left:15px;'><p class='college'>
							".$courseres['course']."
							</p><p class='number'>
							".$courserowcount."
							</p></article></a>";
							
						}

					}
			?>

					
					
					<footer>
						<p class="total">Total Resume</p><p class="totalnumber">
						<?php
						$totalresumequery=mysql_query("SELECT * FROM `personalinformation` WHERE resumestatus ='1'");
						$totalrescount=mysql_num_rows($totalresumequery);
						echo $totalrescount;
						?>
						</p>
						<p class="total">&nbsp;</p><p class="totalnumber">&nbsp;</p>
						<p class="total">Total Registered Accounts</p><p class="totalnumber">
						<?php
						$totalaccquery=mysql_query("SELECT * FROM `personalinformation`");
						$totalacccount=mysql_num_rows($totalaccquery);
						$minusadmin = $totalacccount - 1 ;
						echo $minusadmin;
						?>
						</p>
					</footer>
			</div>

		</div>
		</center>

	</body>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<style>
		.leftsideinfo label{
		cursor:pointer;
		}
		</style>	
</html>