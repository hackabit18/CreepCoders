<?php

// REST API for the database
class Database {

    // pre-requisites for the database connection
    private $conn;
    private $connectError;
    private $error;
    

    // constructor for the class to establish the connection with the database
    public function __construct($servername, $username, $password, $dbname) {
        if(!empty($dbname)){
            $this->conn = new mysqli($servername, $username, $password);
        }else{
            $this->conn = new mysqli($servername, $username, $password, $dbname);
        }
        if($this->conn->connect_error){
            $this->connectError = $this->conn->connect_error;
        }else{
            return true;
        }
    }

    // function to select the database if required
    public function selectDb($dbname) {
        $this->conn->select_db($dbname);
    }

    // function to make query 
    public function makeQuery($sql){
        if($this->conn->query($sql)){
            return true;
        }else{
            $this->error = $this->conn->error;
            return false;
        }
    }

}