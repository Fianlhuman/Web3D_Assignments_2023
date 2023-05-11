<?php
class Model {
	
	public $dbhandle;
	
	
	public function __construct()
	{
		
		$dsn = 'sqlite:./db/file.db';
		$user = 'user';
		$pass = 'password';
		$options = [
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
			PDO::ATTR_EMULATE_PREPARES   => false, 
		];
		try {	
			$this->dbhandle = new PDO($dsn, $user, $pass, $options);
		}
		catch (PDOEXception $e) {
        	print new Exception($e->getMessage());
    	}
	}

    function Deletedb() {
        $this->dbhandle->exec("DROP TABLE db_images");
        return "Successfully db_images";
    }

    public function dbImagesInsert()
    {
        try{

            $this->dbhandle->exec("CREATE TABLE db_images (Id INTEGER PRIMARY KEY, title TEXT,  imageURL TEXT,  content TEXT)");
            $this->dbhandle->exec(
                "INSERT INTO db_images (Id, title, imageURL, content) 
				VALUES (0, 'Coca-Cola', '../application/assets/images/home1.jpg', 'Coca-Cola is a refreshing carbonated beverage enjoyed worldwide for its iconic taste and uplifting spirit'); " .
                "INSERT INTO db_images (Id, title, imageURL, content) 
				VALUES (1, 'Sprite', '../application/assets/images/home2.jpg', 'Sprite is a refreshing lemon-lime flavored soda that quenches your thirst and invigorates your senses'); " .
                "INSERT INTO db_images (Id, title, imageURL, content) 
				VALUES (2, 'Dr Pepper', '../application/assets/images/home3.jpg', 'Here the data is dynamically loaded from the database'); ");


            return "Successfully inside dbImagesInsert to file.db";
        }
        catch(PDOEXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function ReaddbImages(){
        try{

            $sql = 'SELECT * FROM db_images';
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            $i=0;
            while ($data = $stmt->fetch()) {
                $result['images'][$i]['title'] = $data['title'];
                $result['images'][$i]['imageURL'] = $data['imageURL'];
                $result['images'][$i]['content'] = $data['content'];
                $i++;
            }
        }
        catch (PDOEXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
        return $result;
    }
}
