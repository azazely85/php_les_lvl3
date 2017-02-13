<?php
class User{
    public $name;
    public $login;
    public $password;
    function __construct($name,$login,$password){
        $this->name=$name;
        $this->login=$login;
        $this->password=$password;
    }
    function __destruct(){
        $this->showInfo();
    }

    function showInfo(){
        echo "Name: ".$this->name."<br/>";
        echo "Login: ".$this->login."<br/>";
        echo "Password: ".$this->password."<br/>";
        echo "<hr>";
    }
}
$user1 = new User("Ivan","ivan2","123456");

$user2 = new User("Petro","petr2","123456");

$user3 = new User("Mark","mark85","123456");
