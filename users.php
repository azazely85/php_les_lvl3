<?php
class User{
    public $name;
    public $login;
    public $password;
    function showInfo(){
        echo "Name: ".$this->name."<br/>";
        echo "Login: ".$this->login."<br/>";
        echo "Password: ".$this->password."<br/>";
    }
}
$user1 = new User();
$user1->name="Ivan";
$user1->login="ivan2";
$user1->password="123456";
$user2 = new User();
$user2->name="Petro";
$user2->login="petr2";
$user2->password="123456";
$user3 = new User();
$user3->name="Mark";
$user3->login="mark85";
$user3->password="123456";
$user1->showInfo();
$user2->showInfo();
$user3->showInfo();