<?php 
  class ManUsers {
    // DB stuff
    private $conn;
    private $table = 'man_user';
  
    // Post Properties
    public $id;
    public $name;
    public $email;
    public $phone;
    public $password;
    public $status;
    public $last_login;
    public $token;
    public $creat_at;
    public $update_at;      
            

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT *
                FROM '. $this->table . ' ';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }

    // Get Single Post
    public function read_single() {
          // Create query
          $query = 'SELECT * FROM '. $this->table .'  
                                    WHERE
                                      id = ?
                                    LIMIT 0,1';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Bind ID
          $stmt->bindParam(1, $this->id);

          // Execute query
          $stmt->execute();

          $row = $stmt->fetch(PDO::FETCH_ASSOC);

          // Set properties
          $this->id          = $row['id'];
          $this->name       = $row['name'];
          $this->email      = $row['email'];
          $this->phone      = $row['phone'];
          $this->password   = $row['password'];
          $this->status     = $row['status'];
          $this->last_login = $row['last_login'];
          $this->token      = $row['token'];
          $this->creat_at   = $row['creat_at'];
          $this->update_at  = $row['update_at'];
     

          
    }
   

    // Create Client
    public function create() {
          // Create query
     
          $query = 'INSERT INTO ' . $this->table . ' SET name= :name, email= :email, 
          phone= :phone, password= :password, status= :status, last_login= :last_login, token= :token, creat_at= :creat_at, update_at= :update_at';
          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->name       = htmlspecialchars(strip_tags($this->name      ));
          $this->email      = htmlspecialchars(strip_tags($this->email     ));
          $this->phone      = htmlspecialchars(strip_tags($this->phone     ));
          $this->password   = htmlspecialchars(strip_tags($this->password  ));
          $this->status     = htmlspecialchars(strip_tags($this->status    ));
          $this->last_login = htmlspecialchars(strip_tags($this->last_login));
          $this->token      = htmlspecialchars(strip_tags($this->token     ));
          $this->creat_at   = htmlspecialchars(strip_tags($this->creat_at  ));
          $this->update_at  = htmlspecialchars(strip_tags($this->update_at ));

          // Bind data
          $stmt->bindParam(':name', $this->name);
          $stmt->bindParam(':email',$this->email);
          $stmt->bindParam(':phone', $this->phone);
          $stmt->bindParam(':password', $this->password);
          $stmt->bindParam(':status',$this->status);
          $stmt->bindParam(':last_login', $this->last_login);
          $stmt->bindParam(':token', $this->token);
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
          $query = 'UPDATE ' . $this->table . ' SET name= :name, email= :email, 
          phone= :phone, password= :password, status= :status, last_login= :last_login, token= :token, creat_at= :creat_at, update_at= :update_at
          WHERE id = :id';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

         
             // Clean data
             $this->id       = htmlspecialchars(strip_tags($this->id      ));
             $this->name       = htmlspecialchars(strip_tags($this->name      ));
             $this->email      = htmlspecialchars(strip_tags($this->email     ));
             $this->phone      = htmlspecialchars(strip_tags($this->phone     ));
             $this->password   = htmlspecialchars(strip_tags($this->password  ));
             $this->status     = htmlspecialchars(strip_tags($this->status    ));
             $this->last_login = htmlspecialchars(strip_tags($this->last_login));
             $this->token      = htmlspecialchars(strip_tags($this->token     ));
             $this->creat_at   = htmlspecialchars(strip_tags($this->creat_at  ));
             $this->update_at  = htmlspecialchars(strip_tags($this->update_at ));
   
             // Bind data
             $stmt->bindParam(':id', $this->id);
             $stmt->bindParam(':name', $this->name);
             $stmt->bindParam(':email',$this->email);
             $stmt->bindParam(':phone', $this->phone);
             $stmt->bindParam(':password', $this->password);
             $stmt->bindParam(':status',$this->status);
             $stmt->bindParam(':last_login', $this->last_login);
             $stmt->bindParam(':token', $this->token);
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