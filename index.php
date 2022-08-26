<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>Mycv Index</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,800;0,900;1,400&display=swap" rel="stylesheet">
</head>
<body>
	<section class="home">
	<div class="header" id="myHeader">
		<nav>
			<a href="index.html"><img src="images/mycv.png"></a>
			<div class="nav-links">
				<ul>
					<li><button id="btn1">Login</button></li>
					
				</ul>
		</nav>
	</div>
	<div id="myModal" class="modal">
					<div class="modal-content">
    				<span class="close">&times;</span>
   				 	<center><p><a href="webstudent/student-login.php"><button class="btn2">Student</button></a></p>
   				 	<p><a href="webfaculty/faculty-login.php"><button class="btn3">Faculty</button></a></p></center>
  					</div>
					</div>
	<div class="text-box1">
		<h1>The future is<br>yours.</h1>
		<p>The CV Repository system contains<br>professional and educational proffiling<br>information of the students intended for<br>corporate use provided by the university.<br>Join us today!</p>
	</div>
	</section>
	<!----- join ----->
	<section class="join">
	<div class="text-box2">
		<h1>Follow<br>3 Easy Steps</h1>
		<p>Student can join us by following<br>three easy steps.</p>
	</div>
	</section>
	<!----- add ----->
	<section class="add">
	<div class="text-box3">
		<h1>Amazing features<br>for Faculty</h1>
		<p>Precise dashboard system intended for University<br>and Corporate viewing. Professors can track the student's uploaded<br>file for potential applications.</p>
	</div>
	</section>
	<script>
	window.onscroll = function() {myFunction()};
	var header = document.getElementById("myHeader");
	var sticky = header.offsetTop;
	function myFunction() {
  	if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
 	} else {
    header.classList.remove("sticky");
 	}
	}
	var modal = document.getElementById("myModal");


var btn = document.getElementById("btn1");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
	</script>
</body>
</html>
