<?php 
  class Proccesses {
    // DB stuff
    private $conn;
    private $table = 'proccess';
    //id	client_id	company_id	offer_id	price	phone_customer	status	creat_at	    public $id;
    public $id;
    public $offer_id;
    public $offer_name;
    public $client_id;
    public $client_name;
    public $client_phone;
    public $company_id;
    public $company_name;
    public $phone_customer;
    public $status;
    public $creat_at;
    public $price;
    // public $phone;


    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT c.name as company_name, o.name as offer_name, cl.name as client_name, cl.phone as client_phone,
      p.id, p.company_id, p.offer_id, p.client_id, p.price,p.phone_customer, p.creat_at, p.status
      FROM '. $this->table .' p 
       LEFT JOIN company c ON p.company_id = c.id 
       LEFT JOIN offer o ON p.offer_id = o.id
       LEFT JOIN clients cl ON p.client_id = cl.id';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }
 

    // Get Single Post
    public function read_single() {
          // Create query
          $query = 'SELECT c.name as company_name, o.name as offer_name, cl.phone as client_phone, p.id,
           p.price, p.creat_at, p.status, p.phone_customer
           FROM '.$this->table.' p 
           LEFT JOIN company c ON p.company_id = c.id 
           LEFT JOIN offer o ON p.offer_id = o.id
           LEFT JOIN clients cl ON p.client_id = cl.id 
           WHERE cl.phone = ?';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Bind ID
          $stmt->bindParam(1, $this->client_phone);

          // Execute query
          $stmt->execute();

         return $stmt;
          // $this->update_at       = $row['update_at'];

          
    }

    public function save_db() {
      // Create query
 
      $query = 'INSERT INTO ' . $this->table . ' SET company_id= :company_id, client_id= :client_id, offer_id= :offer_id, 
      price= :price, phone_customer= :phone_customer, status= :status, creat_at= :creat_at';
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Clean data
      $this->company_id         = htmlspecialchars(strip_tags($this->company_id));
      $this->client_id          = htmlspecialchars(strip_tags($this->client_id));
      $this->offer_id             = htmlspecialchars(strip_tags($this->offer_id));
      $this->phone_customer         = htmlspecialchars(strip_tags($this->phone_customer));
      $this->price                = htmlspecialchars(strip_tags($this->price));
      $this->status           = htmlspecialchars(strip_tags($this->status));
      $this->creat_at            = htmlspecialchars(strip_tags($this->creat_at));
      // $this->update_at     = htmlspecialchars(strip_tags($this->update_at));

   

      // Bind data
      $stmt->bindParam(':company_id', $this->company_id);
      $stmt->bindParam(':client_id',    $this->client_id);
      $stmt->bindParam(':offer_id', $this->offer_id);
      $stmt->bindParam(':price', $this->price);
      $stmt->bindParam(':phone_customer', $this->phone_customer);
      $stmt->bindParam(':creat_at', $this->creat_at);
      $stmt->bindParam(':status', $this->status);
      
      // Execute query
      if($stmt->execute()) {
        return true;
      }
      return false;
  

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
public function update_the_values_client($balence_new)
{
  $query = 'UPDATE clients SET  balence= :balence WHERE id = :id';
  $stmt = $this->conn->prepare($query);

  $stmt->bindParam(':id', $this->client_id);
  $stmt->bindParam(':balence', $balence_new);
  if($stmt->execute()) {
    return true;
  }
  return false;
}
public function update_the_values_company($balence_new)
{
  $query = 'UPDATE company SET  balence= :balence WHERE id = :id';
  $stmt = $this->conn->prepare($query);

  $stmt->bindParam(':id', $this->company_id);
  $stmt->bindParam(':balence', $balence_new);
  if($stmt->execute()) {
    return true;
  }
  return false;
}
  }