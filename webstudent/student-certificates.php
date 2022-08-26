
<?php
require("../set-login.php");
include("../set-db.php");
$uid = $_SESSION['genUID'];
?>


<html>
  <title>Student Certificates</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/student-certificates1.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

<body>
<div class="container">
	<div class="headernav">
		<div class="logo"><a href="student-home.php"><img src="../images/mycv.png" width="130px" height="60px"></a></div>
		<div class="home"><a href="student-home.php">Home</a></div>
		<div class="certificates"><a href="student-certificates.php">Certificates</a></div>
					<?php
						$minipicquery=mysql_query("SELECT * FROM `personalinformation`  WHERE uid='$uid'");
							while($minipicres = mysql_fetch_array($minipicquery)){
					?>
		<div class="settings"><img style="border-radius:50%;" src="../<?echo $minipicres['profilepic'];?>" alt="settings" width="30px" height="30px" value="settings" onclick="divisionjava()"></div>
		<?}?>
	</div>
		<div class="options-wrap" id="options-wrap">
				<table class="options">
					<tr><th class="changepass" cellspacing="0px" cellpadding="2px"><a href="changepass.php">Change Password</a></th></tr>
					<tr><th class="logout" cellspacing="0px" cellpadding="2px"><a href="exec/exec-logout.php">Logout</a></th></tr>
				</table>		
			</div>





















	<div class="block1">
			<div class ="contents">
				<p class="imgcert">Image Certificates</p>
				
					<?php
						$picquery=mysql_query("SELECT * FROM `certificates`  WHERE uid='$uid' and type='img' ORDER BY id DESC");
							while($picres = mysql_fetch_array($picquery)){
								$id=$picres['id'];
								
								echo"
								<div class='box'>
									<div class='certdelete'>
										<a href='exec/student-certificates-delete.php?id=$id'><div class='certdeleteicon'></div></a>
									</div>
									<img src='".$picres['directory']."' height='100%' width='100%'>
								</div>
								";
						}
					?>
				
				
				
				
				
				
				
				
				
			</div>	
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="block2"><center>
		<div class ="rectangle"><p>Add PDF Certificate</p><center>
			<div class ="PDF" syt><center><img src= "../images/addpdf.png" height="10px;"onclick="pdfjava()"><br>Upload PDF</center></div>
			<div class="imgdiv" id="mypdf"><center><br>
					<form action="exec/student-certificates-uploadpdf.php"  method="post" enctype="multipart/form-data">
						<font style="font-size:20px;">Choose PDF File</font><br><br>
							<label for="file-pdf">
								<div class="fileuploadbody">
									<div class="fublock1"><center><img></center></div>
									<div class="fublock2"><input id="file-pdf" type="file" name="filepdf"></div>
								</div>
							</label>
						<div class="btn1"><button name="submit">Submit</button></div>
					</form>
				</center>
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class ="IMG"><center><img src= "../images/addpdf.png" height="10px;"onclick="imgjava()"><br>Upload Image</center></div>
			<div class="imgdiv" id="myimg"><center><br>
					<form action="exec/student-certificates-uploadimg.php"  method="post" enctype="multipart/form-data">
						<font style="font-size:20px;">Choose Image File</font><br><br>
							<label for="file-img">
								<div class="fileuploadbody">
									<div class="fublock1"><center><img></center></div>
									<div class="fublock2"><input id="file-img" type="file" name="image"></div>
								</div>
							</label>
						<div class="btn1"><button name="submitimg">Submit</button></div>
					</form>
				</center>
			</div></center>
		</div>	
		
		
		
		
		
		
		
		
		
		
		
		<br><br>
		<div class ="rectangle1"><div class="header"><p style="">PDF Certificates</p></div>
			<br><br><br>
			<table border="0" width="100%" cellpadding="0" cellspacing="0">
				
					<?php
						$pdfquery=mysql_query("SELECT * FROM `certificates`  WHERE uid='$uid' and type='pdf' ORDER BY id DESC");
							while($pdfres = mysql_fetch_array($pdfquery)){
								$id=$pdfres['id'];
								
								echo"
								<tr class='pdfcerttr'>
								<td width='95%' style='padding-left:15px;'>
								<a type='application/pdf' href='
								".$pdfres['directory']."
								' style='font-size:12px; font-style:italic;'>
								".$pdfres['filename']."
								</a></td>
								<td><a href='exec/student-certificates-delete.php?id=$id' style='padding-left:0px;'><img class='pdfcerttd'></a></td>

								</tr>
								";
						}
					?>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
				
				

			</table>
		</div>
		
		
		
		
		
		
		
		
	</center></div>



















	

	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<br>
</div>
</body>
































<script type="text/javascript">
function divisionjava() {
  let x = document.getElementById("options-wrap");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function pdfjava() {
  let x = document.getElementById("mypdf");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function imgjava() {
  let x = document.getElementById("myimg");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</html>