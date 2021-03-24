<?php 
  class Companies {
    // DB stuff
    private $conn;
    private $table = 'company';
//	id	name	phone	address	api_url	access_token	balence	status	
//promotian	creat_at	update_at	
    // Post Properties
    public $id;
    public $name;
    public $phone;
    public $address;
    public $api_url;
    public $access_token;
    public $balence;
    public $status;
    public $promotian;
    public $creat_at;
    public $update_at;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT * FROM '. $this->table .' ';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }
    public function balances() {
      // Create query
      $query = 'SELECT balence,name,id FROM '. $this->table .' WHERE id = ?';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);
      $stmt->bindParam(1, $this->id);

      // Execute query
      $stmt->execute();
// var_dump($stmt);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$this->id = $row['id'];
$this->name = $row['name'];
$this->balence = $row['balence'];
      return $stmt;
    }

    // Get Single Post
    public function read_single() {
          // Create query
          $query = 'SELECT * FROM ' . $this->table .' WHERE id = ?
                                    LIMIT 0,1';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Bind ID
          $stmt->bindParam(1, $this->id); 

         // Execute query
          $stmt->execute();

          $row = $stmt->fetch(PDO::FETCH_ASSOC);

          // Set properties
          $this->id = $row['id'];
          $this->name = $row['name'];
          $this->phone = $row['phone'];
          $this->address = $row['address'];
          $this->status = $row['status'];
          $this->access_token = $row['access_token'];
          $this->promotian = $row['promotian'];
          $this->api_url = $row['api_url'];
          $this->balence = $row['balence'];
          $this->creat_at = $row['creat_at'];
          $this->update_at = $row['update_at'];


          
    }

  
    // Create Client
    public function create() {
          // Create query
     
          $query = 'INSERT INTO ' . $this->table . ' SET name = :name, phone= :phone, address= :address, 
          api_url= :api_url, access_token= :access_token, balence= :balence, status= :status, 
          promotian = :promotian, creat_at = :creat_at, update_at = :update_at';
          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->name = htmlspecialchars(strip_tags($this->name));
          $this->phone = htmlspecialchars(strip_tags($this->phone));
          $this->address = htmlspecialchars(strip_tags($this->address));
          $this->api_url = htmlspecialchars(strip_tags($this->api_url));
          $this->status = htmlspecialchars(strip_tags($this->status));
          $this->balence = htmlspecialchars(strip_tags($this->balence));
          $this->access_token = htmlspecialchars(strip_tags($this->access_token));
          $this->promotian = htmlspecialchars(strip_tags($this->promotian));
          $this->creat_at = htmlspecialchars(strip_tags($this->creat_at));
          $this->update_at = htmlspecialchars(strip_tags($this->update_at));

          // Bind data
          $stmt->bindParam(':name', $this->name);
          $stmt->bindParam(':phone', $this->phone);
          $stmt->bindParam(':address', $this->address);
          $stmt->bindParam(':status', $this->status);
          $stmt->bindParam(':balence', $this->balence);
          $stmt->bindParam(':access_token', $this->access_token);
          $stmt->bindParam(':api_url', $this->api_url);
          $stmt->bindParam(':creat_at', $this->creat_at);
          $stmt->bindParam(':update_at', $this->update_at);
          $stmt->bindParam(':promotian', $this->promotian);

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
          $query = 'UPDATE ' . $this->table . ' SET  name = :name, phone= :phone, address= :address, 
          api_url= :api_url, access_token= :access_token, balence= :balence, status= :status, 
          promotian = :promotian, creat_at = :creat_at, update_at = :update_at
          WHERE id = :id';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

         
        // Clean data
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->phone = htmlspecialchars(strip_tags($this->phone));
        $this->address = htmlspecialchars(strip_tags($this->address));
        $this->api_url = htmlspecialchars(strip_tags($this->api_url));
        $this->status = htmlspecialchars(strip_tags($this->status));
        $this->balence = htmlspecialchars(strip_tags($this->balence));
        $this->access_token = htmlspecialchars(strip_tags($this->access_token));
        $this->promotian = htmlspecialchars(strip_tags($this->promotian));
        $this->creat_at = htmlspecialchars(strip_tags($this->creat_at));
        $this->update_at = htmlspecialchars(strip_tags($this->update_at));

        // Bind data
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':phone', $this->phone);
        $stmt->bindParam(':address', $this->address);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':balence', $this->balence);
        $stmt->bindParam(':access_token', $this->access_token);
        $stmt->bindParam(':api_url', $this->api_url);
        $stmt->bindParam(':creat_at', $this->creat_at);
        $stmt->bindParam(':update_at', $this->update_at);
        $stmt->bindParam(':promotian', $this->promotian);



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