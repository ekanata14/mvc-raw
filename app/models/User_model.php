<?php

class User_model{ // User_model class is used to make a connection and query to database and processing data in user table
    private $table = "user"; // Choose what table you'd like to use
    private $db; // db Variable is used for database instantiating place

    public function __construct()
    {
        $this->db = new Database(); //Instantiating database class and put it to the $db variable
    }

    public function getAllUsers(){
        $this->db->query("SELECT * FROM {$this->table}"); // Using the db variable that has been instantiated from class Database for querying data from database
    }
}