<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="author" content="John Uberbacher">
	<title>Daily Programmer #4</title>
	
	<!-- CSS -->
	<link href="http://johnuberbacher.com/projects/grid/css/grid.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
</head>
<body>
	<!-- GitHub Link -->
	<a href="https://github.com/johnuberbacher" class="github-corner"><svg width="80" height="80" viewBox="0 0 250 250" style="fill:#151513; color:#fff; position: absolute; top: 0; border: 0; right: 0;"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="#e7e7e7" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="#e7e7e7" class="octo-body"></path></svg></a>
	
	<div class="container">
		<div class="row">
			<div class="column-sm-24 column-md-20 column-lg-18 column-single">
				<div class="item text-center">
					<p>Topic: Create a random password generator. For extra credit, allow the user to specify the amount of passwords to generate.</p>
					<p>For even more extra credit, allow the user to specify the length of the strings he wants to generate.</p>
					<p><span><a href="https://www.reddit.com/r/dailyprogrammer/comments/pm6oj/2122012_challenge_4_easy/">Reference</a></span></p>
				</div>
			</div>
			<div class="column-sm-24 column-md-20 column-lg-18 column-single">
				<div class="item">
					<form action="4.php" method="post">
						<label>Number of Passwords to generate: </label>
						<input type="number" name="amount" max="20">
						<label>Password Length: </label>
						<input type="number" name="length" max="20">
						<input type="submit" name="pwCheck"> 
					<div class="column-sm-24 column-md-20 column-lg-18 column-single">
				<div class="item">
					<form action="4.php" method="post">
						<label>Number of Passwords to generate: </label>
						<input type="number" name="amount" max="20">
						<label>Password Length: </label>
						<input type="number" name="length" max="20">
						<input type="submit" name="pwCheck"> 
					</form>
				</div>
				<?php  
					if ($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST["pwCheck"])){
						$ErrorMsg = "";
						$amount = $_POST["amount"];
						$length = $_POST["length"];
						
						function generateRandomString($length) {
							$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
							$charactersLength = strlen($characters);
							$randomString = '';
							for ($i = 0; $i < $length; $i++) {
								$randomString .= $characters[rand(0, $charactersLength - 1)];
							}
							return $randomString;
						}
						
						echo"<div class='item'>";
						for ($x = 0; $x < $amount; $x++) {
							echo "<p><strong>Password:</strong> " . generateRandomString($length) . "</p>";
						}
						echo "</div>";
						 
					}
				?>
			</div>
			
		</div>
	</div>
</body>