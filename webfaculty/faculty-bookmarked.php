<!DOCTYPE html>
<?php
require("../set-login.php");
$uid = $_SESSION['genUID'];
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="../css/faculty-bookmarked.css"/>
		<title>Faculty Bookmarked</title>
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
	<body style="background-color:#E8E8E8;">
		<center>
		<div class="header">
			<div class="logo"><a href="faculty-home.php"><img src="../images/mycv.png" width="130px" height="60px"></a></div>
			<div class="home"><a href="faculty-home.php">Home</a></div>
			<div class="bookmark"><a href="faculty-bookmarked.php">Bookmarked</a></div>
			<div class="settings"><input type="image" src="../images/settings.png" alt="settings" width="30px" height="30px" value="settings" onclick="divisionjava()"></div>
				<div class="options-wrap" id="options-wrap">
					<table class="options">
						<tr><th class="changepass" cellspacing="0px" cellpadding="2px"><a href="changepass.php">Change Password</a></th></tr>
						<tr><th class="logout" cellspacing="0px" cellpadding="2px"><a href="exec/exec-logout.php">Logout</a></th></tr>
					</table>		
				</div>
		</div>
		<div class="mainbody" style="width:100%;background-color:white;display:inline-block;padding-top:20px;">
		<p style="font-size:20px">Bookmarked Students</p>
		<br>
		<div class="profiles" style="width:90%;display:inline-block;"><center>
		<div class="container">
		<center>
		<?php
			include("../set-db.php");
			
			
				$studenttabquery=mysql_query("SELECT * FROM `personalinformation` WHERE resumestatus='1' and bookmark='1'");
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
							<div style='background-color:red; width:0px;height:0px;overflow:hidden;display:inline-block;'><a href='exec/faculty-home-bookmarkchange-bookmarked.php?uid=$uid'><input type='button' id='$uid'></a></div>
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
							<div style='background-color:red; width:0px;height:0px;overflow:hidden;display:inline-block;'><a href='exec/faculty-home-bookmarkchange-bookmarked.php?uid=$uid'><input type='button' id='$uid'></a></div>
							
							";
						}else{}
						
						
						
						
					}

			?>
			

		</center>
		</div></center></div></div>
	</body>
	
	<style>
		.leftsideinfo label{
		cursor:pointer;
		}
		.lname{
		width:100%;
		text-align:left;}
		.leftsideinfo{
		display:inline-block;}
		.fname{
		width:100%;
		text-align:left;
		}
		.basicinfo{
		width:73%;
		display:inline-block;
		}
		</style>	

</html>