<?php
	include "authentication.php";
	session_start();
	
	$nomeutente="non hai una sessione attiva";
	if (isset($_SESSION['login_user']) && $_SESSION['login_user'] != "") {
		$nomeutente=$_SESSION['login_user'];
		}
		
	if (isset($_POST["logout"])) {
		session_destroy();
		}

?>




<html>
	<body>
		Buongiorno <?php echo $nomeutente ?>
		<br />
		<?php if (!isLogged()) : ?>
			Vuoi fare <a href="login.php">login</a>?
		<?php else : ?>
			<form method="post">
				<input name="logout" type="submit" value="logout"></input>
			</form>
		<? endif; ?>
	
	
	</body>
	
	
</html>



