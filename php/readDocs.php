<?php
    if (isset($_SESSION['id'])& ($_SESSION['position']))
    {
        $id = $_SESSION['id'];
        $position = $_SESSION['position'];
        
        if ($position == 1){

            $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');

            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $query = 'SELECT * FROM training_sheeter';
            $statement = $db->prepare($query);	

            $result = $statement->execute();

            echo "<h1><b>Training Documents</b></h1>";

            echo'<table id="table">'; 

            echo'<tr><td>  Training Name  </td><td>  Document  </td></tr>';

            while($row = $statement->fetch($result)){
                
                if(preg_match('/(^|,)'.$id.'($|,)/', $row['Record']))
                {    
                   echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>Completed</td></tr>"; 
                } 
                else 
                {
                    echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>New</td></tr>";                   
                }
            }
            echo"</table>"; 
        }
        
        if ($position == 2){

            $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');

            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $query = 'SELECT * FROM training_mixer';
            $statement = $db->prepare($query);	

            $result = $statement->execute();

            echo "<h1><b>Training Documents</b></h1>";

            echo'<table id="table">'; 

            echo'<tr><td>  Training Name  </td><td>  Document  </td></tr>';

            while($row = $statement->fetch($result)){
                
                if(preg_match('/(^|,)'.$id.'($|,)/', $row['Record']))
                {    
                   echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>Completed</td></tr>"; 
                } 
                else 
                {
                    echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>New</td></tr>";                   
                }
            }
            echo"</table>"; 
        }
        if ($position == 3){

            $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');

            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $query = 'SELECT * FROM training_oven';
            $statement = $db->prepare($query);	

            $result = $statement->execute();

            echo "<h1><b>Training Documents</b></h1>";

            echo'<table id="table">'; 

            echo'<tr><td>  Training Name  </td><td>  Document  </td></tr>';

            while($row = $statement->fetch($result)){
                
                if(preg_match('/(^|,)'.$id.'($|,)/', $row['Record']))
                {    
                   echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>Completed</td></tr>"; 
                } 
                else 
                {
                    echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>New</td></tr>";                   
                }
            }
            echo"</table>"; 
        }
        if ($position == 4){

            $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');

            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $query = 'SELECT * FROM training_packer';
            $statement = $db->prepare($query);	

            $result = $statement->execute();

            echo "<h1><b>Training Documents</b></h1>";

            echo'<table id="table">'; 

            echo'<tr><td><b>  Training Name  </b></td><td></b>  Document  </b></td></tr>';

            while($row = $statement->fetch($result)){
                
                if(preg_match('/(^|,)'.$id.'($|,)/', $row['Record']))
                {    
                   echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>Completed</td></tr>"; 
                } 
                else 
                {
                    echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>New</td></tr>";                   
                }
            }
            echo"</table>"; 
        }
        if ($position == 5){

            $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');

            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $query = 'SELECT * FROM training_teamlead';
            $statement = $db->prepare($query);	

            $result = $statement->execute();

            echo "<h1><b>Training Documents</b></h1>";

            echo'<table id="table">'; 

            echo'<tr><td>  Training Name  </td><td>  Document  </td></tr>';

            while($row = $statement->fetch($result)){
                
                if(preg_match('/(^|,)'.$id.'($|,)/', $row['Record']))
                {    
                   echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>Completed</td></tr>"; 
                } 
                else 
                {
                    echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>New</td></tr>";                   
                }
            }
            echo"</table>"; 
        }
        if ($position == 6){

            $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');

            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $query = 'SELECT * FROM training_lineoperator';
            $statement = $db->prepare($query);	

            $result = $statement->execute();

            echo "<h1><b>Training Documents</b></h1>";

            echo'<table id="table">'; 

            echo'<tr><td>  Training Name  </td><td>  Document  </td></tr>';

            while($row = $statement->fetch($result)){
                
                if(preg_match('/(^|,)'.$id.'($|,)/', $row['Record']))
                {    
                   echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>Completed</td></tr>"; 
                } 
                else 
                {
                    echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>New</td></tr>";                   
                }
            }
            echo"</table>"; 
        }
        if ($position == 7){

            $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');

            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $query = 'SELECT * FROM training_maintenance';
            $statement = $db->prepare($query);	

            $result = $statement->execute();

            echo "<h1><b>Training Documents</b></h1>";

            echo'<table id="table">'; 

            echo'<tr><td>  Training Name  </td><td>  Document  </td></tr>';

            while($row = $statement->fetch($result)){
                
                if(preg_match('/(^|,)'.$id.'($|,)/', $row['Record']))
                {    
                   echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>Completed</td></tr>"; 
                } 
                else 
                {
                    echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>New</td></tr>";                   
                }
            }
            echo"</table>"; 
        }
        if ($position == 8){

            $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');

            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $query = 'SELECT * FROM training_s/r';
            $statement = $db->prepare($query);	

            $result = $statement->execute();

            echo "<h1><b>Training Documents</b></h1>";

            echo'<table id="table">'; 

            echo'<tr><td>  Training Name  </td><td>  Document  </td></tr>';

            while($row = $statement->fetch($result)){
                
                if(preg_match('/(^|,)'.$id.'($|,)/', $row['Record']))
                {    
                   echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>Completed</td></tr>"; 
                } 
                else 
                {
                    echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>New</td></tr>";                   
                }
            }
            echo"</table>"; 
        }
        if ($position == 9){

            $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');

            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $query = 'SELECT * FROM training_forklift';
            $statement = $db->prepare($query);	

            $result = $statement->execute();

            echo "<h1><b>Training Documents</b></h1>";

            echo'<table id="table">'; 

            echo'<tr><td>  Training Name  </td><td>  Document  </td></tr>';

            while($row = $statement->fetch($result)){
                
                if(preg_match('/(^|,)'.$id.'($|,)/', $row['Record']))
                {    
                   echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>Completed</td></tr>"; 
                } 
                else 
                {
                    echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>New</td></tr>";                   
                }
            }
            echo"</table>"; 
        }
        if ($position == 10){

            $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');

            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $query = 'SELECT * FROM training_super_be';
            $statement = $db->prepare($query);	

            $result = $statement->execute();

            echo "<h1><b>Training Documents</b></h1>";

            echo'<table id="table">'; 

            echo'<tr><td>  Training Name  </td><td>  Document  </td></tr>';

            while($row = $statement->fetch($result)){
                
                if(preg_match('/(^|,)'.$id.'($|,)/', $row['Record']))
                {    
                   echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>Completed</td></tr>"; 
                } 
                else 
                {
                    echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>New</td></tr>";                   
                }
            }
            echo"</table>"; 
        }
        if ($position == 11){

            $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');

            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $query = 'SELECT * FROM training_super_packing';
            $statement = $db->prepare($query);	

            $result = $statement->execute();

            echo "<h1><b>Training Documents</b></h1>";

            echo'<table id="table">'; 

            echo'<tr><td>  Training Name  </td><td>  Document  </td></tr>';

            while($row = $statement->fetch($result)){
                
                if(preg_match('/(^|,)'.$id.'($|,)/', $row['Record']))
                {    
                   echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>Completed</td></tr>"; 
                } 
                else 
                {
                    echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>New</td></tr>";                   
                }
            }
            echo"</table>"; 
        }
        if ($position == 12){

            $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');

            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $query = 'SELECT * FROM training_super_sr';
            $statement = $db->prepare($query);	

            $result = $statement->execute();

            echo "<h1><b>Training Documents</b></h1>";

            echo'<table id="table">'; 

            echo'<tr><td>  Training Name  </td><td>  Document  </td></tr>';

            while($row = $statement->fetch($result)){
                
                if(preg_match('/(^|,)'.$id.'($|,)/', $row['Record']))
                {    
                   echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>Completed</td></tr>"; 
                } 
                else 
                {
                    echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>New</td></tr>";                   
                }
            }
            echo"</table>"; 
        }
        if ($position == 13){

            $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');

            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $query = 'SELECT * FROM training_manager';
            $statement = $db->prepare($query);	

            $result = $statement->execute();

            echo "<h2><b>Training Documents</b></h2>";

            echo'<table id="table">'; 

            echo'<tr><td><b>  Training Name  </b></td><td><b>  Document  </b></td><td><b> Status </b></td></tr>';

            while($row = $statement->fetch($result)){
                
                if(preg_match('/(^|,)'.$id.'($|,)/', $row['Record']))
                {    
                   echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>Completed</td></tr>"; 
                } 
                else 
                {
                    echo "<tr><td>". $row['TrainingName'] . "</td><td><a href=../documents/".$row['Link']." target=_blank>".$row['Link']."</a></td><td>New</td></tr>";                   
                }
            }
            echo"</table>"; 
        }
        
    }else {
        echo "<p>You are not logged in, click here <a href='../login.html'>here</a> to login </p>";	}
?>