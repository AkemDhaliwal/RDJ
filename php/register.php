<?php
session_start();
	
	if (isset($_SESSION['id'] ) & ($_SESSION['position'])) {

        if($_SESSION['position'] == 13)
        {
		  require_once "../Sign-up.html";
        }
        else
        {
            session_destroy();
            echo "<p>You are not logged in as admin, click here <a href='../login.html'>here</a> to login </p>";
        }
	}	else {
        echo "<p>You are not logged in, click here <a href='../login.html'>here</a> to login </p>";	}
?>