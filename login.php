<?php
	include "authentication.php";
	
	session_start();
	$errore=false;
	
	if (isset($_POST["user"]) && isset($_POST["password"]) && $_POST["user"] != "" && $_POST["password"] != "") {
		
		if (verifica($_POST["user"], $_POST["password"])) {
			$_SESSION['login_user']=$_POST["user"];
			}
		else {
			$errore=true;
			}
		}
		
	if (isLogged()) {
		header("Location:prenota_privata.php");
		}

?>




<html>
	<body>
		<?php if(isLogged()) : ?>
			Buongiorno <?php echo $_SESSION['login_user'] ?> <br />
			Vuoi fare <a href="logout.php" target="_blanck">logout</a>?
		<?php else : ?>
		
			<form method="post">
				<table>
					<tr>
						<td>User:</td> 
						<td><input name="user" type="text"></input> <br /></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input name="password" type="password"></input> <br /></td>
					</tr>
					<tr>
						<td> <input type="submit" value="login"></input></td>
					</tr>
				</table>
			</form>
			
			<?php if ($errore) : ?>
				Login errata

			<?php endif ; ?>
			
		<?php endif ; ?>
	
	
	</body>
	
	
</html>



