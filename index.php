<!DOCTYPE html>
<html>
<head>
	<title>forms</title>
</head>
<body>

	<?php
		if(isset($_POST['submit']))
		{
			if(empty($_POST['username']))
			{
				echo "<p style='color:blue'>Field Must Not be Empty</p>";
			}

			else if(strlen($_POST['username']) < 5)	
			{
				echo "<p style='color:red'>Username Must be of Length 5 At Least</p>";	
			}

			else
			{
				echo "Welcome: ".$_POST['username'];
			}
		}

	?>

	<form action="" method="POST">
		<input type="text" name="username" placeholder="Input Anything"> <br>
		<input type="submit" name="submit" value="submit">
		
	</form>

</body>
</html>