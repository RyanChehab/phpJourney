<?php
class user {
    private $id;

    public function __construct($id,$name){
        $this->id =$id;
        $this->name = $name;
    }

    public static function checkPassowrd($password){
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

    public static function validateEmail($email){
        $pattern = '/@.*\./';
        if(preg_match($pattern,$email)){
            return "Valid email!";
        }
        else{
            return 'invalid email!';
        }
    }

    public function copy_with($id = null, $name = null){
        return new user(
            $id ?? $this->id,
            $name ?? $this->name        
        );
    }

    public function display() {
        echo "ID: {$this->id}, Name: {$this->name}" . PHP_EOL;
    }

}

$ryan = new user(4,'Ryan');
echo $ryan->checkPassowrd('hinjnsmwoSmewpfmd@');
echo $ryan->validateEmail("example@gmail.com");
$ryan->display();
$user2 = $ryan->copy_with(id:2);
$user2->display();