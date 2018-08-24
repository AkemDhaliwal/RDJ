<?php

 $targetfolder = "../documents/";

$name = $_POST['name'];
$fileNames  = basename( $_FILES['file']['name']);  

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {
    if (isset($_POST['SheeterOperator'])){
        
	    $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');
		$query = 'INSERT INTO training_sheeter (TrainingName, Link) VALUES(:name, :docName)';
		$statement = $db->prepare($query);

		$params = [
			'name' => $name,
           		'docName'    => $fileNames
			 ];
		$result = $statement->execute($params);
        
    }
    if (isset($_POST['MixerOperator'])){
        
	    $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');
		$query = 'INSERT INTO training_mixer (TrainingName, Link) VALUES(:name, :docName)';
		$statement = $db->prepare($query);

		$params = [
			'name' => $name,
           		'docName'    => $fileNames
			 ];
		$result = $statement->execute($params);
    }
    if (isset($_POST['OvenOperator'])){
        
	    $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');
		$query = 'INSERT INTO training_oven (TrainingName, Link) VALUES(:name, :docName)';
		$statement = $db->prepare($query);

		$params = [
			'name' => $name,
           		'docName'    => $fileNames
			 ];
		$result = $statement->execute($params);
    }
        if (isset($_POST['Packer'])){
        
	    $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');
		$query = 'INSERT INTO training_packer (TrainingName, Link) VALUES(:name, :docName)';
		$statement = $db->prepare($query);

		$params = [
			'name' => $name,
           		'docName'    => $fileNames
			 ];
		$result = $statement->execute($params);
        
    }
        if (isset($_POST['TeamLead'])){
        
	    $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');
		$query = 'INSERT INTO training_teamlead (TrainingName, Link) VALUES(:name, :docName)';
		$statement = $db->prepare($query);

		$params = [
			'name' => $name,
           		'docName'    => $fileNames
			 ];
		$result = $statement->execute($params);
        
    }
        if (isset($_POST['LineOperator'])){
        
	    $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');
		$query = 'INSERT INTO training_lineoperator (TrainingName, Link) VALUES(:name, :docName)';
		$statement = $db->prepare($query);

		$params = [
			'name' => $name,
           		'docName'    => $fileNames
			 ];
		$result = $statement->execute($params);
        
    }
        if (isset($_POST['Maintenance'])){
        
	    $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');
		$query = 'INSERT INTO training_maintenance (TrainingName, Link) VALUES(:name, :docName)';
		$statement = $db->prepare($query);

		$params = [
			'name' => $name,
           		'docName'    => $fileNames
			 ];
		$result = $statement->execute($params);
        
    }
        if (isset($_POST['Shipping/Reciving'])){
        
	    $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');
		$query = 'INSERT INTO training_s/r (TrainingName, Link) VALUES(:name, :docName)';
		$statement = $db->prepare($query);

		$params = [
			'name' => $name,
           		'docName'    => $fileNames
			 ];
		$result = $statement->execute($params);
        
    }
        if (isset($_POST['ForkliftOperator'])){
        
	    $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');
		$query = 'INSERT INTO training_forklift (TrainingName, Link) VALUES(:name, :docName)';
		$statement = $db->prepare($query);

		$params = [
			'name' => $name,
           		'docName'    => $fileNames
			 ];
		$result = $statement->execute($params);
        
    }
        if (isset($_POST['Supervisor(Bake-end)'])){
        
	    $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');
		$query = 'INSERT INTO training_super_be (TrainingName, Link) VALUES(:name, :docName)';
		$statement = $db->prepare($query);

		$params = [
			'name' => $name,
           		'docName'    => $fileNames
			 ];
		$result = $statement->execute($params);
        
    }
        if (isset($_POST['Supervisor(Packing)'])){
        
	    $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');
		$query = 'INSERT INTO training_super_packing (TrainingName, Link) VALUES(:name, :docName)';
		$statement = $db->prepare($query);

		$params = [
			'name' => $name,
           		'docName'    => $fileNames
			 ];
		$result = $statement->execute($params);
        
    }
        if (isset($_POST['Supervisor(Wearhouse)'])){
        
	    $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');
		$query = 'INSERT INTO training_super_sr (TrainingName, Link) VALUES(:name, :docName)';
		$statement = $db->prepare($query);

		$params = [
			'name' => $name,
           		'docName'    => $fileNames
			 ];
		$result = $statement->execute($params);
        
    }
        if (isset($_POST['TrainingManager'])){
        
	    $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');
		$query = 'INSERT INTO training_manager (TrainingName, Link) VALUES(:name, :docName)';
		$statement = $db->prepare($query);

		$params = [
			'name' => $name,
           		'docName'    => $fileNames
			 ];
		$result = $statement->execute($params);
        
    }
    
        echo "<h2>Document Sucessfully uploaded</h2>";
        echo "<p> Click here <a href='addDoc.php'>here</a> to go back </p>";
 }

 else {

    echo "Problem uploading file";
 }

 ?>