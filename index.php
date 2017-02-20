<html>
<title>change money</title>
<meta charset="utf-8" http-equiv="Content-Type" content="text/html">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="node_modules/bulma/css/bulma.css">
<link href="stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />

 
<body>
	<div class="container">
		<div class="column is-half is-offset-one-quarter boxmyself">
		<h1></h1>
		 <h1 class="Title">Change money</h1>
		 
		 <h2 class="title  is-4">Javascript</h2>
			
			<h6 >Thai Bath -> JPY</h6>
			 <input type="text" id="myText" placeholder="Thai Bath">
			 
			<p>Amount: <span id="demo"></span></p><br>
			 <button onclick="calJPY()">Convert </button><br>


			<script>
			function calJPY() {
			    var x = document.getElementById("myText").value;
			    var c = x*3.4;
			    document.getElementById("demo").innerHTML = c;
			}
			</script>
			<br>
			
			<h2 class="title  is-4">PHP Myself </h2> 
			<h6 >Thai Bath -> USD</h6>
				<form action="index.php">
					<input type="text" name="deM" placeholder="Thai Bath">
					<input type="submit">

					<?php 
					if (empty($_GET["deM"])) {
						 $_GET["deM"]=0;
					}
						$x = $_GET["deM"] ; 
						$c = $x / 34.9;
					?>
					<p>Amount:USD <?php echo $c; ?></p>
					<br>
				</form>
				<h4">PHP Api</h4><br>
				<?php include "call_api.php"; ?>
			</div><!-- boxmyself -->
		
		
	</div>

</body>
</html>