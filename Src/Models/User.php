<?php
namespace TT\Models;
class User{
    public $firstName = null;
    public $lastName = null;
    public $email = null;
    private $users = [];

    public function __construct(){
        echo  "User Model Loaded \n";
    }
    public function save()
    {
        array_push($this->users,[
            'firstName' => $this->firstName,
            'lastName'  => $this->lastName,
            'email'     => $this->email,
        ]);
    }
    public function all()
    {
        return $this->users;
    }
}

?>