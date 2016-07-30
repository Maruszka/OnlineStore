<?php


class Message{
    static public function loadMessageById(mysqli $conn, $messageId) {
        $sql = "SELECT * FROM Message WHERE Message.id = $messageId";
        $result = $conn->query($sql);
        
        if($result->num_rows  == 1){
            foreach($result as $key => $row){
                $message = new Message();
                $message->setId($row['id']);
                $message->receiverId = $row['receiver_id'];
                $message->senderId = $row['sender_id'];
                $message->message = $row['message_text'];
                $message->orderId = $row['order_id'];
                $message->date = $row['date'];
            }
            return $message;
        }
        return [];      
    
    }    
    
    static public function loadAllMessagesByReceiverId(mysqli $conn, $receiverId) {
        $sql = "SELECT * FROM Message WHERE Message.receiver_id = $receiverId";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0){
            $messages = array();
            foreach($result as $key => $row){
                $message = new Message();
                $message->setId($row['id']);
                $message->receiverId = $row['receiver_id'];
                $message->senderId = $row['sender_id'];
                $message->message = $row['message_text'];
                $message->orderId = $row['order_id'];
                $message->date = $row['date'];
                $messages[] = $message;
            }
            return $messages;
        }
        return [];      
    
    }    
    
    static public function loadAllMessagesBySenderId(mysqli $conn, $senderId){
        $sql = "SELECT * FROM Message WHERE Message.sender_id = $senderId";
        
        $result = $conn->query($sql);
        
        if($result->num_rows > 0){
            $messages = array();
            foreach($result as $key => $val){
                $message = new Message();
                $message->setId($row['id']);
                $message->senderId = $val['sender_id'];
                $message->receiverId = $val['receiver_id'];
                $message->message = $val['message_text'];
                $message->orderId = $row['order_id'];
                $message->date = $val['date'];
                $messages[] = $message;
            }
            return $messages;
        }
        return [];
    } 

    
    private $id;
    private $receiverId;
    private $senderId;
    private $orderId;
    private $message;
    private $date;


    public function __construct(){
        $this->id = -1;
        $this->receiverId = 0;
        $this->senderId = 0;
        $this->orderId = 0; //nieprzeczytana
        $this->message = '';
        $this->date = '0-0-0 0-0-0';
    }
    
    public function getId(){
        return $this->id;
    }
    public function setId($newId){
        $this->id =is_numeric($newId) ? $newId : -1; 
    }    

    public function getReceiverId(){
        return $this->receiverId;
    }
    
    public function setReceiverId($newReceiverId){
        $this->receiverId = is_numeric($newReceiverId) ? $newReceiverId : 0;
    } 
    public function getSenderId(){
        return $this->senderId;
    }
    
    public function setSenderId($newSenderId){
        $this->senderId = is_numeric($newSenderId) ? $newSenderId : 0;
    }    
    public function getMessage(){
       return $this->message;
    }
    public function setMessage($newMessage){
        $this->message = $newMessage;
    }
    public function getDate(){
       return $this->date;
    }
    public function setDate($newDate){
        $this->date = $newDate;
    }
    public function getOrderId(){
       return $this-> status;
    }
    public function setOrderId($newOrderId){
        $this->orderId = is_numeric($newOrderId) ? $newOrderId : -1;  
    }
    
     
    
    public function saveMessageToDB(mysqli $conn){
        if($this->id == -1){
            $sql = "INSERT INTO Message(sender_id, receiver_id, message_text, order_id, date) VALUES($this->senderId, $this->receiverId, '$this->message', $this->orderId, '$this->date')";
            
            if($conn->query($sql)){
                $this->id = $conn->insert_id;
                return $this;
            }
            else{
                return false;
            }
        }
    }
    
  
    
    public function showMessages(mysqli $conn){    
        $user = User::loadUserFromDB($conn, $this->receiverId);
        $receiverName = $user->getName();
        $receiverSurname = $user->getSurname();
        
        echo( "<tr><td class='col-sm-3 col-xs-4'><a href='showMessage.php?messageId=$this->id'>$this->date</a></td>"
            ."<td class='col-sm-2 col-xs-4'><a href='showMessage.php?messageId=$this->id'> $receiverName"." " ."$receiverSurname</a></td>"
            ."<td class='col-sm-2 col-xs-4'><a href='showMessage.php?messageId=$this->id'> $this->orderId</a></td>"
            ."<td class='col-sm-2 col-xs-4'><a href='showMessage.php?messageId=$this->id'> $this->message </a></td></tr><br>");
    

        
    }

    
}    
    

  ?>
