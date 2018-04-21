<?php

include '../config/functions.php';

session_start();
if(($_SESSION['matchme']) && ($_SESSION['role'] == 1)){
	session_destroy();
	redirect('login.php');
}

?>