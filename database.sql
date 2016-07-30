CREATE TABLE Item (
    id INT AUTO_INCREMENT,
    category_id INT 
    name VARCHAR(100) UNIQUE NOT NULL ,
    description TEXT,
    quantity INT,
    price FLOAT (6,2) NOT NULL
    PRIMARY KEY(id)
    
);

CREATE TABLE Photos (
    id INT AUTO_INCREMENT,
    item_id INT NOT NULL,
    path VARCHAR(100) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (item_id) REFERENCES Item (id) 
    ON DELETE CASCADE

)

CREATE TABLE User (
    id INT AUTO_INCREMENT,
    email VARCHAR(100) UNIQUE NOT NULL ,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255) NOT NULL,
    adress VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE Admin (
    id INT AUTO_INCREMENT,    
    email VARCHAR(100) UNIQUE NOT NULL ,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)    
)

CREATE TABLE `Order` (
    id INT AUTO_INCREMENT,
    user_id INT  NOT NULL,
    status INT NOT NULL,
    PRIMARY KEY (id)
    FOREIGN KEY (user_id) REFERENCES User(id),
)

CREATE TABLE Order_Item(
    item_id INT NOT NULL,
    order_id INT NOT NULL,
    FOREIGN KEY (item_id) REFERENCES Item (id),
    FOREIGN KEY (order_id) REFERENCES `Order`(id)
)



CREATE TABLE Status (
    id TINYINT AUTO_INCREAMENT,
    order_id INT NOT NULL,
    status VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
    FOREIGN KEY (order_id) REFERENCES Order(id),    

)

CREATE TABLE Message (
    id INT AUTO_INCREMENT,
    sender_id INT NOT NULL,
    receiver_id INT NOT NULL,
    order_id INT NOT NULL,
    message_text TEXT NOT NULL
    date DATETIME NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (sender_id) REFERENCES Admin(id),   
    FOREIGN KEY (receiver_id) REFERENCES User (id),
    FOREIGN KEY (order_id) REFERENCES `Order` (id)
)





