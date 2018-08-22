<?php
session_start();
	
	if (isset($_SESSION['id'] )& ($_SESSION['position'] == 2)) {

		require_once "../supervisor.html";
		
	}	else {
        echo "<p>You are not logged in, click here <a href='../login.html'>here</a> to login </p>";	}
?>
