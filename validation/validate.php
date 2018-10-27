<?php 

class Validation {
    
    // function to validate Email address
    public static function validateEmail ($email) {
        $reg = "/^[a-zA-Z0-9\._]+@[a-zA-Z0-9_\.]+\.[a-zA-Z0-9]+$/";
        if(preg_match($reg, $email)===0){
            return false;
        }else{
            return true;
        }
    }

    // function to validate username
    public static function validateUserName ($username) {
        $reg = "/^[a-zA-Z_0-9]+$/";
        if(preg_match($reg, $username)===0){
            return false;
        }else{
            return true;
        }
    }

}