<?php
require_once 'connection.php';

class User extends Admin{
    
    static public function logIn(mysqli $conn, $email, $password) {
        //mysqli $conn - zmienna kt. sprawdza czy jest polaczenie z baza danych
        $sql = "SELECT * FROM User WHERE email = '$email'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $row = $result->fetch_assoc(); //zwracamy wynik jako tabl assocjacyjne, gdzi kluczami sa nazwy kolumn
            if(password_verify($password,$row['password'])){
                return $row['id'];
            }else{
                return false;
            }    
        } else {
          return false;  
        }
        
    }
    
    static public function getUserByEmail(mysqli $conn, $email){
        $sql = "SELECT * FROM User WHERE email = '$email'";
        $result = $conn->query($sql);
    
        if($result->num_rows ==1){
            $row = $result->fetch_assoc();
            $user = new User();
            $user->setID($row['id']);
            $user->setEmail($row['email']);
            $user->setPassword($row['password']);
            $user->setName($row['name']);
            $user->setSurname($row['surame']);
            $user->setAddress($row['address']);
            
            return $user;
        } else {
            
            return false;
        }
    }
    
    static public function loadUserFromDB(mysqli $conn, $userId) {
        $sql = "SELECT * FROM User WHERE id = $userId";
        $result = $conn->query($sql);
        if($result !== false && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $user = new User();
            $user->setID($row['id']);
            $user->setEmail($row['email']);
            $user->setPassword($row['password']);
            $user->setName($row['name']);
            $user->setSurname($row['surame']);
            $user->setAddress($row['address']);
            return $user;
        }
        return false;
    }
    

    private $name;
    private $surname;
    private $address;
    
    
    //konstruktor tworzy pusty obiekt ktory bedzie wypelniany setterami
    //jezeli id=-1 powinienm zrobic insert do bazy danych jezeli id>-1 powinnienem zrobic update
    
public function __construct() {
    parent::__construct();

        $this->name= '';
        $this->surname = '';
        $this->address = '';

}
    public function setName($newName){
        $this->name = is_string($newName) ? $newName :'';
    }
    
    public function getName (){
        return $this->name;
    }
    public function setSurname($newSurname){
        $this->surname = is_string($newSurname) ? $newSurname :'';
    }
    
    public function getSurname (){
        return $this->surname;
    }    
 
    public function setAddress($newAddress){
        $this->address = is_string($newAddress) ? $newAddress :'';
    }
    
    public function getAddress(){
        return $this->address;
    }
    
    public function show(){
        parent::show();
        echo("<div class='panel-body'>"

                . "Name: $this->name"
                . "Surame: $this->surname"
                . "Address:$this->address"    
                . "</div>");
       
           
    }
    
    public function saveUserToDB(mysqli $conn){
       if($this->id == -1) {
           $sql = "INSERT INTO User(email, password, name,surname, address)
                   VALUES ('$this->email',
                   '$this->password',
                   '$this->name',
                   '$this->surname'
                   '$this->address')";
           if($conn->query($sql)) {
               $this->id = $conn->insert_id;
               return $this;
           }else{
               return false;
           }
           
       } else {
           $sql = "UPDATE User SET 
                   email = '{$this->email}',
                   password = '{$this->password}',
                   name = '{$tis->name}',
                   surname = '{$tis->surname}',
                   address = '{$this->address}'
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