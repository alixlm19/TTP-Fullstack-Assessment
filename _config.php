<?php 

    define('DEBUG', 1);
    define('PRODUCTION', 0);
    
    //Development_mode : DEBUG / PRODUCTION
    $development_mode = DEBUG;            

    $app_path = "../";
    
    /**
     * Database configuration singleton class
     * 
     * This class contains all of the databse variables needed to connect to the database
     */
    class DatabaseConfig {
        static $host     = "host name";        
        static $name     = "database";
        static $user     = "user name";
        static $password = "password";
    }
?>