<?php
class User extends UserAbstract {
    function __construct($name,$login,$password){
        $this->name=$name;
        $this->login=$login;
        $this->password=$password;
        $this->showInfo();
        $this->getInfo();
    }
    function showInfo(){
        echo "Name: ".$this->name."<br/>";
        echo "Login: ".$this->login."<br/>";
        echo "Password: ".$this->password."<br/>";
        echo "<hr>";
    }
}