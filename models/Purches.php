<?php 
  class Purches {
    // DB stuff
    private $conn;
    private $table = 'purche';
    public $id;
    public $company_id;
    public $company_name;
    public $user_id;
    public $user_name;
    public $price;
    public $creat_at;
    public $update_at;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT c.name as company_name, u.name as user_name,
      p.id, p.company_id, p.user_id, p.price, p.creat_at, p.update_at
      FROM '. $this->table .' p 
       LEFT JOIN company c ON p.company_id = c.id 
       LEFT JOIN man_user u ON p.user_id = u.id';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }
 

    // Get Single Post
    public function read_single() {
          // Create query
          $query = 'SELECT c.name as company_name, u.name as user_name,
          p.id, p.company_id, p.user_id, p.price, p.creat_at, p.update_at
          FROM '. $this->table .' p 
           LEFT JOIN company c ON p.company_id = c.id 
           LEFT JOIN man_user u ON p.user_id = u.id
                                    WHERE
                                      p.id = ?
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
          $this->user_id         = $row['user_id'];
          $this->user_name       = $row['user_name'];
          $this->price           = $row['price'];
          $this->creat_at        = $row['creat_at'];
          $this->update_at       = $row['update_at'];

          
    }
    
  // Create Client
    public function create() {
          // Create query
     
          $query = 'INSERT INTO ' . $this->table . ' SET company_id= :company_id, user_id= :user_id, 
          price= :price, creat_at= :creat_at, update_at= :update_at';
          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->company_id    = htmlspecialchars(strip_tags($this->company_id));
          $this->user_id          = htmlspecialchars(strip_tags($this->user_id));
          $this->price         = htmlspecialchars(strip_tags($this->price));
          $this->creat_at      = htmlspecialchars(strip_tags($this->creat_at));
          $this->update_at     = htmlspecialchars(strip_tags($this->update_at));

       

          // Bind data
          $stmt->bindParam(':company_id', $this->company_id);
          $stmt->bindParam(':user_id',    $this->user_id);
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
          $query = 'UPDATE ' . $this->table . ' SET company_id= :company_id, user_id= :user_id, 
          price= :price, creat_at= :creat_at, update_at= :update_at
          WHERE id = :id';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

         
     // Clean data
     $this->company_id    = htmlspecialchars(strip_tags($this->company_id));
     $this->company_id    = htmlspecialchars(strip_tags($this->company_id));
     $this->user_id          = htmlspecialchars(strip_tags($this->user_id));
     $this->price         = htmlspecialchars(strip_tags($this->price));
     $this->creat_at      = htmlspecialchars(strip_tags($this->creat_at));
     $this->update_at     = htmlspecialchars(strip_tags($this->update_at));

  

     // Bind data
     $stmt->bindParam(':id', $this->id);
     $stmt->bindParam(':company_id', $this->company_id);
     $stmt->bindParam(':user_id',    $this->user_id);
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