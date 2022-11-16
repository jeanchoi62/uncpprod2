<?php 

session_start();

	include("connection.php");
	include("functions.php");
  include("errors.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>UNCP Productivity</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Times New Roman", sans-serif}
.w3-bar,h1,button {font-family: "Times New Roman", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-light-grey w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-yellow" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="pomodoro.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Pomodoro</a>
    <a href="notes.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Notes</a>
    <a href="todolist.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">To Do List</a>
    <a href="login.php" class="w3-bar-item w3-button w3-right w3-hide-small w3-padding-large w3-hover-white">Log In</a>
    <a href="#" class="w3-bar-item w3-button w3-right w3-hide-small w3-padding-large w3-hover-white">
      <?php echo ($_SESSION['user_id']); ?></a>
    <!-- <a href="#" class="w3-bar-item w3-button w3-right w3-hide-small w3-padding-large w3-hover-white">
      <?php echo ($_SESSION['user_name']); ?></a>  -->
  </div>

  

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Pomodoro</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Notes</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Tasks</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-center" style="padding:128px 16px">
  <body style="background-color: GoldenRod;"></body>
  <img class="w3-image" src="\uncp-productivity\download.jpeg" alt="UNCP" width="1500" height="800">
  <h1 class="w3-margin w3-jumbo">UNCP Pomodoro and Productivity</h1>
  <p class="w3-xlarge">New to UNCP Productivity?</p>
  <a href="signup.php"><button>Signup Here!</button></a>
  </div>
</header>



<!-- First Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>What is Pomodoro?</h1>
      
	<img src="https://media.hswstatic.com/eyJidWNrZXQiOiJjb250ZW50Lmhzd3N0YXRpYy5jb20iLCJrZXkiOiJnaWZcL3BvbW9kb3JvMy5qcGciLCJlZGl0cyI6eyJyZXNpemUiOnsid2lkdGgiOjgyOH19fQ==">
    
      <h5 class="w3-padding-32">Developed in the 1980’s by Francesco Cirillo, this time management technique gets its name from the common tomato shaped kitchen timer. The system operates on the belief that by dividing your work and breaks into regular, short increments you can avoid feeling overwhelmed by a looming task while also avoiding burn out. Here’s the basics:</h5>

      <p class="w3-text-grey">It uses a kitchen timer to break work into intervals, typically 25 minutes in length, separated by short breaks. Each interval is known as a pomodoro, from the Italian word for tomato, after the tomato-shaped kitchen timer Cirillo used as a university student.

The technique has been widely popularized by apps and websites providing timers and instructions. Closely related to concepts such as timeboxing and iterative and incremental development used in software design, the method has been adopted in pair programming contexts.

</p>
    </div>

    <div class="w3-fifth w3-right">
	<img src="">
    </div>
  </div>
</div>









<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQnX4py1H6fsqJuA4Uv21b4CT_pSRymNpFJw&usqp=CAU">
    </div>

    <div class="w3-twothird">
      <h1>Description</h1>
      <h5 class="w3-padding-32">Welcome future Brave! We are excited to have you explore all UNC Pembroke has to offer. With more than 150 undergraduate and graduate pathways to a degree, small class sizes with knowledgeable faculty, championship athletics and more than 120 student clubs and organizations, we can’t wait to see you find your place in BraveNation!

</h5>

      <p class="w3-text-grey">Robeson (pronounced Rob-e-son) County is the largest of North Carolina's counties in area (approximately 10% smaller than the state of Rhode Island).

With over 130,000 residents, Robeson County is one of the most diverse counties in the nation. This is the political and cultural center of North Carolina’s largest American Indian tribe - the Lumbees - since the 1700s, making this a historic and culturally rich place to study. Learn more about the Lumbee Tribe.

The University of North Carolina at Pembroke is consistently one of the most diverse campuses in the state and nation.

In part because of its small community setting, it is also one of the safest campuses in the nation. The location - just off Interstate 95 and the mid-point between Boston and Miami. Learn more about Area Attractions.</p>
    </div>
  </div>
</div>



<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Purpose</h1>
      <h5 class="w3-padding-32">With a wide array of bachelor’s and master’s degree offerings, fantastic Pembroke faculty, and a diverse community of cultures, ideas and organizations at their fingertips, UNCP students are poised to excel in life.</h5>

      <p class="w3-text-grey">Each student is an individual at UNCP. Our students get a chance to make names for themselves — to stand out in a warm and welcoming community that wants them to succeed — and experience a rare combination of opportunities, cultures and ideas that can’t be found anywhere else.

Located in the southeastern North Carolina town of Pembroke, UNCP has a rich American Indian history and is one of the safest campuses in the University of North Carolina System. With small class sizes, a low student-faculty ratio and one of the most diverse campuses in the nation, UNCP is a growing university that empowers students to go on to live vibrant, fulfilling lives.

</p>
    </div>

    <div class="w3-third w3-center">
	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjxVC7mWtajpKhJ2ylpafRSKmcHkNY4-karw&usqp=CAU">
    </div>
  </div>
</div>



<div class="w3-container w3-light-grey w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">It always seems impossible until it's done.</h1>
</div>






<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>UNCP <a href="www.uncp.edu" target="_blank">www.UNCP.edu</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
