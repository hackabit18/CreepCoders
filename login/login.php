<?php
session_start();
if(isset($_SESSION['id'])){
    header("location: ../setup/user");
}else{
    if(!isset($_POST['submit'])){
        header("location: ../?not logged in");
    }
}
include "../db/db.php";
include "../Validation/validate.php";

class Login {
    private $conn;
    private $email;
    private $password;

    // constructor for the required login 
    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "","pickup");
        if($this->conn->connect_error){
            header("location: ../login.php?error=Database connection failed");
            exit;
        }else{
            return true;
        }
    }

    // function to get the user values from the form
    private function getVal() {
        if(isset($_POST['submit'])){
            $this->email = stripslashes(htmlspecialchars($_POST['email']));
            $this->password = stripslashes(htmlspecialchars($_POST['password']));
        }else{
            header("location: ../login.php?error=please submit the form again");
            exit;
        }
    }

    // function to validate the email address
    public function validateEmail() {
        if(Validation::validateEmail($this->email)){
            return true;
        }else{
            header("location: ../login.php?error=Invalid Email Address");
            exit;
        }
    }

    // function to call when signin using email and password
    public function login() {
        $this->getVal();
        $this->validateEmail();
        $sql = "SELECT * from userinfo WHERE email = '$this->email' ";
        $results = $this->conn->query($sql);
        if($results->num_rows<=0){
            header("location: ../login.php?error=User doesn't exist");
            exit;
        }else{
            $rows = $results->fetch_assoc();
            $pwd = $rows['pwd'];
            $id = $rows['id'];
            if(password_verify($this->password, $pwd)){
                $_SESSION['id'] = $id;
                header("location: ../setup/user.php");
                $this->conn->close();
                exit;
            }else{
                header("location: ../login.php?error=user id or password incorrect");
                exit;
            }
        }
    }
}

$ob = new Login();
$ob->login();