<?php 
  class Offers {
    // DB stuff
    private $conn;
    private $table = 'offer';
//id	company_id	name	price	description	creat_at	update_at	    // Post Properties
    public $id;
    public $company_id;
    public $company_name;
    public $name;
    public $price;
    public $description;
    public $creat_at;
    public $update_at;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT c.name as company_name, o.id, o.company_id, o.name, o.price, o.description, 
      o.creat_at, o.update_at
                FROM '. $this->table .' o 
                LEFT JOIN company c ON o.company_id = c.id ';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }
 

    // Get Single Post
    public function read_single() {
          // Create query
          $query = 'SELECT c.name as company_name, o.id, o.company_id, o.name, o.price, o.description, 
          o.creat_at, o.update_at
                    FROM '. $this->table .' o 
                    LEFT JOIN company c ON o.company_id = c.id
                                    WHERE
                                      o.id = ?
                                    LIMIT 0,1';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Bind ID
          $stmt->bindParam(1, $this->id);

          // Execute query
          $stmt->execute();
          

          $row = $stmt->fetch(PDO::FETCH_ASSOC);

          // Set properties
          $this->id              = $row['id'];
          $this->company_id      = $row['company_id'];
          $this->company_name    = $row['company_name'];
          $this->name            = $row['name'];
          $this->price           = $row['price'];
          $this->description     = $row['description'];
          $this->creat_at        = $row['creat_at'];
          $this->update_at       = $row['update_at'];

          
    }
    public function read_offers() {
          // Create query
          $query = 'SELECT c.name as company_name, o.id, o.company_id, o.name, o.price, o.description, 
          o.creat_at, o.update_at
                    FROM '. $this->table .' o 
                    LEFT JOIN company c ON o.company_id = c.id
                    WHERE o.company_id = ? ';
          

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Bind ID
          $stmt->bindParam(1, $this->id);

          // Execute query
          $stmt->execute();

          return $stmt;

          
    }
  
  // Create Client
    public function create() {
          // Create query
     
          $query = 'INSERT INTO ' . $this->table . ' SET company_id= :company_id, name= :name, 
          price= :price, description= :description, creat_at= :creat_at, update_at= :update_at';
          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->company_id    = htmlspecialchars(strip_tags($this->company_id));
          $this->name          = htmlspecialchars(strip_tags($this->name));
          $this->price         = htmlspecialchars(strip_tags($this->price));
          $this->description   = htmlspecialchars(strip_tags($this->description));
          $this->creat_at      = htmlspecialchars(strip_tags($this->creat_at));
          $this->update_at     = htmlspecialchars(strip_tags($this->update_at));

       

          // Bind data
          $stmt->bindParam(':company_id', $this->company_id);
          $stmt->bindParam(':name',    $this->name);
          $stmt->bindParam(':description', $this->description);
          $stmt->bindParam(':price', $this->price);
          $stmt->bindParam(':creat_at', $this->creat_at);
          $stmt->bindParam(':update_at', $this->update_at);
          
          // Execute query
          if($stmt->execute()) {
            return true;
      }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }
    

    // Update Post
    public function update() {
          // Create query
          $query = 'UPDATE ' . $this->table . ' SET company_id= :company_id, name= :name, 
          price= :price, description= :description, creat_at= :creat_at, update_at= :update_at
          WHERE id = :id';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

         
   // Clean data
   $this->id    = htmlspecialchars(strip_tags($this->id));
   $this->company_id    = htmlspecialchars(strip_tags($this->company_id));
   $this->name          = htmlspecialchars(strip_tags($this->name));
   $this->price         = htmlspecialchars(strip_tags($this->price));
   $this->description   = htmlspecialchars(strip_tags($this->description));
   $this->creat_at      = htmlspecialchars(strip_tags($this->creat_at));
   $this->update_at     = htmlspecialchars(strip_tags($this->update_at));



   // Bind data
   $stmt->bindParam(':company_id', $this->company_id);
   $stmt->bindParam(':id', $this->id);
   $stmt->bindParam(':name',    $this->name);
   $stmt->bindParam(':description', $this->description);
   $stmt->bindParam(':price', $this->price);
   $stmt->bindParam(':creat_at', $this->creat_at);
   $stmt->bindParam(':update_at', $this->update_at);


          // Execute query
          if($stmt->execute()) {
            return true;
          }

          // Print error if something goes wrong
          printf("Error: %s.\n", $stmt->error);

          return false;
    }

    // Delete Post
    public function delete() {
          // Create query
          $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->id = htmlspecialchars(strip_tags($this->id));

          // Bind data
          $stmt->bindParam(':id', $this->id);

          // Execute query
          if($stmt->execute()) {
            return true;
          }

          // Print error if something goes wrong
          printf("Error: %s.\n", $stmt->error);

          return false;
    }
   
  }