<html>
<head>
<title>Student Register</title>

</head>
<body>

<p class="mycv" style="color:#800000;font-size:40px;"><big>my<span style="color:#FFDF00;">cv</span></big></p>
<p class="welcome" style="color:#800000;"><big>WELCOME!</big></p>
<p class="newacc" style="color:#FFDF00;"><big>new account</big></p>
<div class="container">
	<form action="exec/student-register-exec.php" method="post">
	<div class="form" style="width: 50%;  height: 680px; float: left; background: #a9a9a9;">
    	<table border="0" width="90%" >
			<tr>
				<td width="33%">&nbsp;</td>
				<td width="33%" class="bigletters" style="color:yellow;text-align:center;">Student</td>
				<td width="33%">&nbsp;</td>
			</tr>
			<tr>
				<td width="33%" colspan="3" class="bigletters" style="text-align:left;">Personal information</td>
			</tr>
			<tr>
				<td width="33%">First Name</td>
				<td width="33%">Middle Name</td>
				<td width="33%">Last Name</td>
			</tr>
			
			<tr>
				<td width="33%"><input type="text" class="inputtexts" name="fname"	required	placeholder="Pepito"></input></td>
				<td width="33%"><input type="text" class="inputtexts" name="mname"	required	placeholder="Venancio"></input></td>
				<td width="33%"><input type="text" class="inputtexts" name="lname"	required	placeholder="Manaloto"></input></td>
			</tr>
			
			<tr>
				<td width="33%">Student Number</td>
				<td width="33%">Password</td>
				<td width="33%">Confirm Password</td>
			</tr>
			
			<tr>
				<td width="33%"><input type="text" class="inputtexts" 		name="sno"	required	placeholder="2022-00000-MN-0"></input></td>
				<td width="33%"><input type="password" class="inputtexts" name="pass"	required></input></td>
				<td width="33%"><input type="password" class="inputtexts" name="cpass"	required></input></td>
			</tr>
			<tr>
				<td width="33%">Birthdate</td>
				<td width="33%">Sex</td>
				<td width="33%">Mobile Number</td>
			</tr>
			
			<tr>
				<td width="33%"><input type="date" class="inputtexts" name="date"	required></input></td>
				<td width="33%">
					<select name="sex" required>
						<option value="">Select Sex</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</td>
				<td width="33%">
				<span class="numspan">+63 |</span>
				<input type="text" class="inputtexts" name="mno" required placeholder="9670001234" style="padding-left: 40px;" pattern="[0-9]{10}"></input></td>
			</tr>
			<tr><td width="33%" colspan="3" class="bigletters" style="text-align:left;">&nbsp;</td></tr>
			<tr><td width="33%" colspan="3" class="bigletters" style="text-align:left;">College/Course</td></tr>
			<tr><td width="33%" colspan="3" class="bigletters" style="text-align:left;">
				<select name="collegecourse" required>
						<option value="">Select College/Course</option>
						
						<?
						include("../set-db.php");
						$collegecoursequery=mysql_query("SELECT * FROM courses ORDER BY college");
						while($collegecourseres = mysql_fetch_array($collegecoursequery)){
							$college = $collegecourseres['college'];
							$course = $collegecourseres['course'];
							echo "<option value='$course'>$college. | $course</option>";
						}
						?>
				</select>
			</td></tr>
			<tr><td width="33%" colspan="3" class="bigletters" style="text-align:left;">&nbsp;</td></tr>
			<tr><td width="33%" colspan="3" class="bigletters" style="text-align:left;">&nbsp;</td></tr>
			<tr><td width="33%" colspan="3" class="bigletters" style="text-align:left;">&nbsp;</td></tr>
			<tr><td width="33%" colspan="3" class="bigletters" style="text-align:left;">&nbsp;</td></tr>
			<tr><td width="33%" colspan="3" class="bigletters" style="text-align:left;">&nbsp;</td></tr>
			<tr><td width="33%" colspan="3" class="bigletters" style="text-align:left;">&nbsp;</td></tr>
			<tr>
				<td width="33%" class="bigletters" style="text-align:left;"><a href="student-login.php">Back</a></input></td>
				<td width="33%" class="bigletters" style="text-align:center;">&nbsp;</input></td>
				<td width="33%" class="bigletters" style="text-align:right;"><input type="submit" value="Submit" name="submit"></input></td>
			</tr>
			
		</table>
    </div>
	</form>
    <div style=" margin-left: 50%;">
        <img class="img" src="../images/PUP-STA-MESA.jpg">
    </div>
</div>

</body>
</html>







<style>
a{
	color:maroon;
	text-decoration:none;
	font-weight:normal;
	font-size:12px;
}
input[type="submit"]{
	background-color:maroon;
	color:yellow;
	font-size:15px;
	border: 1px solid black;
	height:26px;
	width:80px;
	border-radius:10px;
	cursor:pointer;
}

.numspan{
     position:absolute;
     margin-top:7px;
     margin-left: 5px;
     color:#800000;
     font-weight: bolder;
}
select{
	width: 100%;
  height: 35px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 1px solid #555;
  outline: none;
  font-family: 'Poppins', sans-serif;
  border-radius: 10px;
  border: none;
  color: maroon;
  font-weight:bold;
}
.inputtexts{
	width: 100%;
  height: 35px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 1px solid #555;
  outline: none;
  font-family: 'Poppins', sans-serif;
  border-radius: 10px;
  border: none;
  color: maroon;
  font-weight:bold;
}
body{
	font-family:Poppins;
}
.bigletters{
	color:maroon;
	font-size:20px;
	font-weight:bold;
}
.mycv{
    font-size:60px;
    font-weight:bold;
    position:absolute;
    top: 0;
    margin-left: 30px;
    margin-top: 20px;
}
.welcome{
    font-size:50px;
    font-weight:bold;
    position:absolute;
    top: 0;
    right: 0;
    margin-right: 30px;
    margin-top: 40px;
}
.newacc{
    font-size:30px;
    font-weight:bold;
    position:absolute;
    top: 0;
    right: 0;
    margin-right: 30px;
    margin-top: 100px;
}
.container{
    margin-left: 16%;
    margin-right: auto;
    margin-top: 8%;
    width: 80%
    }
.form{
    display: flex;
	align-items: center;
	justify-content: center;
	border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
    position:  relative;
}
.img{
    width: 450px;
}
td{
	color:white;
	font-size:13px;
	
}
</style>