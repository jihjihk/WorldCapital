<html>
	<head>
		<title>World Capitals Quiz</title>
		<link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="style.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 intro">
					<h1>Welcome to the World Capitals Quiz!</h1>
					<hr>
					<div class="col-sm-6 col-sm-offset-3">
						<h2>Let's get started.</h2>
						<form action="trivia.php" method="post">
							<p>What is your name? <br />
								<input type=text name=name>
							</p>
							<hr>
							<h4>Type in the name of the capital city for each country.</h4>

							<table class="table table-striped">
								<?php
								$country=array("Australia","Botswana","Bulgaria","China","Costa Rica", "Denmark", "Eritrea", "Finland", "Hungary", "Kenya");

								for($i=0;$i<count($country);$i++){
									print("<tr><th scope='row'>".($i+1)."</th>");
									print("<td>". $country[$i]."</td>");
									print("<td><input type='text' class='form-control' name='answer".$i."'></td></tr>");
								}
								?>
							</table>

							<button type="submit" class="btn btn-default">Submit</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

