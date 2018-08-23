<?php
    session_start();

    require_once __DIR__ . '/employee_info.php';
		
    $id = $_POST['id'];
    $name = $_POST['name'];
    $position  = $_POST['position'];    
    $password  = $_POST['password']; 
    
    $pswd = password_hash($password, PASSWORD_DEFAULT);
        
    $user = new employee();
        
    $user->setname($name);
    
    $check = $user->CheckName($id);
	            
    if( $check != null)
    {
        echo "<h2>This Employee id(".$id.") is alredy registered to ".$check.".</h2>";
        echo "<p> Please check the id and try again, Click here <a href='../Sign-up.html'>here</a> to try again </p>";
    }
    else
    {
        $user->setInfo($id, $name, $position, $pswd);
        echo"<script>
            window.location.href = '../login.html';
            </script>";
    }
?>