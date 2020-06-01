<?php
/*
 * CREATE TABLE food_order (
 	order_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    food VARCHAR(50),
    meal VARCHAR(10),
    condiments VARCHAR(100),
    date_time DATETIME DEFAULT NOW()
)

INSERT INTO food_order (food, meal, condiments)
VALUES ('sandwich', 'breakfast', 'sriracha, mayonnaise');
 */

//Require our config file
require '/home/tostrand/config.php';

class Database
{
    private $_dbh;

    function __construct()
    {
        //Connect to database with PDO
        try {
            //Instantiate a database object
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            //echo 'Connected to database!';
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}