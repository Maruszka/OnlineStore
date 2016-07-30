<?php

class Admin {
    
static public function logIn(mysqli $conn, $email, $password) {
    $admin = Admin::getAdminByEmail($conn, $email);
        if ($admin){
            if(password_verify($password,$row['password'])){
                return $admin->getId();
            }else{
                return false;
            }    
        } else {
          return false;  
        }
 
    }
static public function getAdminByEmail(mysqli $conn, $email){
        $sql = "SELECT * FROM Admin WHERE email = '$email'";
        $result = $conn->query($sql);
    
        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            $admin = new Admin();
            $admin ->setID($row['id']);
            $admin->setEmail($row['email']);
            $admin->setPassword($row['password']);
            
            return $admin;
        } else {
            
            return false;
        }
}
static public function loadAdminFromDB(mysqli $conn, $adminId) {
        $sql = "SELECT * FROM Admin WHERE id = $adminId";
        $result = $conn->query($sql);
        if($result !== false && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $admin = new Admin();
            $admin->setID($row['id']);
            $admin->setEmail($row['email']);
            $admin->setPassword($row['password']);
            return $admin;
        }
        return false;
}

static public function setEmail(){
    $this->email = is_string($email) ? $email :'' ;
    return $this;
}

static public function setPassword($password) {
    $this->password =is_string($password) ? $password :'';
}
    
    
    protected $id;
    protected $email;
    protected $password;
    
 public function __construct(){
     $this->id = -1;
     $this->email = " ";
     $this->password = " ";
 }   
 
public function getId(){
        return $this->id;
}
public function setId($newId){
    $this->id = is_numeric($newId);
}

public function getEmail(){
    return $this->email;
}

public function setHashedPassword($password){
    $this->password = is_string($password) ? password_hash($password, PASSWORD_DEFAULT): '';
}

public function show(){

    echo("<div class='panel-body'>"

            . "Name: $this->email"
            . "</div>");


}

public function saveAdminToDB(mysqli $conn){
   if($this->id == -1) {
       $sql = "INSERT INTO Admin(email, password)
               VALUES ('$this->email',
               '$this->password'";
       if($conn->query($sql)) {
           $this->id = $conn->insert_id;
           return $this;
       }else{
           return false;
       }

   } else {
       $sql = "UPDATE Admin SET 
               email = '{$this->email}',
               password = '{$this->password}',
               WHERE id = '{$this->id}'";

       if($conn->query($sql)){
           return $this;
       } else {
           return FALSE;
       }
   }
   return $conn->query($sql);

}




         
         
         
}

