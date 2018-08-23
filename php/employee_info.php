<?php
class employee{
  public $dbname = "authentication";
    protected $id;
    protected $name;
    protected $position;
    protected $password;
    public function __construct(){
    }

    public function getName(){
        return $this->name;
    }   
    public function getID(){
        return $this->id;
    }
    public function getPosition(){
        return $this->position;
    }
    
    public function setname($name){
        $this->name = $name;
    }
    
    public function CheckName(int $id){
        $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $query = "SELECT* FROM userinfo WHERE Id = :id";
        $statement = $db->prepare($query);	
        $statement->bindvalue('id', $id);
        $result = $statement->execute();
	    if($result > 0)
        {
            $row = $statement->fetch(1);
	        $this->name = $row['Name'];
            return $this->name;
        }
    }
    
    public function GetPswd(int $id){
        $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $query = "SELECT* FROM userinfo WHERE Id = :id";
        $statement = $db->prepare($query);	
        $statement->bindvalue('id', $id);
        $result = $statement->execute();
	    if($result > 0)
        {
            $row = $statement->fetch(1);
            return json_encode($row);
        }
    }
    
     public function deleteUser(int $id){
        $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $query = 'DELETE FROM userinfo WHERE Id = :id';
        $statement = $db->prepare($query);
        $statement->bindvalue('id', $id);
        $statement->execute();
     }

   public function setInfo(int $id, string $name,  int $position, string $pswd){
		$this->name = $name;
		$this->position = $position;
		$this->id = $id;

	    $db = new PDO('mysql:host=127.0.0.1;dbname=rdj','root','');
		$query = 'INSERT INTO userinfo (Id, Name, Position, Password) VALUES(:id, :name, :position, :password)';
		$statement = $db->prepare($query);

		$params = [
			'id' => $this->id,
			'name' => $this->name,
           	'position'    => $this->position,
            'password'    => $pswd
			 ];
		$result = $statement->execute($params);

	}
} 
?>
