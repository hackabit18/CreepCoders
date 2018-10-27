<?php

include "../session.check/session.php";
include "../validation/validate.php";

// function to get the parameters
function getParameter($name) {
    if(isset($_POST)){
        return $_POST[$name];
    }else{
        return $_GET[$name];
    }
}

class Signup {
    //pre-requisites for the connection and signup purpose
    private $conn;
    private $fname;
    private $email;
    private $password;
    private $vno;
    private $pid;

    // constructor to connect to the database
    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "pickup");
        if($this->conn->connect_error){
            header("location: ../?error=database unknown error");
            exit;
        }else{
            return true;
        }
    }

    // function to get the post values
    private function getVal() {
        if(isset($_POST['submit'])){
            $this->fname = stripslashes(htmlspecialchars(getParameter('fname')));
            $this->email = stripslashes(htmlspecialchars(getParameter('email')));
            $this->password = password_hash(getParameter('password'), PASSWORD_DEFAULT);
            $this->vno = stripslashes(htmlspecialchars(getParameter('vno')));
            $this->pid = stripslashes(htmlspecialchars(getParameter('pid')));
        }
    }

    // function to validate email address
    private function verifyEmail() {
        if(Validation::validateEmail($this->email)){
            return true;
        }else{
            header("location: ../?error=Invalid Email address");
            exit;
        }
    }

    // function to validate useraname
    private function verifyUserName() {
        if(!Validation::validateUsername($this->fname)){
            header("location: ../?error=Invalid UserName");
            exit;
        }
    }

    // function to verify the email address 
    private function confirmPassword() {
        $cnf = getParameter('cnf');
        if(!password_verify($cnf, $this->password)){
            header("location: ../?error=password didn't match");
            exit;
        }
    }

    // function to signup the user into the database
    public function signup() {
        $this->getVal();
        $this->verifyEmail();
        $this->confirmPassword();
        $sql = "SELECT * from userinfo WHERE email = '$this->email' ";
        $results = $this->conn->query($sql);
        if($results->num_rows>0){
            header("location: ../?error=User already exists. Please login to continue");
            exit;
        }else{
            $sql = "INSERT INTO userinfo (fname, email, pwd, vno, pid) VALUES ('$this->fname', '$this->email', '$this->password', '$this->vno', '$this->pid') ";
            if($this->conn->query($sql)){
                $_SESSION['id'] = $this->conn->insert_id;
                header("location: ../setup/user");
                exit;
            }else{
                header("location: ../?error=".$this->conn->error);
                exit;
            }
        }
        $this->conn->close();
    }

}

$ob = new Signup();
$ob->signup();