<?php
require("../set-login.php");
include("../set-db.php");
$uid = $_SESSION['genUID'];
?>


<!DOCTYPE html>
<html>
<style>
input[type=password]{
		width: 200px;
  height: 35px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 1px solid #555;
  outline: none;
  font-family: 'Poppins', sans-serif;
  border-radius: 16px;
  border: none;
  background-color: lightgray;
  color: maroon;
  font-weight:bold;
  margin-bottom:10px;
}

.container{
		margin-left: auto;
		margin-right: auto;
		margin-top: 10%;
		width: 500px;
}

 .logo{
		display: inline-block;
		margin-left: 35%;
		margin-right: 35%;
		width: 30%;
}

.change-pass-form{
		display: flex;
		align-items: center;
		justify-content: center;
		padding: 50px;
}

.button{
		background-color:#800000;
		color:#FFDF00;
		border-radius:25px;
		border: none;
		width:40%;
		margin-left:30%;
		margin-right:30%;
		height: 25px;


::placeholder{
		color:#E8E8E8;
		padding: 5px;
}



.back{
		padding: 10px;
		color: #800000;
}

a, a:visited {
		color: inherit;
		text-decoration: none;
}



</style>

<body style="background-color: #E8E8E8;">

<div class="container" style="background-color: white;">

  <div style="background-color:#a9a9a9; ">
     <img class="logo" src="../images/mycv.png" alt="mycv"></img>
  </div>

    <div class="change-pass-form">
        <form action = "exec/changepass-process.php" method = "post">
          <label for="old-password">
            <input class="passdesign" id="old-password" type="password" placeholder="Old Password" name="oldpass" size="25">
          </label>
          <label for="new-password"><br>
            <input id="new-password" type="password" placeholder="New Password" name="newpass" size="25">
          </label>
          <label for="confirm--new-password"><br>
           <input id="confirm-new-password" type="password" placeholder="Confirm New Password" name="confirmpass" size="25"><br><br>
          </label>
          <button type="submit" class="button" name="update" onclick="submit()">Submit</button>
        </form>
  </div>

  <div class="back"><form><a onclick="history.back()" style="cursor:pointer; color:maroon; text-decoration:none;">Back</a></form></div>

</div>

</body>
</html>
