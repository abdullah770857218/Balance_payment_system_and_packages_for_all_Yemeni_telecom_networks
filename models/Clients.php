<?php 
  class Clients {
    // DB stuff
    private $conn;
    private $table = 'clients';
// id	user_id	name	phone	city	address		status	balence	last_login	token	creat_date	last_update	
    // Post Properties
    public $id;
    public $name;
    public $user_id;
    public $user_name;
    public $phone;
    public $city;
    public $address;
    public $password;
    public $status;
    public $balence;
    public $last_login;
    public $token;
    public $creat_date;
    public $last_update;
    public $activety;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT u.name as user_name, c.id, c.name, c.user_id, c.phone, c.city, c.address, c.password, c.status, c.balence, c.last_login, c.token, c.creat_date, c.last_update
                FROM '. $this->table .' c 
                LEFT JOIN man_user u ON c.user_id = u.id ';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }
 

    // Get Single Post
    public function read_single() {
          // Create query
          $query = 'SELECT u.name as user_name, c.name, c.id, c.user_id, c.phone, c.city, c.address, c.password, c.status, c.balence, c.last_login, c.token, c.creat_date, c.last_update
          FROM '. $this->table .' c 
          LEFT JOIN man_user u ON c.user_id = u.id 
                                    WHERE
                                      c.id = ?
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
          $this->user_id = $row['user_id'];
          $this->user_name = $row['user_name'];
          $this->phone = $row['phone'];
          $this->city = $row['city'];
          $this->address = $row['address'];
          $this->password = $row['password'];
          $this->status = $row['status'];
          $this->last_login = $row['last_login'];
          $this->token = $row['token'];
          $this->creat_date = $row['creat_date'];
          $this->last_update = $row['last_update'];
          $this->balence = $row['balence'];


          
    }
    public function read_single_log() {
      // Create query
      $query = 'SELECT u.name as user_name, c.name, c.id, c.user_id, c.phone, c.city, c.address, c.password, c.status, c.balence, c.last_login, c.token, c.creat_date, c.last_update ,c.activety
      FROM '. $this->table .' c 
      LEFT JOIN man_user u ON c.user_id = u.id 
                                WHERE
                                  c.phone = ?
                                LIMIT 0,1';

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Bind ID
      $stmt->bindParam(1, $this->phone);

      // Execute query
      $stmt->execute();

      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      // Set properties
      $this->id = $row['id'];
      $this->name = $row['name'];
      $this->user_id = $row['user_id'];
      $this->user_name = $row['user_name'];
      $this->phone = $row['phone'];
      $this->city = $row['city'];
      $this->address = $row['address'];
      $this->password = $row['password'];
      $this->status = $row['status'];
      $this->last_login = $row['last_login'];
      $this->token = $row['token'];
      $this->creat_date = $row['creat_date'];
      $this->last_update = $row['last_update'];
      $this->activety = $row['activety'];


      
}
  
    // Create Client
    public function create() {
          // Create query
     
          $query = 'INSERT INTO ' . $this->table . ' SET user_id = :user_id, name = :name, phone = :phone, city = :city, address = :address,
          password = :password,status = :status,
          balence = :balence,last_login = :last_login,token = :token,
          creat_date = :creat_date,last_update = :last_update, activety= :activety';
          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->user_id = htmlspecialchars(strip_tags($this->user_id));
          $this->name = htmlspecialchars(strip_tags($this->name));
          $this->phone = htmlspecialchars(strip_tags($this->phone));
          $this->city = htmlspecialchars(strip_tags($this->city));
          $this->address = htmlspecialchars(strip_tags($this->address));
          $this->password = htmlspecialchars(strip_tags($this->password));
          $this->status = htmlspecialchars(strip_tags($this->status));
          $this->balence = htmlspecialchars(strip_tags($this->balence));
          $this->last_login = htmlspecialchars(strip_tags($this->last_login));
          $this->token = htmlspecialchars(strip_tags($this->token));
          $this->creat_date = htmlspecialchars(strip_tags($this->creat_date));
          $this->last_update = htmlspecialchars(strip_tags($this->last_update));
          $this->activety = htmlspecialchars(strip_tags($this->activety));

          // Bind data
          $stmt->bindParam(':user_id', $this->user_id);
          $stmt->bindParam(':name', $this->name);
          $stmt->bindParam(':phone', $this->phone);
          $stmt->bindParam(':city', $this->city);
          $stmt->bindParam(':address', $this->address);
          $stmt->bindParam(':password', $this->password);
          $stmt->bindParam(':status', $this->status);
          $stmt->bindParam(':balence', $this->balence);
          $stmt->bindParam(':last_login', $this->last_login);
          $stmt->bindParam(':token', $this->token);
          $stmt->bindParam(':creat_date', $this->creat_date);
          $stmt->bindParam(':last_update', $this->last_update);
          $stmt->bindParam(':activety', $this->activety);
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
          $query = 'UPDATE ' . $this->table . ' SET
          user_id = :user_id, name = :name, phone = :phone, city = :city, address = :address,
          password = :password,status = :status,
          balence = :balence,last_login = :last_login,token = :token,
          creat_date = :creat_date,last_update = :last_update
          WHERE id = :id';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

         
          // Clean data
          $this->user_id = htmlspecialchars(strip_tags($this->user_id));//here filter for hacking injections
          $this->name = htmlspecialchars(strip_tags($this->name));
          $this->phone = htmlspecialchars(strip_tags($this->phone));
          $this->city = htmlspecialchars(strip_tags($this->city));
          $this->address = htmlspecialchars(strip_tags($this->address));
          $this->password = htmlspecialchars(strip_tags($this->password));
          $this->status = htmlspecialchars(strip_tags($this->status));
          $this->balence = htmlspecialchars(strip_tags($this->balence));
          $this->last_login = htmlspecialchars(strip_tags($this->last_login));
          $this->token = htmlspecialchars(strip_tags($this->token));
          $this->creat_date = htmlspecialchars(strip_tags($this->creat_date));
          $this->last_update = htmlspecialchars(strip_tags($this->last_update));
          $this->id = htmlspecialchars(strip_tags($this->id));

          // Bind data
       
          
          // Bind data
          $stmt->bindParam(':id', $this->id);
          $stmt->bindParam(':user_id', $this->user_id);
          $stmt->bindParam(':name', $this->name);
          $stmt->bindParam(':phone', $this->phone);
          $stmt->bindParam(':city', $this->city);
          $stmt->bindParam(':address', $this->address);
          $stmt->bindParam(':password', $this->password);
          $stmt->bindParam(':status', $this->status);
          $stmt->bindParam(':balence', $this->balence);
          $stmt->bindParam(':last_login', $this->last_login);
          $stmt->bindParam(':token', $this->token);
          $stmt->bindParam(':creat_date', $this->creat_date);
          $stmt->bindParam(':last_update', $this->last_update);


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