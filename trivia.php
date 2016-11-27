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
					<h1>Let's see how you did, <?php print(ucwords($_POST['name'])); ?>!</h1>
					<hr>
					<div class="col-sm-8 col-sm-offset-2">
						<h3>Here are the results.</h3>
						<table class="table table-striped">
							<thead>
						    <tr>
						      <th></th>
						      <th>Country</th>
						      <th>Capital</th>
						      <th>Your Answer</th>
						      <th>Correct?</th>
						    </tr>
						  </thead>
							<?php
							$country=array("Australia","Botswana","Bulgaria","China","Costa Rica", "Denmark", "Eritrea", "Finland", "Hungary", "Kenya");

							$capital=array("Canberra","Gaborone","Sofia","Beijing","San Jose", "Copenhagen", "Asmara", "Helsinki", "Budapest", "Nairobi");
							$counter = 0;
							for($i=0; $i<count($country); $i++){
								$ans_index = 'answer'.$i;
								$answer = ucwords($_POST[$ans_index]);
								print("<tr><th scope='row'>".($i+1)."</th>");
								print("<td>". $country[$i]."</td>");
								print("<td class='capital'>".$capital[$i]."</td>");
								print("<td class='useranswer'>".$answer."</td>");
								$correct = "🙅";
								if($capital[$i]==$answer){
									$correct = "🙆";
									$counter++;
								}
								print("<td class='emoji'>".$correct."</td></tr>");
							}
							?>
						</table>
						<br>
						<h3>Your total score is: <?php print($counter); ?></h3>
					</div>
					<div class="col-sm-8 col-sm-offset-2">
					<hr>
					<button onclick="goBack()" class="btn btn-default">Go Back</button>
					<script>
						function goBack() {
						    window.history.back();
						}
						</script>
					</div>
				</div>
			</div>
		</div>
	 </body>
 </html>
