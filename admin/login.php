<?php
  include "../config/koneksi.php";
  include '../config/functions.php';
  session_start();
    if(!empty($_SESSION['username']) && isset($_SESSION['matchme'])) {
       if($_SESSION['role'] == 1){
            redirect('index.php');
        }   
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<div>
		<form action="action/action_login.php" method="post">
			Username : <input type="text" name="username"><br>
			Password : <input type="password" name="password"><br>
			<input type="submit" name="masuk" value="Masuk">
		</form>
	</div>
</body>
</html>