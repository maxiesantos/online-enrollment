<?php

class Database{
    
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "db_pagsanjan";
    private $conn;
    
    public function __construct(){
        
        $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
  
    }
    
    public function add_account($account){
        
        //anti jejemon data
        foreach($account as $key => $value){
            $lowercase = strtolower($value);
            $account[$key] = ucfirst($lowercase);
        }
   
        //password must type twice with same value
        if($account['txtPassword'] != $account['txtConfirmPassword']){
            return;
        }
        
        //password must not short
        if(strlen($account['txtPassword']) < 8){
            return;
        }
        
        
        
        
        $account['txtPassword'] = sha1($account['txtPassword']);
        
        $sql = "INSERT INTO 
        
        tbl_account(
        firstname,
        middlename,
        lastname,
        email,
        password
        ) 
        
        VALUES(
        '{$account['txtFirstName']}',
        '{$account['txtMiddleName']}',
        '{$account['txtLastName']}',
        '{$account['txtEmail']}',
        '{$account['txtPassword']}'
        )";
        
        $this->conn->query($sql);
        
     
    }
}