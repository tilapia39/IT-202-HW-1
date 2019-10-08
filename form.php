<?php
function getName() {
	if (isset($_GET['name'])){
		echo "<p>Hello, " . $_GET['name'] . "</p>";
	}
}

function checkPasswords(){
	if(isset($_POST['password']) && isset($_POST['confirm'])){
		if($_POST['password'] == $_POST['confirm']){
			echo "<br>Passwords Matched!<br>";
		}
		else{
			echo "<br>Passwords didn't match!<br>";
		}
	}
}
?>
<html>
<head></head>
<body><?php getName();?>
<form mode="GET" action="#">
<input name="username" type="text" placeholder="Enter your username"/>
<input name="password" type="password" placeholder="Enter your password"/>
<input type="password" name="confirm" placeholder="Re-Enter password"/>
<input type="submit" value="try it"/>
</form>
</body>
</html>


<?php
if(isset($_GET)){
	echo "<br><pre>" . var_export($_GET, true) . "</pre><br>";
}
?>

