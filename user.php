<?php
class user {
    private $id;

    public function __construct($id){
        $this->id =$id;
    }

    public function checkPassowrd($password){
        if(strlen($password) < 12){
            return "Password must be at least 12 char";
        }

        if(!preg_match('/[A-Z]/',$password)){
            return "Password must include at least one uppercase letter.";
        }

        if(!preg_match('/[a-z]/',$password)){
            return "Password must include at least one lower case letter";
        }

        if (!preg_match('/[\W_]/', $password)) { 
            return "Password must include at least one special character.";
        }
        return "password is valid";
    }
}

$ryan = new user(4);
echo $ryan->checkPassowrd('hinjnsmwomewpfmdS@');
