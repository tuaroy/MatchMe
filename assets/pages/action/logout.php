<?php

include '../../../config/functions.php';

session_start();
if(($_SESSION['matchme']) && ($_SESSION['role'] == 0)){
	session_destroy();
	redirect('../index.php');
}
//session_destroy();
//redirect('../index.php');
?>