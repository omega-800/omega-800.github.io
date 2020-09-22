<?php
	session_start();
	if($_SESSION['userID']['UserID'] == ''){ 
        header('Location: login.php');
    }
?>