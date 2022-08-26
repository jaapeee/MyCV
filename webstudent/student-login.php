<?php
//session start
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>
Student - Login
</title>
<style>
label{
    width: 190px;
    display: inline-block;
}
input{
	border: none;
	border-radius: 8px;
    margin: 5px;
    height: 30px;
}
input:focus, textarea:focus, select:focus{
	outline: none;
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
.student{
    color:#FFDF00;
    position:absolute;
    top: 0;
    margin-left: 170px;
}
 .back{
    padding: 10px;
    color: #800000;
    position:absolute;
    bottom:0;
    left:0;
    margin-left: 20px;
}
.create-new{
    padding: 10px;
    color: #800000;
    position:absolute;
    bottom:0;
    margin-left: 140px;
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
.button{
    position:absolute;
    bottom:0;
    right: 0;
    margin-bottom: 25px;
    margin-right: 25px;
    background-color:#800000;
    color:#FFDF00;
    border-radius:8px;
    border: none;
    width: 15%;
    height: 30px;
}
h2{
    color: white;
    text-align: right;
}
a, a:visited {
    color: inherit;
    text-decoration: none;
</style>
</head>
<body>
<?php //Error Handling
$stnumErr = $passwordErr = "";
$stnum = $password = "";

//Error Process
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["stnum"])) {
    $stnumErr = "* Student Number is required *";
  }else {
    $stnum = test_input($_POST["stnum"]);
  }
  if (empty($_POST["pword"])) {
    $passwordErr = "* Password is required *";
  }else {
    $password = test_input($_POST["pword"]);
  }
}

//Test Input method
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
return $data;
  }

?>
<p class="mycv" style="color:#800000;"><big>my<span style="color:#FFDF00;">cv</span></big></p>
<p class="welcome" style="color:#800000;"><big>WELCOME!</big></p>
<div class="container">
	<div class="form" style="width: 50%;  height: 680px; float: left; background: #a9a9a9;">
    	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="margin-top: -100px;">
        	<center><span class="error" style="color:maroon;"> <?php echo $stnumErr;?></span></center><br>
			<label for="snum"><h2>Student number : </h2></label>
        		<input  type="text" name="stnum" required size="35" placeholder="2022-00000-MN-1"><br>
            
			<center><span class="error" style="color:maroon;"> <?php echo $passwordErr;?></span><br>
        	<label for="spass"><h2>Password :</h2></label>
        		<input  type="password" name="pword" required size="35"></center><br>
            
            <h3 class="back"><a href="../index.php">Back</a></h3>
            <h3 class="create-new"><a href="student-register.php">Create New Account</a></h3>
            <h1 class="student">Student</h1>
            <button type="submit" class="button" name="sign" onclick="submit()">Sign in</button>
    	</form>
    </div>
    <div style=" margin-left: 50%;">
        <img class="img" src="../images/PUP-STA-MESA.jpg">
    </div>
</div>

<?php //Student Login Main Process\

//process submit
if(isset($_POST['sign'])){
  //connect to server
  mysql_connect("localhost", "root", "");
  mysql_select_db("cvsystem");

  //query
  $result = mysql_query("select * from personalinformation where studentnumber = '".$stnum."' and password = '".$password."'")
            or die("Failed to Query Database ".mysql_error());
  $row = mysql_fetch_array($result);

  //Store Session Variables\
  if(mysql_num_rows($result)==1){
    session_regenerate_id();
    $_SESSION['genUID'] = $row["uid"];
  }
  $_SESSION['stnumber'] = $_POST["stnum"];
  $_SESSION['pwd'] = $_POST["pword"];
  session_write_close();


  //Login Process
  if(($row['studentnumber'] == $_SESSION["stnumber"]) && ($row['password'] == $_SESSION["pwd"])){
      echo "<script>alert('Login Successfully');</script>";
      echo "<script>location.href = 'student-home.php'</script>";
  }  else {
      echo "<script>alert('Login Failed!');</script>";
      echo "<script>location.href = 'student-login.php'</script>";
    }
}
?>
</body>
</html>
