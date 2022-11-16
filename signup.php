<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid asdfainformPlease enter some valid asdfainformation!Please enter some valid asdfainformation!Please enter some valid asdfainformation!Please enter some valid asdfainformation!Please enter some valid asdfainformation!Please enter some valid asdfainformation!Please enter some valid asdfainformation!Please enter some valid asdfainformation!Please enter some valid asdfainformation!Please enter some valid asdfainformation!Please enter some valid asdfainformation!Please enter some valid asdfainformation!Please enter some valid asdfainformation!Please enter some valid asdfainformation!Please enter some valid asdfainformation!ation!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Times New Roman", sans-serif}
        .w3-bar,h1,button {font-family: "Times New Roman", sans-serif}
        .fa-anchor,.fa-coffee {font-size:200px}
        </style>
    <title>To Do List</title>
</head>
<body>

<div class="w3-top">
  <div class="w3-bar w3-light-grey w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-yellow" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="pomodoro.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Pomodoro</a>
    <a href="notes.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Notes</a>
    <a href="todolist.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">To Do List</a>
    <a href="login.php" class="w3-bar-item w3-button w3-right w3-hide-small w3-padding-large w3-hover-white">Log In</a>
  </div>


	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>