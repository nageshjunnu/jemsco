<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'jemsco_sms');
define('DB_PASSWORD', 'jemsco_smsjemsco_sms');
define('DB_NAME', 'jemsco_sms');



class dbModel {
 public function conn(){
    $hostname = 'localhost'; // Change this to your database hostname
    $username = 'jemsco_sms'; // Change this to your database username
    $password = 'jemsco_smsjemsco_sms'; // Change this to your database password
    $database = 'jemsco_sms';
        try {
            // Create a new PDO instance
            $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

            // Set PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
            // You can now use $db for database operations in this script
        } catch (PDOException $e) {
            // Handle database connection error
            echo "Database Connection Error: " . $e->getMessage();
            // You may want to terminate the script or handle the error differently
        }

}
}