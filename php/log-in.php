<?php
    session_start();
    set_time_limit(100);
    require_once __DIR__ . '/employee_info.php';   
    
    $id = $_POST['id'];    
    $password  = $_POST['password']; 

    $user = new employee();

    $info = json_decode($user->GetPswd($id));

    if($info != null)
    {
        $flag_1 = password_verify($password, $info->Password);

        if($flag_1 == true)
        {
                $_SESSION['id'] = $id;
                $_SESSION['position'] = $info->Position;
                $_SESSION['password'] = $password;
                $_SESSION['name'] = $info->Name;
            if($info->Position < 10)
            {
                echo "<script type='text/javascript'>location.href = 'member.php';</script>";
            }
            else if($info->Position >9 && $info->Position <13)
            {
                echo "<script type='text/javascript'>location.href = 'supervisor.php';</script>";
            }
            else if($info->Position == 13)
            {
                echo "<script type='text/javascript'>location.href = 'manager.php';</script>";
            }
        }
        else
        {     
            echo "<h2>Invalid Password or ID</h2>";
            echo "<p> Click here <a href='../login.html'>here</a> to try again </p>";
        }
    }
    else
    {
            echo "<h2>Invalid ID</h2>";
            echo "<p> Click here <a href='../login.html'>here</a> to try again </p>";
    }
?>