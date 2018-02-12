<html>

	<!-- This is the starting node of the graph...... So if you are lost anywhere come straight to this page to start again..... -->
	<body background="/source_code/blue.jpg">
		<font color="red"> <h2> <marquee> Welcome to challenge Four!!!!! </marquee> </h2> </font><br><br><br>
		<center>

				<h1> Hyperlink Graph :):) (Level I) (30 Points) </h1> <br><br>
			</center>
			<font color="blue"> <h2><p> This is the level I of the Hyperlink Graph challenge!!!!! You are given a Hyperlink Graph. Form a hyperlink cycle to capture the flag and take you to the level II :):)</p></h2></font>
			<br><br><br> <center>
			

			<!--                                  
							3v1f              ->                3n0                ->
			-->
			<?php

				include '/var/www/html/source_code/server.php';
				$username = $_COOKIE['username'];
				$user = "root";
				$pass = "SaRaGuRu..50";
				$dbname = "source_code";
				$ans = "";
				$points = 30;
				$cur = 0;
				$conn = mysqli_connect($servername,$user,$pass,$dbname);
				if($conn) {
					$sql = "select * from answers where QNo='4a'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					$ans = $row["Answers"];
				}
				if($_POST['4a'] == $ans ) {
					$sql = "select * from results where Username='$username'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					if($row['4a'] == "1") {
						?>
						<script> alert("You have already solved the challenge:):)"); </script>
					<?php
					}
					else {
						$cur = $row['Points'];
						$cur = $cur + $points;
						$sql = "update results set Points='$cur' where Username='$username'";
						$result = mysqli_query($conn, $sql);
						$sql = "update results set 4a='1' where Username='$username'";
						$result = mysqli_query($conn, $sql);
						?>
						<script> alert("Correct answer:):) You scored 30 points:):)"); </script>
						<?php
					}
				}
				else if($_POST['4a'] != "") {
					$sql = "select * from results where Username='$username'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					if($row['4a'] == "1") {
						?>
						<script> alert("You have already solved the challenge:):)"); </script>
					<?php
					}
					else {
						?>
					<script> alert("Wrong answer"); </script>
					<?php
					}
				}

			?>
			<center>
			<br><br><br>
				
			<form method="post">
				<input type="hidden" name="text" value="">
				<!--               
							->                ru0f               ->                 0wt                   ->
				-->
				<button type="submit" formaction="/source_code/php_files/a.php">one</button>
				<button type="submit" formaction="/source_code/php_files/b.php">two</button>
				<button type="submit" formaction="/source_code/php_files/c.php">three</button>
				<button type="submit" formaction="/source_code/php_files/d.php">four</button>
				<button type="submit" formaction="/source_code/php_files/e.php">five</button>
				<button type="submit" formaction="/source_code/php_files/f.php">six</button>
				<br><br>
				Enter the flag: <input type="text" name="4a" placeholder="Enter the answer"><br><br>
							 <input type="submit" value="Submit">
			</form>

			<br><br>
			<a href="/source_code/challenges/"> Go to Challenges Page </a> 
			<!--
			                ->               33rht              ->                   x15                      ->                      3v1f
			-->
		</center>
		</body>

		</html>
