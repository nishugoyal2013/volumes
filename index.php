
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>File Handling</title>
</head>
<body>
		<form method="post" action="">	
		<!-- <input type="submit" name="submit" value="Read File"/><br/><br/> -->
		<textarea readonly style="width: 50%; height: 200px;">
			<?php 
				
				$myfile = fopen("webdictionary.txt", "r+") or die("Unable to open file!");	
				echo fread($myfile, filesize("webdictionary.txt"));		

			?>				
		</textarea><br/><br/>
		<?php
		if(isset($_POST['submit1']))
			{				
				$text = $_POST['write'];					
				fwrite($myfile,$text);
				fclose($myfile); 	
			}


		?>
		
			<input type="text" name="write" value=""/><br/><br/>		
			<input type="submit" name="submit1" value="Save" onclick="reload" />
		</form>

</body>
</html>